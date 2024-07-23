<?php
/**
 * SpAccountTransferRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Personal\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/personal/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/personal/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
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

namespace Ganb\Personal\Client\Model;

use \ArrayAccess;
use \Ganb\Personal\Client\ObjectSerializer;
use ReturnTypeWillChange;

/**
 * SpAccountTransferRequest Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Personal\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SpAccountTransferRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SpAccountTransferRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deposit_sp_account_id' => 'string',
        'debit_sp_account_id' => 'string',
        'currency_code' => 'string',
        'payment_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deposit_sp_account_id' => null,
        'debit_sp_account_id' => null,
        'currency_code' => null,
        'payment_amount' => null
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
        'deposit_sp_account_id' => 'depositSpAccountId',
        'debit_sp_account_id' => 'debitSpAccountId',
        'currency_code' => 'currencyCode',
        'payment_amount' => 'paymentAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deposit_sp_account_id' => 'setDepositSpAccountId',
        'debit_sp_account_id' => 'setDebitSpAccountId',
        'currency_code' => 'setCurrencyCode',
        'payment_amount' => 'setPaymentAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deposit_sp_account_id' => 'getDepositSpAccountId',
        'debit_sp_account_id' => 'getDebitSpAccountId',
        'currency_code' => 'getCurrencyCode',
        'payment_amount' => 'getPaymentAmount'
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
        $this->container['deposit_sp_account_id'] = isset($data['deposit_sp_account_id']) ? $data['deposit_sp_account_id'] : null;
        $this->container['debit_sp_account_id'] = isset($data['debit_sp_account_id']) ? $data['debit_sp_account_id'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['payment_amount'] = isset($data['payment_amount']) ? $data['payment_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['deposit_sp_account_id'] === null) {
            $invalidProperties[] = "'deposit_sp_account_id' can't be null";
        }
        if ((mb_strlen($this->container['deposit_sp_account_id']) > 29)) {
            $invalidProperties[] = "invalid value for 'deposit_sp_account_id', the character length must be smaller than or equal to 29.";
        }

        if ((mb_strlen($this->container['deposit_sp_account_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'deposit_sp_account_id', the character length must be bigger than or equal to 12.";
        }

        if ($this->container['debit_sp_account_id'] === null) {
            $invalidProperties[] = "'debit_sp_account_id' can't be null";
        }
        if ((mb_strlen($this->container['debit_sp_account_id']) > 29)) {
            $invalidProperties[] = "invalid value for 'debit_sp_account_id', the character length must be smaller than or equal to 29.";
        }

        if ((mb_strlen($this->container['debit_sp_account_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'debit_sp_account_id', the character length must be bigger than or equal to 12.";
        }

        if (!is_null($this->container['currency_code']) && (mb_strlen($this->container['currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency_code']) && (mb_strlen($this->container['currency_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['payment_amount'] === null) {
            $invalidProperties[] = "'payment_amount' can't be null";
        }
        if ((mb_strlen($this->container['payment_amount']) > 20)) {
            $invalidProperties[] = "invalid value for 'payment_amount', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['payment_amount']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_amount', the character length must be bigger than or equal to 1.";
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
     * Gets deposit_sp_account_id
     *
     * @return string
     */
    public function getDepositSpAccountId()
    {
        return $this->container['deposit_sp_account_id'];
    }

    /**
     * Sets deposit_sp_account_id
     *
     * @param string $deposit_sp_account_id つかいわけ口座_入金口座ID 半角数字 口座を識別するID　入金先となる口座情報
     *
     * @return $this
     */
    public function setDepositSpAccountId($deposit_sp_account_id)
    {
        if ((mb_strlen($deposit_sp_account_id) > 29)) {
            throw new \InvalidArgumentException('invalid length for $deposit_sp_account_id when calling SpAccountTransferRequest., must be smaller than or equal to 29.');
        }
        if ((mb_strlen($deposit_sp_account_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $deposit_sp_account_id when calling SpAccountTransferRequest., must be bigger than or equal to 12.');
        }

        $this->container['deposit_sp_account_id'] = $deposit_sp_account_id;

        return $this;
    }

    /**
     * Gets debit_sp_account_id
     *
     * @return string
     */
    public function getDebitSpAccountId()
    {
        return $this->container['debit_sp_account_id'];
    }

    /**
     * Sets debit_sp_account_id
     *
     * @param string $debit_sp_account_id つかいわけ口座_出金口座ID 半角数字 口座を識別するID　引き落とし元となる口座情報
     *
     * @return $this
     */
    public function setDebitSpAccountId($debit_sp_account_id)
    {
        if ((mb_strlen($debit_sp_account_id) > 29)) {
            throw new \InvalidArgumentException('invalid length for $debit_sp_account_id when calling SpAccountTransferRequest., must be smaller than or equal to 29.');
        }
        if ((mb_strlen($debit_sp_account_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $debit_sp_account_id when calling SpAccountTransferRequest., must be bigger than or equal to 12.');
        }

        $this->container['debit_sp_account_id'] = $debit_sp_account_id;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code 通貨コード 半角文字 ISO4217準拠した通貨コード 省略時はJPYとみなします
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        if (!is_null($currency_code) && (mb_strlen($currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling SpAccountTransferRequest., must be smaller than or equal to 3.');
        }
        if (!is_null($currency_code) && (mb_strlen($currency_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling SpAccountTransferRequest., must be bigger than or equal to 3.');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets payment_amount
     *
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->container['payment_amount'];
    }

    /**
     * Sets payment_amount
     *
     * @param string $payment_amount 支払金額 数値のみでカンマ、マイナス不可 円(JPY)の場合１以上であること 外貨の場合当該通貨の補助通貨単位以上であること
     *
     * @return $this
     */
    public function setPaymentAmount($payment_amount)
    {
        if ((mb_strlen($payment_amount) > 20)) {
            throw new \InvalidArgumentException('invalid length for $payment_amount when calling SpAccountTransferRequest., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($payment_amount) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_amount when calling SpAccountTransferRequest., must be bigger than or equal to 1.');
        }

        $this->container['payment_amount'] = $payment_amount;

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


