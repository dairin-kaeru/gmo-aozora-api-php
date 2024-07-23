<?php
/**
 * TransferRequestResponse
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
 * TransferRequestResponse Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferRequestResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferRequestResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'result_code' => 'string',
        'apply_no' => 'string',
        'apply_end_datetime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'result_code' => null,
        'apply_no' => null,
        'apply_end_datetime' => null
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
        'account_id' => 'accountId',
        'result_code' => 'resultCode',
        'apply_no' => 'applyNo',
        'apply_end_datetime' => 'applyEndDatetime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'result_code' => 'setResultCode',
        'apply_no' => 'setApplyNo',
        'apply_end_datetime' => 'setApplyEndDatetime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'result_code' => 'getResultCode',
        'apply_no' => 'getApplyNo',
        'apply_end_datetime' => 'getApplyEndDatetime'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['apply_no'] = isset($data['apply_no']) ? $data['apply_no'] : null;
        $this->container['apply_end_datetime'] = isset($data['apply_end_datetime']) ? $data['apply_end_datetime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ((mb_strlen($this->container['account_id']) > 29)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be smaller than or equal to 29.";
        }

        if ((mb_strlen($this->container['account_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be bigger than or equal to 12.";
        }

        if ($this->container['result_code'] === null) {
            $invalidProperties[] = "'result_code' can't be null";
        }
        if ((mb_strlen($this->container['result_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'result_code', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['result_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'result_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['apply_no'] === null) {
            $invalidProperties[] = "'apply_no' can't be null";
        }
        if ((mb_strlen($this->container['apply_no']) > 16)) {
            $invalidProperties[] = "invalid value for 'apply_no', the character length must be smaller than or equal to 16.";
        }

        if ((mb_strlen($this->container['apply_no']) < 16)) {
            $invalidProperties[] = "invalid value for 'apply_no', the character length must be bigger than or equal to 16.";
        }

        if (!is_null($this->container['apply_end_datetime']) && (mb_strlen($this->container['apply_end_datetime']) > 25)) {
            $invalidProperties[] = "invalid value for 'apply_end_datetime', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['apply_end_datetime']) && (mb_strlen($this->container['apply_end_datetime']) < 25)) {
            $invalidProperties[] = "invalid value for 'apply_end_datetime', the character length must be bigger than or equal to 25.";
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id 口座ID 半角数字 口座を識別するID
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        if ((mb_strlen($account_id) > 29)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling TransferRequestResponse., must be smaller than or equal to 29.');
        }
        if ((mb_strlen($account_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling TransferRequestResponse., must be bigger than or equal to 12.');
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets result_code
     *
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     *
     * @param string $result_code 結果コード 半角数字 1:完了　2：未完了
     *
     * @return $this
     */
    public function setResultCode($result_code)
    {
        if ((mb_strlen($result_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $result_code when calling TransferRequestResponse., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($result_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $result_code when calling TransferRequestResponse., must be bigger than or equal to 1.');
        }

        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets apply_no
     *
     * @return string
     */
    public function getApplyNo()
    {
        return $this->container['apply_no'];
    }

    /**
     * Sets apply_no
     *
     * @param string $apply_no 受付番号（振込申請番号） 半角数字 すべての振込・総合振込で採番される、照会の基本単位となる番号
     *
     * @return $this
     */
    public function setApplyNo($apply_no)
    {
        if ((mb_strlen($apply_no) > 16)) {
            throw new \InvalidArgumentException('invalid length for $apply_no when calling TransferRequestResponse., must be smaller than or equal to 16.');
        }
        if ((mb_strlen($apply_no) < 16)) {
            throw new \InvalidArgumentException('invalid length for $apply_no when calling TransferRequestResponse., must be bigger than or equal to 16.');
        }

        $this->container['apply_no'] = $apply_no;

        return $this;
    }

    /**
     * Gets apply_end_datetime
     *
     * @return string
     */
    public function getApplyEndDatetime()
    {
        return $this->container['apply_end_datetime'];
    }

    /**
     * Sets apply_end_datetime
     *
     * @param string $apply_end_datetime 振込依頼完了日時 半角文字 YYYY-MM-DDTHH:MM:SS+09:00形式 結果コードが、1:完了のときのみセット それ以外は項目自体を設定しません
     *
     * @return $this
     */
    public function setApplyEndDatetime($apply_end_datetime)
    {
        if (!is_null($apply_end_datetime) && (mb_strlen($apply_end_datetime) > 25)) {
            throw new \InvalidArgumentException('invalid length for $apply_end_datetime when calling TransferRequestResponse., must be smaller than or equal to 25.');
        }
        if (!is_null($apply_end_datetime) && (mb_strlen($apply_end_datetime) < 25)) {
            throw new \InvalidArgumentException('invalid length for $apply_end_datetime when calling TransferRequestResponse., must be bigger than or equal to 25.');
        }

        $this->container['apply_end_datetime'] = $apply_end_datetime;

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


