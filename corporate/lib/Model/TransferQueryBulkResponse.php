<?php
/**
 * TransferQueryBulkResponse
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
 * TransferQueryBulkResponse Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferQueryBulkResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferQueryBulkResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_from' => 'string',
        'date_to' => 'string',
        'request_next_item_key' => 'string',
        'request_transfer_statuses' => '\Ganb\Corporate\Client\Model\RequestTransferStatus[]',
        'request_transfer_class' => 'string',
        'request_transfer_term' => 'string',
        'has_next' => 'bool',
        'next_item_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_from' => null,
        'date_to' => null,
        'request_next_item_key' => null,
        'request_transfer_statuses' => null,
        'request_transfer_class' => null,
        'request_transfer_term' => null,
        'has_next' => null,
        'next_item_key' => null
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
        'date_from' => 'dateFrom',
        'date_to' => 'dateTo',
        'request_next_item_key' => 'requestNextItemKey',
        'request_transfer_statuses' => 'requestTransferStatuses',
        'request_transfer_class' => 'requestTransferClass',
        'request_transfer_term' => 'requestTransferTerm',
        'has_next' => 'hasNext',
        'next_item_key' => 'nextItemKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'request_next_item_key' => 'setRequestNextItemKey',
        'request_transfer_statuses' => 'setRequestTransferStatuses',
        'request_transfer_class' => 'setRequestTransferClass',
        'request_transfer_term' => 'setRequestTransferTerm',
        'has_next' => 'setHasNext',
        'next_item_key' => 'setNextItemKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'request_next_item_key' => 'getRequestNextItemKey',
        'request_transfer_statuses' => 'getRequestTransferStatuses',
        'request_transfer_class' => 'getRequestTransferClass',
        'request_transfer_term' => 'getRequestTransferTerm',
        'has_next' => 'getHasNext',
        'next_item_key' => 'getNextItemKey'
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
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['request_next_item_key'] = isset($data['request_next_item_key']) ? $data['request_next_item_key'] : null;
        $this->container['request_transfer_statuses'] = isset($data['request_transfer_statuses']) ? $data['request_transfer_statuses'] : null;
        $this->container['request_transfer_class'] = isset($data['request_transfer_class']) ? $data['request_transfer_class'] : null;
        $this->container['request_transfer_term'] = isset($data['request_transfer_term']) ? $data['request_transfer_term'] : null;
        $this->container['has_next'] = isset($data['has_next']) ? $data['has_next'] : null;
        $this->container['next_item_key'] = isset($data['next_item_key']) ? $data['next_item_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['date_from']) && (mb_strlen($this->container['date_from']) > 10)) {
            $invalidProperties[] = "invalid value for 'date_from', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['date_from']) && (mb_strlen($this->container['date_from']) < 10)) {
            $invalidProperties[] = "invalid value for 'date_from', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['date_to']) && (mb_strlen($this->container['date_to']) > 10)) {
            $invalidProperties[] = "invalid value for 'date_to', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['date_to']) && (mb_strlen($this->container['date_to']) < 10)) {
            $invalidProperties[] = "invalid value for 'date_to', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['request_next_item_key']) && (mb_strlen($this->container['request_next_item_key']) > 24)) {
            $invalidProperties[] = "invalid value for 'request_next_item_key', the character length must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['request_next_item_key']) && (mb_strlen($this->container['request_next_item_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'request_next_item_key', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['request_transfer_class']) && (mb_strlen($this->container['request_transfer_class']) > 1)) {
            $invalidProperties[] = "invalid value for 'request_transfer_class', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['request_transfer_class']) && (mb_strlen($this->container['request_transfer_class']) < 1)) {
            $invalidProperties[] = "invalid value for 'request_transfer_class', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['request_transfer_term']) && (mb_strlen($this->container['request_transfer_term']) > 1)) {
            $invalidProperties[] = "invalid value for 'request_transfer_term', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['request_transfer_term']) && (mb_strlen($this->container['request_transfer_term']) < 1)) {
            $invalidProperties[] = "invalid value for 'request_transfer_term', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['next_item_key']) && (mb_strlen($this->container['next_item_key']) > 24)) {
            $invalidProperties[] = "invalid value for 'next_item_key', the character length must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['next_item_key']) && (mb_strlen($this->container['next_item_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'next_item_key', the character length must be bigger than or equal to 1.";
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
     * @param string $date_from 対象期間From 半角文字 リクエストしたときと同じ内容 対象期間（From）をYYYY-MM-DD形式で設定
     *
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        if (!is_null($date_from) && (mb_strlen($date_from) > 10)) {
            throw new \InvalidArgumentException('invalid length for $date_from when calling TransferQueryBulkResponse., must be smaller than or equal to 10.');
        }
        if (!is_null($date_from) && (mb_strlen($date_from) < 10)) {
            throw new \InvalidArgumentException('invalid length for $date_from when calling TransferQueryBulkResponse., must be bigger than or equal to 10.');
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
     * @param string $date_to 対象期間To 半角文字 リクエストしたときと同じ内容 対象期間（To）をYYYY-MM-DD形式で設定
     *
     * @return $this
     */
    public function setDateTo($date_to)
    {
        if (!is_null($date_to) && (mb_strlen($date_to) > 10)) {
            throw new \InvalidArgumentException('invalid length for $date_to when calling TransferQueryBulkResponse., must be smaller than or equal to 10.');
        }
        if (!is_null($date_to) && (mb_strlen($date_to) < 10)) {
            throw new \InvalidArgumentException('invalid length for $date_to when calling TransferQueryBulkResponse., must be bigger than or equal to 10.');
        }

        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets request_next_item_key
     *
     * @return string
     */
    public function getRequestNextItemKey()
    {
        return $this->container['request_next_item_key'];
    }

    /**
     * Sets request_next_item_key
     *
     * @param string $request_next_item_key リクエスト時次明細キー 半角数字 リクエストしたときと同じ内容 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setRequestNextItemKey($request_next_item_key)
    {
        if (!is_null($request_next_item_key) && (mb_strlen($request_next_item_key) > 24)) {
            throw new \InvalidArgumentException('invalid length for $request_next_item_key when calling TransferQueryBulkResponse., must be smaller than or equal to 24.');
        }
        if (!is_null($request_next_item_key) && (mb_strlen($request_next_item_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $request_next_item_key when calling TransferQueryBulkResponse., must be bigger than or equal to 1.');
        }

        $this->container['request_next_item_key'] = $request_next_item_key;

        return $this;
    }

    /**
     * Gets request_transfer_statuses
     *
     * @return \Ganb\Corporate\Client\Model\RequestTransferStatus[]
     */
    public function getRequestTransferStatuses()
    {
        return $this->container['request_transfer_statuses'];
    }

    /**
     * Sets request_transfer_statuses
     *
     * @param \Ganb\Corporate\Client\Model\RequestTransferStatus[] $request_transfer_statuses 振込一括照会対象ステータス 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setRequestTransferStatuses($request_transfer_statuses)
    {
        $this->container['request_transfer_statuses'] = $request_transfer_statuses;

        return $this;
    }

    /**
     * Gets request_transfer_class
     *
     * @return string
     */
    public function getRequestTransferClass()
    {
        return $this->container['request_transfer_class'];
    }

    /**
     * Sets request_transfer_class
     *
     * @param string $request_transfer_class 照会対象取得区分 半角数字 リクエストしたときと同じ内容 1：ALL、2：振込申請のみ、3：振込受付情報のみ 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setRequestTransferClass($request_transfer_class)
    {
        if (!is_null($request_transfer_class) && (mb_strlen($request_transfer_class) > 1)) {
            throw new \InvalidArgumentException('invalid length for $request_transfer_class when calling TransferQueryBulkResponse., must be smaller than or equal to 1.');
        }
        if (!is_null($request_transfer_class) && (mb_strlen($request_transfer_class) < 1)) {
            throw new \InvalidArgumentException('invalid length for $request_transfer_class when calling TransferQueryBulkResponse., must be bigger than or equal to 1.');
        }

        $this->container['request_transfer_class'] = $request_transfer_class;

        return $this;
    }

    /**
     * Gets request_transfer_term
     *
     * @return string
     */
    public function getRequestTransferTerm()
    {
        return $this->container['request_transfer_term'];
    }

    /**
     * Sets request_transfer_term
     *
     * @param string $request_transfer_term 振込照会対象期間区分 半角数字 リクエストしたときと同じ内容 1：振込申請受付日　2：振込指定日 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setRequestTransferTerm($request_transfer_term)
    {
        if (!is_null($request_transfer_term) && (mb_strlen($request_transfer_term) > 1)) {
            throw new \InvalidArgumentException('invalid length for $request_transfer_term when calling TransferQueryBulkResponse., must be smaller than or equal to 1.');
        }
        if (!is_null($request_transfer_term) && (mb_strlen($request_transfer_term) < 1)) {
            throw new \InvalidArgumentException('invalid length for $request_transfer_term when calling TransferQueryBulkResponse., must be bigger than or equal to 1.');
        }

        $this->container['request_transfer_term'] = $request_transfer_term;

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
     * @param string $next_item_key 次明細キー 半角数字 次明細フラグがfalseの場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setNextItemKey($next_item_key)
    {
        if (!is_null($next_item_key) && (mb_strlen($next_item_key) > 24)) {
            throw new \InvalidArgumentException('invalid length for $next_item_key when calling TransferQueryBulkResponse., must be smaller than or equal to 24.');
        }
        if (!is_null($next_item_key) && (mb_strlen($next_item_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $next_item_key when calling TransferQueryBulkResponse., must be bigger than or equal to 1.');
        }

        $this->container['next_item_key'] = $next_item_key;

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


