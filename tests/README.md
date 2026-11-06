# Authentication regression tests

Run `composer test:jwt` (or `php tests/jwt-regression.php --require-strong-keys`).
Any failed check or unexpected exception exits with code 1.

Tokens are signed using PHP's HMAC functions independently of the JWT library.
Time is fixed, and no credentials, deployment configuration, or network are used.
Only the configuration-loading constructor is bypassed; the real
`Ganb\Auth::isValidToken()` is exercised.

Before updating dependencies, `php tests/jwt-regression.php` passed all 16 shared
cases on JWT 6.11.1 after fixing exception handling and missing-nonce handling.
JWT 7 additionally must reject 31-byte and empty secrets; the
`--require-strong-keys` flag enables those two checks. The valid 32-byte case
checks the accepted boundary. Short-secret rejection is an intentional change,
so the tests do not claim compatibility for secrets shorter than 32 bytes.

The generated tests under `corporate/test`, `personal/test`, and `webhook/test`
are empty scaffolds. Their migration to PHPUnit 9 permits loading them, but
their execution does not validate API behavior.
