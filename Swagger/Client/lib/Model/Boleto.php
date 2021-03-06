<?php
/**
 * Boleto
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
 * Boleto Class Doc Comment
 *
 * @category Class
 * @description Objeto de boleto
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Boleto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Boleto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cashin_id' => 'string',
'transaction_id' => 'string',
'due_date' => 'string',
'settle_date' => 'string',
'timestamp' => 'string',
'typeful_line' => 'string',
'amount' => 'int',
'original_amount' => 'int',
'amount_paid' => 'int',
'max_value' => 'int',
'min_value' => 'int',
'discount' => 'int',
'interest' => 'int',
'beneficiary' => 'string',
'beneficiary_document' => 'string',
'payer' => 'string',
'payer_document' => 'string',
'assignor' => 'string',
'can_change_amount' => 'bool',
'status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cashin_id' => null,
'transaction_id' => null,
'due_date' => null,
'settle_date' => null,
'timestamp' => null,
'typeful_line' => null,
'amount' => 'int32',
'original_amount' => 'int32',
'amount_paid' => 'int32',
'max_value' => 'int32',
'min_value' => 'int32',
'discount' => 'int32',
'interest' => 'int32',
'beneficiary' => null,
'beneficiary_document' => null,
'payer' => null,
'payer_document' => null,
'assignor' => null,
'can_change_amount' => null,
'status' => null    ];

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
        'cashin_id' => 'cashinId',
'transaction_id' => 'transactionId',
'due_date' => 'dueDate',
'settle_date' => 'settleDate',
'timestamp' => 'timestamp',
'typeful_line' => 'typefulLine',
'amount' => 'amount',
'original_amount' => 'originalAmount',
'amount_paid' => 'amountPaid',
'max_value' => 'maxValue',
'min_value' => 'minValue',
'discount' => 'discount',
'interest' => 'interest',
'beneficiary' => 'beneficiary',
'beneficiary_document' => 'beneficiaryDocument',
'payer' => 'payer',
'payer_document' => 'payerDocument',
'assignor' => 'assignor',
'can_change_amount' => 'canChangeAmount',
'status' => 'status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cashin_id' => 'setCashinId',
'transaction_id' => 'setTransactionId',
'due_date' => 'setDueDate',
'settle_date' => 'setSettleDate',
'timestamp' => 'setTimestamp',
'typeful_line' => 'setTypefulLine',
'amount' => 'setAmount',
'original_amount' => 'setOriginalAmount',
'amount_paid' => 'setAmountPaid',
'max_value' => 'setMaxValue',
'min_value' => 'setMinValue',
'discount' => 'setDiscount',
'interest' => 'setInterest',
'beneficiary' => 'setBeneficiary',
'beneficiary_document' => 'setBeneficiaryDocument',
'payer' => 'setPayer',
'payer_document' => 'setPayerDocument',
'assignor' => 'setAssignor',
'can_change_amount' => 'setCanChangeAmount',
'status' => 'setStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cashin_id' => 'getCashinId',
'transaction_id' => 'getTransactionId',
'due_date' => 'getDueDate',
'settle_date' => 'getSettleDate',
'timestamp' => 'getTimestamp',
'typeful_line' => 'getTypefulLine',
'amount' => 'getAmount',
'original_amount' => 'getOriginalAmount',
'amount_paid' => 'getAmountPaid',
'max_value' => 'getMaxValue',
'min_value' => 'getMinValue',
'discount' => 'getDiscount',
'interest' => 'getInterest',
'beneficiary' => 'getBeneficiary',
'beneficiary_document' => 'getBeneficiaryDocument',
'payer' => 'getPayer',
'payer_document' => 'getPayerDocument',
'assignor' => 'getAssignor',
'can_change_amount' => 'getCanChangeAmount',
'status' => 'getStatus'    ];

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

    const STATUS_PENDING = 'pending';
const STATUS_PAID = 'paid';
const STATUS_PARTIALLY_PAID = 'partially_paid';
const STATUS_REJECTED = 'rejected';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
self::STATUS_PAID,
self::STATUS_PARTIALLY_PAID,
self::STATUS_REJECTED,        ];
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
        $this->container['cashin_id'] = isset($data['cashin_id']) ? $data['cashin_id'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['settle_date'] = isset($data['settle_date']) ? $data['settle_date'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['typeful_line'] = isset($data['typeful_line']) ? $data['typeful_line'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['original_amount'] = isset($data['original_amount']) ? $data['original_amount'] : null;
        $this->container['amount_paid'] = isset($data['amount_paid']) ? $data['amount_paid'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['interest'] = isset($data['interest']) ? $data['interest'] : null;
        $this->container['beneficiary'] = isset($data['beneficiary']) ? $data['beneficiary'] : null;
        $this->container['beneficiary_document'] = isset($data['beneficiary_document']) ? $data['beneficiary_document'] : null;
        $this->container['payer'] = isset($data['payer']) ? $data['payer'] : null;
        $this->container['payer_document'] = isset($data['payer_document']) ? $data['payer_document'] : null;
        $this->container['assignor'] = isset($data['assignor']) ? $data['assignor'] : null;
        $this->container['can_change_amount'] = isset($data['can_change_amount']) ? $data['can_change_amount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets cashin_id
     *
     * @return string
     */
    public function getCashinId()
    {
        return $this->container['cashin_id'];
    }

    /**
     * Sets cashin_id
     *
     * @param string $cashin_id ID do cash-in
     *
     * @return $this
     */
    public function setCashinId($cashin_id)
    {
        $this->container['cashin_id'] = $cashin_id;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id ID da transacao | numero de autenticacao
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date Timestamp da data de validade do boleto
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets settle_date
     *
     * @return string
     */
    public function getSettleDate()
    {
        return $this->container['settle_date'];
    }

    /**
     * Sets settle_date
     *
     * @param string $settle_date Timestamp da data de liquidacao do boleto
     *
     * @return $this
     */
    public function setSettleDate($settle_date)
    {
        $this->container['settle_date'] = $settle_date;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp Timestamp da data de emissao do boleto
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets typeful_line
     *
     * @return string
     */
    public function getTypefulLine()
    {
        return $this->container['typeful_line'];
    }

    /**
     * Sets typeful_line
     *
     * @param string $typeful_line Linha digitavel do boleto
     *
     * @return $this
     */
    public function setTypefulLine($typeful_line)
    {
        $this->container['typeful_line'] = $typeful_line;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Valor total do boleto
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets original_amount
     *
     * @return int
     */
    public function getOriginalAmount()
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount
     *
     * @param int $original_amount Valor do boleto sem juros, multas ou descontos
     *
     * @return $this
     */
    public function setOriginalAmount($original_amount)
    {
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets amount_paid
     *
     * @return int
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param int $amount_paid Valor pago do boleto
     *
     * @return $this
     */
    public function setAmountPaid($amount_paid)
    {
        $this->container['amount_paid'] = $amount_paid;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return int
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param int $max_value Indica valor maximo do boleto
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return int
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param int $min_value Indica valor minimo do boleto
     *
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return int
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param int $discount Valor do desconto
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets interest
     *
     * @return int
     */
    public function getInterest()
    {
        return $this->container['interest'];
    }

    /**
     * Sets interest
     *
     * @param int $interest Valor dos juros e multa
     *
     * @return $this
     */
    public function setInterest($interest)
    {
        $this->container['interest'] = $interest;

        return $this;
    }

    /**
     * Gets beneficiary
     *
     * @return string
     */
    public function getBeneficiary()
    {
        return $this->container['beneficiary'];
    }

    /**
     * Sets beneficiary
     *
     * @param string $beneficiary Beneficiario do boleto
     *
     * @return $this
     */
    public function setBeneficiary($beneficiary)
    {
        $this->container['beneficiary'] = $beneficiary;

        return $this;
    }

    /**
     * Gets beneficiary_document
     *
     * @return string
     */
    public function getBeneficiaryDocument()
    {
        return $this->container['beneficiary_document'];
    }

    /**
     * Sets beneficiary_document
     *
     * @param string $beneficiary_document Documento do beneficiario do boleto
     *
     * @return $this
     */
    public function setBeneficiaryDocument($beneficiary_document)
    {
        $this->container['beneficiary_document'] = $beneficiary_document;

        return $this;
    }

    /**
     * Gets payer
     *
     * @return string
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param string $payer Pagador do boleto
     *
     * @return $this
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets payer_document
     *
     * @return string
     */
    public function getPayerDocument()
    {
        return $this->container['payer_document'];
    }

    /**
     * Sets payer_document
     *
     * @param string $payer_document Documento do pagador do boleto
     *
     * @return $this
     */
    public function setPayerDocument($payer_document)
    {
        $this->container['payer_document'] = $payer_document;

        return $this;
    }

    /**
     * Gets assignor
     *
     * @return string
     */
    public function getAssignor()
    {
        return $this->container['assignor'];
    }

    /**
     * Sets assignor
     *
     * @param string $assignor Emissor do boleto
     *
     * @return $this
     */
    public function setAssignor($assignor)
    {
        $this->container['assignor'] = $assignor;

        return $this;
    }

    /**
     * Gets can_change_amount
     *
     * @return bool
     */
    public function getCanChangeAmount()
    {
        return $this->container['can_change_amount'];
    }

    /**
     * Sets can_change_amount
     *
     * @param bool $can_change_amount Indica a possibilidade de alterar o valor do boleto
     *
     * @return $this
     */
    public function setCanChangeAmount($can_change_amount)
    {
        $this->container['can_change_amount'] = $can_change_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
