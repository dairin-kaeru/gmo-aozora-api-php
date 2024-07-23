<?php
/**
 * VaDepositTransactionsResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/corporation/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/corporation/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
 *
 * OpenAPI spec version: 1.1.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ganb\Corporate\Client\Model;

use \ArrayAccess;
use \Ganb\Corporate\Client\ObjectSerializer;
use ReturnTypeWillChange;

/**
 * VaDepositTransactionsResponse Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VaDepositTransactionsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VaDepositTransactionsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ra_id' => 'string',
        'ra_branch_code' => 'string',
        'ra_branch_name_kana' => 'string',
        'ra_account_number' => 'string',
        'ra_holder_name' => 'string',
        'date_from' => 'string',
        'date_to' => 'string',
        'base_date' => 'string',
        'base_time' => 'string',
        'has_next' => 'bool',
        'next_item_key' => 'string',
        'count' => 'string',
        'va_transactions' => '\Ganb\Corporate\Client\Model\VaTransaction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ra_id' => null,
        'ra_branch_code' => null,
        'ra_branch_name_kana' => null,
        'ra_account_number' => null,
        'ra_holder_name' => null,
        'date_from' => null,
        'date_to' => null,
        'base_date' => null,
        'base_time' => null,
        'has_next' => null,
        'next_item_key' => null,
        'count' => null,
        'va_transactions' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ra_id' => 'raId',
        'ra_branch_code' => 'raBranchCode',
        'ra_branch_name_kana' => 'raBranchNameKana',
        'ra_account_number' => 'raAccountNumber',
        'ra_holder_name' => 'raHolderName',
        'date_from' => 'dateFrom',
        'date_to' => 'dateTo',
        'base_date' => 'baseDate',
        'base_time' => 'baseTime',
        'has_next' => 'hasNext',
        'next_item_key' => 'nextItemKey',
        'count' => 'count',
        'va_transactions' => 'vaTransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ra_id' => 'setRaId',
        'ra_branch_code' => 'setRaBranchCode',
        'ra_branch_name_kana' => 'setRaBranchNameKana',
        'ra_account_number' => 'setRaAccountNumber',
        'ra_holder_name' => 'setRaHolderName',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'base_date' => 'setBaseDate',
        'base_time' => 'setBaseTime',
        'has_next' => 'setHasNext',
        'next_item_key' => 'setNextItemKey',
        'count' => 'setCount',
        'va_transactions' => 'setVaTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ra_id' => 'getRaId',
        'ra_branch_code' => 'getRaBranchCode',
        'ra_branch_name_kana' => 'getRaBranchNameKana',
        'ra_account_number' => 'getRaAccountNumber',
        'ra_holder_name' => 'getRaHolderName',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'base_date' => 'getBaseDate',
        'base_time' => 'getBaseTime',
        'has_next' => 'getHasNext',
        'next_item_key' => 'getNextItemKey',
        'count' => 'getCount',
        'va_transactions' => 'getVaTransactions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ra_id'] = isset($data['ra_id']) ? $data['ra_id'] : null;
        $this->container['ra_branch_code'] = isset($data['ra_branch_code']) ? $data['ra_branch_code'] : null;
        $this->container['ra_branch_name_kana'] = isset($data['ra_branch_name_kana']) ? $data['ra_branch_name_kana'] : null;
        $this->container['ra_account_number'] = isset($data['ra_account_number']) ? $data['ra_account_number'] : null;
        $this->container['ra_holder_name'] = isset($data['ra_holder_name']) ? $data['ra_holder_name'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['base_date'] = isset($data['base_date']) ? $data['base_date'] : null;
        $this->container['base_time'] = isset($data['base_time']) ? $data['base_time'] : null;
        $this->container['has_next'] = isset($data['has_next']) ? $data['has_next'] : null;
        $this->container['next_item_key'] = isset($data['next_item_key']) ? $data['next_item_key'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['va_transactions'] = isset($data['va_transactions']) ? $data['va_transactions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ra_id'] === null) {
            $invalidProperties[] = "'ra_id' can't be null";
        }
        if ((mb_strlen($this->container['ra_id']) > 29)) {
            $invalidProperties[] = "invalid value for 'ra_id', the character length must be smaller than or equal to 29.";
        }

        if ((mb_strlen($this->container['ra_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'ra_id', the character length must be bigger than or equal to 12.";
        }

        if ($this->container['ra_branch_code'] === null) {
            $invalidProperties[] = "'ra_branch_code' can't be null";
        }
        if ((mb_strlen($this->container['ra_branch_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'ra_branch_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['ra_branch_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'ra_branch_code', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['ra_branch_name_kana'] === null) {
            $invalidProperties[] = "'ra_branch_name_kana' can't be null";
        }
        if ((mb_strlen($this->container['ra_branch_name_kana']) > 15)) {
            $invalidProperties[] = "invalid value for 'ra_branch_name_kana', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['ra_branch_name_kana']) < 1)) {
            $invalidProperties[] = "invalid value for 'ra_branch_name_kana', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['ra_account_number'] === null) {
            $invalidProperties[] = "'ra_account_number' can't be null";
        }
        if ((mb_strlen($this->container['ra_account_number']) > 7)) {
            $invalidProperties[] = "invalid value for 'ra_account_number', the character length must be smaller than or equal to 7.";
        }

        if ((mb_strlen($this->container['ra_account_number']) < 7)) {
            $invalidProperties[] = "invalid value for 'ra_account_number', the character length must be bigger than or equal to 7.";
        }

        if ($this->container['ra_holder_name'] === null) {
            $invalidProperties[] = "'ra_holder_name' can't be null";
        }
        if ((mb_strlen($this->container['ra_holder_name']) > 48)) {
            $invalidProperties[] = "invalid value for 'ra_holder_name', the character length must be smaller than or equal to 48.";
        }

        if ((mb_strlen($this->container['ra_holder_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'ra_holder_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['date_from'] === null) {
            $invalidProperties[] = "'date_from' can't be null";
        }
        if ((mb_strlen($this->container['date_from']) > 10)) {
            $invalidProperties[] = "invalid value for 'date_from', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['date_from']) < 10)) {
            $invalidProperties[] = "invalid value for 'date_from', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['date_to'] === null) {
            $invalidProperties[] = "'date_to' can't be null";
        }
        if ((mb_strlen($this->container['date_to']) > 10)) {
            $invalidProperties[] = "invalid value for 'date_to', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['date_to']) < 10)) {
            $invalidProperties[] = "invalid value for 'date_to', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['base_date'] === null) {
            $invalidProperties[] = "'base_date' can't be null";
        }
        if ((mb_strlen($this->container['base_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'base_date', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['base_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'base_date', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['base_time'] === null) {
            $invalidProperties[] = "'base_time' can't be null";
        }
        if ((mb_strlen($this->container['base_time']) > 14)) {
            $invalidProperties[] = "invalid value for 'base_time', the character length must be smaller than or equal to 14.";
        }

        if ((mb_strlen($this->container['base_time']) < 14)) {
            $invalidProperties[] = "invalid value for 'base_time', the character length must be bigger than or equal to 14.";
        }

        if ($this->container['has_next'] === null) {
            $invalidProperties[] = "'has_next' can't be null";
        }
        if (!is_null($this->container['next_item_key']) && (mb_strlen($this->container['next_item_key']) > 24)) {
            $invalidProperties[] = "invalid value for 'next_item_key', the character length must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['next_item_key']) && (mb_strlen($this->container['next_item_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'next_item_key', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ((mb_strlen($this->container['count']) > 7)) {
            $invalidProperties[] = "invalid value for 'count', the character length must be smaller than or equal to 7.";
        }

        if ((mb_strlen($this->container['count']) < 1)) {
            $invalidProperties[] = "invalid value for 'count', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ra_id
     *
     * @return string
     */
    public function getRaId()
    {
        return $this->container['ra_id'];
    }

    /**
     * Sets ra_id
     *
     * @param string $ra_id 入金口座ID 半角数字 入金先の口座を識別するID
     *
     * @return $this
     */
    public function setRaId($ra_id)
    {
        if ((mb_strlen($ra_id) > 29)) {
            throw new \InvalidArgumentException('invalid length for $ra_id when calling VaDepositTransactionsResponse., must be smaller than or equal to 29.');
        }
        if ((mb_strlen($ra_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $ra_id when calling VaDepositTransactionsResponse., must be bigger than or equal to 12.');
        }

        $this->container['ra_id'] = $ra_id;

        return $this;
    }

    /**
     * Gets ra_branch_code
     *
     * @return string
     */
    public function getRaBranchCode()
    {
        return $this->container['ra_branch_code'];
    }

    /**
     * Sets ra_branch_code
     *
     * @param string $ra_branch_code 入金口座　支店コード 半角数字
     *
     * @return $this
     */
    public function setRaBranchCode($ra_branch_code)
    {
        if ((mb_strlen($ra_branch_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $ra_branch_code when calling VaDepositTransactionsResponse., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($ra_branch_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $ra_branch_code when calling VaDepositTransactionsResponse., must be bigger than or equal to 3.');
        }

        $this->container['ra_branch_code'] = $ra_branch_code;

        return $this;
    }

    /**
     * Gets ra_branch_name_kana
     *
     * @return string
     */
    public function getRaBranchNameKana()
    {
        return $this->container['ra_branch_name_kana'];
    }

    /**
     * Sets ra_branch_name_kana
     *
     * @param string $ra_branch_name_kana 入金口座　支店名カナ 半角文字
     *
     * @return $this
     */
    public function setRaBranchNameKana($ra_branch_name_kana)
    {
        if ((mb_strlen($ra_branch_name_kana) > 15)) {
            throw new \InvalidArgumentException('invalid length for $ra_branch_name_kana when calling VaDepositTransactionsResponse., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($ra_branch_name_kana) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ra_branch_name_kana when calling VaDepositTransactionsResponse., must be bigger than or equal to 1.');
        }

        $this->container['ra_branch_name_kana'] = $ra_branch_name_kana;

        return $this;
    }

    /**
     * Gets ra_account_number
     *
     * @return string
     */
    public function getRaAccountNumber()
    {
        return $this->container['ra_account_number'];
    }

    /**
     * Sets ra_account_number
     *
     * @param string $ra_account_number 入金口座　口座番号 半角数字
     *
     * @return $this
     */
    public function setRaAccountNumber($ra_account_number)
    {
        if ((mb_strlen($ra_account_number) > 7)) {
            throw new \InvalidArgumentException('invalid length for $ra_account_number when calling VaDepositTransactionsResponse., must be smaller than or equal to 7.');
        }
        if ((mb_strlen($ra_account_number) < 7)) {
            throw new \InvalidArgumentException('invalid length for $ra_account_number when calling VaDepositTransactionsResponse., must be bigger than or equal to 7.');
        }

        $this->container['ra_account_number'] = $ra_account_number;

        return $this;
    }

    /**
     * Gets ra_holder_name
     *
     * @return string
     */
    public function getRaHolderName()
    {
        return $this->container['ra_holder_name'];
    }

    /**
     * Sets ra_holder_name
     *
     * @param string $ra_holder_name 入金口座　口座名義（漢字） 全角文字
     *
     * @return $this
     */
    public function setRaHolderName($ra_holder_name)
    {
        if ((mb_strlen($ra_holder_name) > 48)) {
            throw new \InvalidArgumentException('invalid length for $ra_holder_name when calling VaDepositTransactionsResponse., must be smaller than or equal to 48.');
        }
        if ((mb_strlen($ra_holder_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ra_holder_name when calling VaDepositTransactionsResponse., must be bigger than or equal to 1.');
        }

        $this->container['ra_holder_name'] = $ra_holder_name;

        return $this;
    }

    /**
     * Gets date_from
     *
     * @return string
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param string $date_from 対象期間From 半角文字 YYYY-MM-DD形式 リクエストに対象期間From、Toが設定されていない場合は当日日付が設定されます
     *
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        if ((mb_strlen($date_from) > 10)) {
            throw new \InvalidArgumentException('invalid length for $date_from when calling VaDepositTransactionsResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($date_from) < 10)) {
            throw new \InvalidArgumentException('invalid length for $date_from when calling VaDepositTransactionsResponse., must be bigger than or equal to 10.');
        }

        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     *
     * @return string
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param string $date_to 対象期間To 半角文字 YYYY-MM-DD形式 リクエストに対象期間From、Toが設定されていない場合は当日日付が設定されます
     *
     * @return $this
     */
    public function setDateTo($date_to)
    {
        if ((mb_strlen($date_to) > 10)) {
            throw new \InvalidArgumentException('invalid length for $date_to when calling VaDepositTransactionsResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($date_to) < 10)) {
            throw new \InvalidArgumentException('invalid length for $date_to when calling VaDepositTransactionsResponse., must be bigger than or equal to 10.');
        }

        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets base_date
     *
     * @return string
     */
    public function getBaseDate()
    {
        return $this->container['base_date'];
    }

    /**
     * Sets base_date
     *
     * @param string $base_date 基準日 半角文字 入金明細を照会した基準日を示します YYYY-MM-DD形式
     *
     * @return $this
     */
    public function setBaseDate($base_date)
    {
        if ((mb_strlen($base_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $base_date when calling VaDepositTransactionsResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($base_date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $base_date when calling VaDepositTransactionsResponse., must be bigger than or equal to 10.');
        }

        $this->container['base_date'] = $base_date;

        return $this;
    }

    /**
     * Gets base_time
     *
     * @return string
     */
    public function getBaseTime()
    {
        return $this->container['base_time'];
    }

    /**
     * Sets base_time
     *
     * @param string $base_time 基準時刻 半角文字 入金明細を照会した基準時刻を示します HH:MM:SS+09:00形式
     *
     * @return $this
     */
    public function setBaseTime($base_time)
    {
        if ((mb_strlen($base_time) > 14)) {
            throw new \InvalidArgumentException('invalid length for $base_time when calling VaDepositTransactionsResponse., must be smaller than or equal to 14.');
        }
        if ((mb_strlen($base_time) < 14)) {
            throw new \InvalidArgumentException('invalid length for $base_time when calling VaDepositTransactionsResponse., must be bigger than or equal to 14.');
        }

        $this->container['base_time'] = $base_time;

        return $this;
    }

    /**
     * Gets has_next
     *
     * @return bool
     */
    public function getHasNext()
    {
        return $this->container['has_next'];
    }

    /**
     * Sets has_next
     *
     * @param bool $has_next 次明細フラグ ・true=次明細あり ・false=次明細なし
     *
     * @return $this
     */
    public function setHasNext($has_next)
    {
        $this->container['has_next'] = $has_next;

        return $this;
    }

    /**
     * Gets next_item_key
     *
     * @return string
     */
    public function getNextItemKey()
    {
        return $this->container['next_item_key'];
    }

    /**
     * Sets next_item_key
     *
     * @param string $next_item_key 次明細キー 半角数字 次明細フラグがfalseの場合は、項目自体を設定しません
     *
     * @return $this
     */
    public function setNextItemKey($next_item_key)
    {
        if (!is_null($next_item_key) && (mb_strlen($next_item_key) > 24)) {
            throw new \InvalidArgumentException('invalid length for $next_item_key when calling VaDepositTransactionsResponse., must be smaller than or equal to 24.');
        }
        if (!is_null($next_item_key) && (mb_strlen($next_item_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $next_item_key when calling VaDepositTransactionsResponse., must be bigger than or equal to 1.');
        }

        $this->container['next_item_key'] = $next_item_key;

        return $this;
    }

    /**
     * Gets count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param string $count 明細取得件数 半角数字
     *
     * @return $this
     */
    public function setCount($count)
    {
        if ((mb_strlen($count) > 7)) {
            throw new \InvalidArgumentException('invalid length for $count when calling VaDepositTransactionsResponse., must be smaller than or equal to 7.');
        }
        if ((mb_strlen($count) < 1)) {
            throw new \InvalidArgumentException('invalid length for $count when calling VaDepositTransactionsResponse., must be bigger than or equal to 1.');
        }

        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets va_transactions
     *
     * @return \Ganb\Corporate\Client\Model\VaTransaction[]
     */
    public function getVaTransactions()
    {
        return $this->container['va_transactions'];
    }

    /**
     * Sets va_transactions
     *
     * @param \Ganb\Corporate\Client\Model\VaTransaction[] $va_transactions 振込入金口座入金明細情報リスト 該当する情報が無い場合は、空のリストを返却します
     *
     * @return $this
     */
    public function setVaTransactions($va_transactions)
    {
        $this->container['va_transactions'] = $va_transactions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


