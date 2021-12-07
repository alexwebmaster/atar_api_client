<?php
/**
 * PurchaseDenied
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API BaaS - Atar B2B
 *
 * Documentação da API do serviço de Banking as a Service.
 *
 * OpenAPI spec version: v3.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PurchaseDenied Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseDenied implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseDenied';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'message_id' => 'float',
'card_id' => 'float',
'account_id' => 'float',
'date' => 'string',
'mti' => 'string',
'processing_code' => 'string',
'amount' => 'float',
'nsu' => 'string',
'transaction_type' => 'string',
'installments' => 'float',
'network' => 'string',
'entry_mode' => 'string',
'merchant' => 'string',
'mcc' => 'string',
'currency_code' => 'float',
'country_code' => 'string',
'flag_pin' => 'bool',
'flag_cvv1' => 'bool',
'flag_cvv2' => 'bool',
'flag_icvv' => 'bool',
'flag_token' => 'bool',
'response_code' => 'string',
'authorizer_response' => 'string',
'reason' => 'string',
'properties' => '\Swagger\Client\Model\PropertiesPurchaseDenied'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'message_id' => null,
'card_id' => null,
'account_id' => null,
'date' => null,
'mti' => null,
'processing_code' => null,
'amount' => null,
'nsu' => null,
'transaction_type' => null,
'installments' => null,
'network' => null,
'entry_mode' => null,
'merchant' => null,
'mcc' => null,
'currency_code' => null,
'country_code' => null,
'flag_pin' => null,
'flag_cvv1' => null,
'flag_cvv2' => null,
'flag_icvv' => null,
'flag_token' => null,
'response_code' => null,
'authorizer_response' => null,
'reason' => null,
'properties' => null    ];

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
        'message_id' => 'message_id',
'card_id' => 'card_id',
'account_id' => 'account_id',
'date' => 'date',
'mti' => 'mti',
'processing_code' => 'processing_code',
'amount' => 'amount',
'nsu' => 'nsu',
'transaction_type' => 'transaction_type',
'installments' => 'installments',
'network' => 'network',
'entry_mode' => 'entry_mode',
'merchant' => 'merchant',
'mcc' => 'mcc',
'currency_code' => 'currency_code',
'country_code' => 'country_code',
'flag_pin' => 'flag_PIN',
'flag_cvv1' => 'flag_CVV1',
'flag_cvv2' => 'flag_CVV2',
'flag_icvv' => 'flag_ICVV',
'flag_token' => 'flag_TOKEN',
'response_code' => 'response_code',
'authorizer_response' => 'authorizer_response',
'reason' => 'reason',
'properties' => 'properties'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_id' => 'setMessageId',
'card_id' => 'setCardId',
'account_id' => 'setAccountId',
'date' => 'setDate',
'mti' => 'setMti',
'processing_code' => 'setProcessingCode',
'amount' => 'setAmount',
'nsu' => 'setNsu',
'transaction_type' => 'setTransactionType',
'installments' => 'setInstallments',
'network' => 'setNetwork',
'entry_mode' => 'setEntryMode',
'merchant' => 'setMerchant',
'mcc' => 'setMcc',
'currency_code' => 'setCurrencyCode',
'country_code' => 'setCountryCode',
'flag_pin' => 'setFlagPin',
'flag_cvv1' => 'setFlagCvv1',
'flag_cvv2' => 'setFlagCvv2',
'flag_icvv' => 'setFlagIcvv',
'flag_token' => 'setFlagToken',
'response_code' => 'setResponseCode',
'authorizer_response' => 'setAuthorizerResponse',
'reason' => 'setReason',
'properties' => 'setProperties'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_id' => 'getMessageId',
'card_id' => 'getCardId',
'account_id' => 'getAccountId',
'date' => 'getDate',
'mti' => 'getMti',
'processing_code' => 'getProcessingCode',
'amount' => 'getAmount',
'nsu' => 'getNsu',
'transaction_type' => 'getTransactionType',
'installments' => 'getInstallments',
'network' => 'getNetwork',
'entry_mode' => 'getEntryMode',
'merchant' => 'getMerchant',
'mcc' => 'getMcc',
'currency_code' => 'getCurrencyCode',
'country_code' => 'getCountryCode',
'flag_pin' => 'getFlagPin',
'flag_cvv1' => 'getFlagCvv1',
'flag_cvv2' => 'getFlagCvv2',
'flag_icvv' => 'getFlagIcvv',
'flag_token' => 'getFlagToken',
'response_code' => 'getResponseCode',
'authorizer_response' => 'getAuthorizerResponse',
'reason' => 'getReason',
'properties' => 'getProperties'    ];

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
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['mti'] = isset($data['mti']) ? $data['mti'] : '0200';
        $this->container['processing_code'] = isset($data['processing_code']) ? $data['processing_code'] : '002000';
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['nsu'] = isset($data['nsu']) ? $data['nsu'] : '75955';
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : 'ON-US';
        $this->container['installments'] = isset($data['installments']) ? $data['installments'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['entry_mode'] = isset($data['entry_mode']) ? $data['entry_mode'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['mcc'] = isset($data['mcc']) ? $data['mcc'] : '000';
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : '076';
        $this->container['flag_pin'] = isset($data['flag_pin']) ? $data['flag_pin'] : false;
        $this->container['flag_cvv1'] = isset($data['flag_cvv1']) ? $data['flag_cvv1'] : false;
        $this->container['flag_cvv2'] = isset($data['flag_cvv2']) ? $data['flag_cvv2'] : false;
        $this->container['flag_icvv'] = isset($data['flag_icvv']) ? $data['flag_icvv'] : false;
        $this->container['flag_token'] = isset($data['flag_token']) ? $data['flag_token'] : false;
        $this->container['response_code'] = isset($data['response_code']) ? $data['response_code'] : null;
        $this->container['authorizer_response'] = isset($data['authorizer_response']) ? $data['authorizer_response'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message_id'] === null) {
            $invalidProperties[] = "'message_id' can't be null";
        }
        if ($this->container['card_id'] === null) {
            $invalidProperties[] = "'card_id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['processing_code'] === null) {
            $invalidProperties[] = "'processing_code' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['nsu'] === null) {
            $invalidProperties[] = "'nsu' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        if ($this->container['entry_mode'] === null) {
            $invalidProperties[] = "'entry_mode' can't be null";
        }
        if ($this->container['merchant'] === null) {
            $invalidProperties[] = "'merchant' can't be null";
        }
        if ($this->container['mcc'] === null) {
            $invalidProperties[] = "'mcc' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['response_code'] === null) {
            $invalidProperties[] = "'response_code' can't be null";
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
     * Gets message_id
     *
     * @return float
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param float $message_id message_id
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets card_id
     *
     * @return float
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param float $card_id card_id
     *
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return float
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param float $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets mti
     *
     * @return string
     */
    public function getMti()
    {
        return $this->container['mti'];
    }

    /**
     * Sets mti
     *
     * @param string $mti mti
     *
     * @return $this
     */
    public function setMti($mti)
    {
        $this->container['mti'] = $mti;

        return $this;
    }

    /**
     * Gets processing_code
     *
     * @return string
     */
    public function getProcessingCode()
    {
        return $this->container['processing_code'];
    }

    /**
     * Sets processing_code
     *
     * @param string $processing_code 6 digitos
     *
     * @return $this
     */
    public function setProcessingCode($processing_code)
    {
        $this->container['processing_code'] = $processing_code;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets nsu
     *
     * @return string
     */
    public function getNsu()
    {
        return $this->container['nsu'];
    }

    /**
     * Sets nsu
     *
     * @param string $nsu nsu
     *
     * @return $this
     */
    public function setNsu($nsu)
    {
        $this->container['nsu'] = $nsu;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type transaction_type
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets installments
     *
     * @return float
     */
    public function getInstallments()
    {
        return $this->container['installments'];
    }

    /**
     * Sets installments
     *
     * @param float $installments installments
     *
     * @return $this
     */
    public function setInstallments($installments)
    {
        $this->container['installments'] = $installments;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets entry_mode
     *
     * @return string
     */
    public function getEntryMode()
    {
        return $this->container['entry_mode'];
    }

    /**
     * Sets entry_mode
     *
     * @param string $entry_mode entry_mode
     *
     * @return $this
     */
    public function setEntryMode($entry_mode)
    {
        $this->container['entry_mode'] = $entry_mode;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return string
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param string $mcc mcc
     *
     * @return $this
     */
    public function setMcc($mcc)
    {
        $this->container['mcc'] = $mcc;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return float
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param float $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets flag_pin
     *
     * @return bool
     */
    public function getFlagPin()
    {
        return $this->container['flag_pin'];
    }

    /**
     * Sets flag_pin
     *
     * @param bool $flag_pin flag_pin
     *
     * @return $this
     */
    public function setFlagPin($flag_pin)
    {
        $this->container['flag_pin'] = $flag_pin;

        return $this;
    }

    /**
     * Gets flag_cvv1
     *
     * @return bool
     */
    public function getFlagCvv1()
    {
        return $this->container['flag_cvv1'];
    }

    /**
     * Sets flag_cvv1
     *
     * @param bool $flag_cvv1 flag_cvv1
     *
     * @return $this
     */
    public function setFlagCvv1($flag_cvv1)
    {
        $this->container['flag_cvv1'] = $flag_cvv1;

        return $this;
    }

    /**
     * Gets flag_cvv2
     *
     * @return bool
     */
    public function getFlagCvv2()
    {
        return $this->container['flag_cvv2'];
    }

    /**
     * Sets flag_cvv2
     *
     * @param bool $flag_cvv2 flag_cvv2
     *
     * @return $this
     */
    public function setFlagCvv2($flag_cvv2)
    {
        $this->container['flag_cvv2'] = $flag_cvv2;

        return $this;
    }

    /**
     * Gets flag_icvv
     *
     * @return bool
     */
    public function getFlagIcvv()
    {
        return $this->container['flag_icvv'];
    }

    /**
     * Sets flag_icvv
     *
     * @param bool $flag_icvv flag_icvv
     *
     * @return $this
     */
    public function setFlagIcvv($flag_icvv)
    {
        $this->container['flag_icvv'] = $flag_icvv;

        return $this;
    }

    /**
     * Gets flag_token
     *
     * @return bool
     */
    public function getFlagToken()
    {
        return $this->container['flag_token'];
    }

    /**
     * Sets flag_token
     *
     * @param bool $flag_token flag_token
     *
     * @return $this
     */
    public function setFlagToken($flag_token)
    {
        $this->container['flag_token'] = $flag_token;

        return $this;
    }

    /**
     * Gets response_code
     *
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['response_code'];
    }

    /**
     * Sets response_code
     *
     * @param string $response_code response_code
     *
     * @return $this
     */
    public function setResponseCode($response_code)
    {
        $this->container['response_code'] = $response_code;

        return $this;
    }

    /**
     * Gets authorizer_response
     *
     * @return string
     */
    public function getAuthorizerResponse()
    {
        return $this->container['authorizer_response'];
    }

    /**
     * Sets authorizer_response
     *
     * @param string $authorizer_response authorizer_response
     *
     * @return $this
     */
    public function setAuthorizerResponse($authorizer_response)
    {
        $this->container['authorizer_response'] = $authorizer_response;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Swagger\Client\Model\PropertiesPurchaseDenied
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Swagger\Client\Model\PropertiesPurchaseDenied $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
