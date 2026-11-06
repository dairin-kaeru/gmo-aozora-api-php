<?php

// Standalone runner so the same tests work before and after dependency upgrades.
require __DIR__ . '/../vendor/autoload.php';

use Firebase\JWT\JWT;
use Ganb\Auth;

function token(array $claims, string $secret, string $algorithm = 'HS256'): string
{
    $encode = static function (string $value): string {
        return rtrim(strtr(base64_encode($value), '+/', '-_'), '=');
    };
    $body = $encode(json_encode(['typ' => 'JWT', 'alg' => $algorithm])) . '.'
        . $encode(json_encode($claims));
    return $body . '.' . $encode(hash_hmac('sha256', $body, $secret, true));
}

// Auth's constructor loads deployment configuration; token validation needs none.
$auth = (new ReflectionClass(Auth::class))->newInstanceWithoutConstructor();
$secret = str_repeat('a', 32);
$now = 1800000000;
$claims = ['nonce' => 'test-nonce', 'iat' => $now - 10, 'nbf' => $now - 10, 'exp' => $now + 60];
$validToken = token($claims, $secret);
$tamperedParts = explode('.', token(array_merge($claims, ['nonce' => 'tampered']), $secret));
$tamperedParts[2] = explode('.', $validToken)[2];
$cases = [
    'valid HS256 / 32-byte secret' => [$validToken, $secret, 'test-nonce', true],
    'valid HS256 / 64-byte secret' => [token($claims, str_repeat('b', 64)), str_repeat('b', 64), 'test-nonce', true],
    'nonce mismatch' => [token($claims, $secret), $secret, 'other-nonce', false],
    'nonce type mismatch' => [token(array_merge($claims, ['nonce' => 123]), $secret), $secret, '123', false],
    'missing nonce' => [token(array_diff_key($claims, ['nonce' => true]), $secret), $secret, 'test-nonce', false],
    'wrong signing secret' => [token($claims, str_repeat('c', 32)), $secret, 'test-nonce', false],
    'tampered payload' => [implode('.', $tamperedParts), $secret, 'tampered', false],
    'expired token' => [token(array_merge($claims, ['exp' => $now - 1]), $secret), $secret, 'test-nonce', false],
    'expiration boundary' => [token(array_merge($claims, ['exp' => $now]), $secret), $secret, 'test-nonce', false],
    'future nbf' => [token(array_merge($claims, ['nbf' => $now + 60]), $secret), $secret, 'test-nonce', false],
    'future iat without nbf' => [token(array_diff_key(array_merge($claims, ['iat' => $now + 60]), ['nbf' => true]), $secret), $secret, 'test-nonce', false],
    'algorithm mismatch' => [token($claims, $secret, 'HS384'), $secret, 'test-nonce', false],
    'unsigned token' => [implode('.', array_slice(explode('.', token($claims, $secret, 'none')), 0, 2)) . '.', $secret, 'test-nonce', false],
    'malformed token' => ['not-a-jwt', $secret, 'test-nonce', false],
    'invalid JSON' => ['e30.bm90LWpzb24.signature', $secret, 'test-nonce', false],
    'empty token' => ['', $secret, 'test-nonce', false],
];

// v7 intentionally rejects HS256 secrets shorter than 32 bytes.
if (in_array('--require-strong-keys', $argv, true)) {
    $cases['31-byte secret rejected'] = [token($claims, str_repeat('s', 31)), str_repeat('s', 31), 'test-nonce', false];
    $cases['empty secret rejected'] = [token($claims, ''), '', 'test-nonce', false];
}

$oldTimestamp = JWT::$timestamp;
$oldLeeway = JWT::$leeway;
JWT::$timestamp = $now;
JWT::$leeway = 0;
set_error_handler(static function ($severity, $message, $file, $line) {
    // Error must escape Auth's catch (Exception), so warnings fail the test.
    throw new Error("$message at $file:$line");
});
$failures = 0;
try {
    foreach ($cases as $name => [$jwt, $key, $nonce, $expected]) {
        try {
            $actual = $auth->isValidToken($jwt, $key, $nonce);
            if ($actual !== $expected) {
                throw new RuntimeException('Expected ' . var_export($expected, true) . ', got ' . var_export($actual, true));
            }
            echo "PASS: $name\n";
        } catch (Throwable $error) {
            ++$failures;
            fwrite(STDERR, "FAIL: $name: " . get_class($error) . ': ' . $error->getMessage() . "\n");
        }
    }
} finally {
    restore_error_handler();
    JWT::$timestamp = $oldTimestamp;
    JWT::$leeway = $oldLeeway;
}
echo count($cases) . " cases, $failures failures\n";
exit($failures === 0 ? 0 : 1);
