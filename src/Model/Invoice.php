<?php
/**
 * Invoice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL                                             Certificates, DNS and                                             much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;

use \ArrayAccess;
use \Domainrobot\ObjectSerializer;

/**
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'owner' => '\Domainrobot\Model\BasicUser',
        'updater' => '\Domainrobot\Model\BasicUser',
        'id' => 'int',
        'number' => 'string',
        'customer' => '\Domainrobot\Model\GenericCustomer',
        'payment' => '\Domainrobot\Model\PaymentConstants',
        'paymentMode' => 'string',
        'paymentTransaction' => 'string',
        'subType' => 'string',
        'sepaMandateReference' => 'string',
        'sepaMandateCollection' => '\DateTime',
        'amount' => 'double',
        'vatAmount' => 'double',
        'status' => '\Domainrobot\Model\InvoiceStatusConstants',
        'type' => '\Domainrobot\Model\AccountingDocumentTypeConstants',
        'failed' => 'bool',
        'currency' => 'string',
        'paid' => '\DateTime',
        'document' => '\Domainrobot\Model\Document',
        'comment' => 'string',
        'extension' => '\Domainrobot\Model\Configuration',
        'messages' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'owner' => null,
        'updater' => null,
        'id' => 'int64',
        'number' => null,
        'customer' => null,
        'payment' => null,
        'paymentMode' => null,
        'paymentTransaction' => null,
        'subType' => null,
        'sepaMandateReference' => null,
        'sepaMandateCollection' => 'date-time',
        'amount' => 'double',
        'vatAmount' => 'double',
        'status' => null,
        'type' => null,
        'failed' => null,
        'currency' => null,
        'paid' => 'date-time',
        'document' => null,
        'comment' => null,
        'extension' => null,
        'messages' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats(): array
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
        'created' => 'created',
        'updated' => 'updated',
        'owner' => 'owner',
        'updater' => 'updater',
        'id' => 'id',
        'number' => 'number',
        'customer' => 'customer',
        'payment' => 'payment',
        'paymentMode' => 'paymentMode',
        'paymentTransaction' => 'paymentTransaction',
        'subType' => 'subType',
        'sepaMandateReference' => 'sepaMandateReference',
        'sepaMandateCollection' => 'sepaMandateCollection',
        'amount' => 'amount',
        'vatAmount' => 'vatAmount',
        'status' => 'status',
        'type' => 'type',
        'failed' => 'failed',
        'currency' => 'currency',
        'paid' => 'paid',
        'document' => 'document',
        'comment' => 'comment',
        'extension' => 'extension',
        'messages' => 'messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'owner' => 'setOwner',
        'updater' => 'setUpdater',
        'id' => 'setId',
        'number' => 'setNumber',
        'customer' => 'setCustomer',
        'payment' => 'setPayment',
        'paymentMode' => 'setPaymentMode',
        'paymentTransaction' => 'setPaymentTransaction',
        'subType' => 'setSubType',
        'sepaMandateReference' => 'setSepaMandateReference',
        'sepaMandateCollection' => 'setSepaMandateCollection',
        'amount' => 'setAmount',
        'vatAmount' => 'setVatAmount',
        'status' => 'setStatus',
        'type' => 'setType',
        'failed' => 'setFailed',
        'currency' => 'setCurrency',
        'paid' => 'setPaid',
        'document' => 'setDocument',
        'comment' => 'setComment',
        'extension' => 'setExtension',
        'messages' => 'setMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'owner' => 'getOwner',
        'updater' => 'getUpdater',
        'id' => 'getId',
        'number' => 'getNumber',
        'customer' => 'getCustomer',
        'payment' => 'getPayment',
        'paymentMode' => 'getPaymentMode',
        'paymentTransaction' => 'getPaymentTransaction',
        'subType' => 'getSubType',
        'sepaMandateReference' => 'getSepaMandateReference',
        'sepaMandateCollection' => 'getSepaMandateCollection',
        'amount' => 'getAmount',
        'vatAmount' => 'getVatAmount',
        'status' => 'getStatus',
        'type' => 'getType',
        'failed' => 'getFailed',
        'currency' => 'getCurrency',
        'paid' => 'getPaid',
        'document' => 'getDocument',
        'comment' => 'getComment',
        'extension' => 'getExtension',
        'messages' => 'getMessages'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
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
    public function __construct(?array $data = null)
    {
        $this->container['created'] = isset($data['created']) ? $this->createData($data['created'], 'created')  : null;
        $this->container['updated'] = isset($data['updated']) ? $this->createData($data['updated'], 'updated')  : null;
        $this->container['owner'] = isset($data['owner']) ? $this->createData($data['owner'], 'owner')  : null;
        $this->container['updater'] = isset($data['updater']) ? $this->createData($data['updater'], 'updater')  : null;
        $this->container['id'] = isset($data['id']) ? $this->createData($data['id'], 'id')  : null;
        $this->container['number'] = isset($data['number']) ? $this->createData($data['number'], 'number')  : null;
        $this->container['customer'] = isset($data['customer']) ? $this->createData($data['customer'], 'customer')  : null;
        $this->container['payment'] = isset($data['payment']) ? $this->createData($data['payment'], 'payment')  : null;
        $this->container['paymentMode'] = isset($data['paymentMode']) ? $this->createData($data['paymentMode'], 'paymentMode')  : null;
        $this->container['paymentTransaction'] = isset($data['paymentTransaction']) ? $this->createData($data['paymentTransaction'], 'paymentTransaction')  : null;
        $this->container['subType'] = isset($data['subType']) ? $this->createData($data['subType'], 'subType')  : null;
        $this->container['sepaMandateReference'] = isset($data['sepaMandateReference']) ? $this->createData($data['sepaMandateReference'], 'sepaMandateReference')  : null;
        $this->container['sepaMandateCollection'] = isset($data['sepaMandateCollection']) ? $this->createData($data['sepaMandateCollection'], 'sepaMandateCollection')  : null;
        $this->container['amount'] = isset($data['amount']) ? $this->createData($data['amount'], 'amount')  : null;
        $this->container['vatAmount'] = isset($data['vatAmount']) ? $this->createData($data['vatAmount'], 'vatAmount')  : null;
        $this->container['status'] = isset($data['status']) ? $this->createData($data['status'], 'status')  : null;
        $this->container['type'] = isset($data['type']) ? $this->createData($data['type'], 'type')  : null;
        $this->container['failed'] = isset($data['failed']) ? $this->createData($data['failed'], 'failed')  : null;
        $this->container['currency'] = isset($data['currency']) ? $this->createData($data['currency'], 'currency')  : null;
        $this->container['paid'] = isset($data['paid']) ? $this->createData($data['paid'], 'paid')  : null;
        $this->container['document'] = isset($data['document']) ? $this->createData($data['document'], 'document')  : null;
        $this->container['comment'] = isset($data['comment']) ? $this->createData($data['comment'], 'comment')  : null;
        $this->container['extension'] = isset($data['extension']) ? $this->createData($data['extension'], 'extension')  : null;
        $this->container['messages'] = isset($data['messages']) ? $this->createData($data['messages'], 'messages')  : null;
    }

    /**
     * create data according to types;
     * non object types will just be returend as is:
     * object types will return an instance of themselves or and array of instances
     *
     * @param mixed[] $data
     * @param string $property
     * @return mixed
     */
    public function createData($data = null, $property = null): mixed
    {
        if ($data === null || $property === null) {
            return '';
        }
        
        $swaggerType = self::$swaggerTypes[$property];

        preg_match("/([\\\\\w\d]+)(\[\])?/", $swaggerType, $matches);

        // handle object types
        if (count($matches) > 0 && count($matches) < 3) {
            try {
                if (!is_array($data)) {
                    return $data;
                }
                
                $reflection = new \ReflectionClass($swaggerType);
                $reflectionInstance = $reflection->newInstance($data);

                return $reflectionInstance;
            } catch (\Exception $ex) {
                return $data;
            }
        } elseif (count($matches) >= 3) {
            // Object[]
            // arrays of objects have to be handled differently
            $reflectionInstances = [];
            foreach($data as $d){
                try {
                    if(!is_array($d)){
                        $reflectionInstances[] = $d;
                        continue;
                    }
                    $reflection = new \ReflectionClass(str_replace("[]", "", $swaggerType) );
                    $reflectionInstances[] = $reflection->newInstance($d);                   
                } catch (\Exception $ex) {
                    return $d;
                }
            }

            return $reflectionInstances;
        }

        return $data;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the 
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created Date of creation.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated Date of the last update.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Domainrobot\Model\BasicUser
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Domainrobot\Model\BasicUser $owner The object owner.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets updater
     *
     * @return \Domainrobot\Model\BasicUser
     */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
     * Sets updater
     *
     * @param \Domainrobot\Model\BasicUser $updater User who performed the last update.
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id internal id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number invoice number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Domainrobot\Model\GenericCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Domainrobot\Model\GenericCustomer $customer Customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Domainrobot\Model\PaymentConstants
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Domainrobot\Model\PaymentConstants $payment The method of payment: PRE, POST, etc.
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets paymentMode
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->container['paymentMode'];
    }

    /**
     * Sets paymentMode
     *
     * @param string $paymentMode Additional payment data, such as provider: ipayment
     *
     * @return $this
     */
    public function setPaymentMode($paymentMode)
    {
        $this->container['paymentMode'] = $paymentMode;

        return $this;
    }

    /**
     * Gets paymentTransaction
     *
     * @return string
     */
    public function getPaymentTransaction()
    {
        return $this->container['paymentTransaction'];
    }

    /**
     * Sets paymentTransaction
     *
     * @param string $paymentTransaction The payment transaction number
     *
     * @return $this
     */
    public function setPaymentTransaction($paymentTransaction)
    {
        $this->container['paymentTransaction'] = $paymentTransaction;

        return $this;
    }

    /**
     * Gets subType
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->container['subType'];
    }

    /**
     * Sets subType
     *
     * @param string $subType The sub type of the invoice, e.g. domain invoice or server invoice
     *
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->container['subType'] = $subType;

        return $this;
    }

    /**
     * Gets sepaMandateReference
     *
     * @return string
     */
    public function getSepaMandateReference()
    {
        return $this->container['sepaMandateReference'];
    }

    /**
     * Sets sepaMandateReference
     *
     * @param string $sepaMandateReference SEPA Mandate Reference
     *
     * @return $this
     */
    public function setSepaMandateReference($sepaMandateReference)
    {
        $this->container['sepaMandateReference'] = $sepaMandateReference;

        return $this;
    }

    /**
     * Gets sepaMandateCollection
     *
     * @return \DateTime
     */
    public function getSepaMandateCollection()
    {
        return $this->container['sepaMandateCollection'];
    }

    /**
     * Sets sepaMandateCollection
     *
     * @param \DateTime $sepaMandateCollection Date of SEPA collection
     *
     * @return $this
     */
    public function setSepaMandateCollection($sepaMandateCollection)
    {
        $this->container['sepaMandateCollection'] = $sepaMandateCollection;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Invoice amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vatAmount
     *
     * @return double
     */
    public function getVatAmount()
    {
        return $this->container['vatAmount'];
    }

    /**
     * Sets vatAmount
     *
     * @param double $vatAmount Vat amount
     *
     * @return $this
     */
    public function setVatAmount($vatAmount)
    {
        $this->container['vatAmount'] = $vatAmount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Domainrobot\Model\InvoiceStatusConstants
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Domainrobot\Model\InvoiceStatusConstants $status Invoice status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Domainrobot\Model\AccountingDocumentTypeConstants
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Domainrobot\Model\AccountingDocumentTypeConstants $type Type of invoice
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return bool
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param bool $failed Indicator that shows that something is wrong with the process
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Used currency of the amount
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return \DateTime
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param \DateTime $paid Date of payment
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \Domainrobot\Model\Document
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \Domainrobot\Model\Document $document The linked pdf
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Comment to the invoice
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return \Domainrobot\Model\Configuration
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param \Domainrobot\Model\Configuration $extension Additional information
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return string[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param string[] $messages messages
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false): array
    {
        $container = $this->container;

        $cleanContainer = [];
        foreach ($container as $key => &$value) {
            if (
                $retrieveAllValues === false && 
                empty($value) === true &&
                $value !== false &&
                $value !== '' &&
                $value !== 0 &&
                $value !== '0'
            ) {
                unset($container[$key]);
                continue;
            }
            
            if (gettype($value) === "object") {
                if(method_exists($value, 'toArray')) {
                    $value = $value->toArray($retrieveAllValues);
                }else{
                    if(get_class($value) === "DateTime"){
                        $value = $value->format("Y-m-d\TH:i:s");
                    }else{
                        $value = (array) $value;
                    }
                }
            }

            if (is_array($value)) {
                foreach ($value as &$v) {
                    if (gettype($v) === "object") {
                        $v = $v->toArray($retrieveAllValues);
                    }
                }
            }

            $cleanContainer[self::$attributeMap[$key]] = $value;
        };

        return $cleanContainer;
    }
}


