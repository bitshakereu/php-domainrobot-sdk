<?php
/**
 * BillingObjectTerm
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
 * BillingObjectTerm Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingObjectTerm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BillingObjectTerm';

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
        'cancelation' => '\Domainrobot\Model\TimePeriod',
        'cancelationExpireOnly' => 'bool',
        'initial' => '\Domainrobot\Model\TimePeriod',
        'renew' => '\Domainrobot\Model\TimePeriod',
        'renewTerm' => '\Domainrobot\Model\TimePeriod',
        'customer' => '\Domainrobot\Model\GenericCustomer',
        'articleTypeLabel' => 'string',
        'articleLabel' => 'string',
        'autodeleteable' => 'bool',
        'restoreable' => 'bool'
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
        'cancelation' => null,
        'cancelationExpireOnly' => null,
        'initial' => null,
        'renew' => null,
        'renewTerm' => null,
        'customer' => null,
        'articleTypeLabel' => null,
        'articleLabel' => null,
        'autodeleteable' => null,
        'restoreable' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'owner' => 'owner',
        'updater' => 'updater',
        'cancelation' => 'cancelation',
        'cancelationExpireOnly' => 'cancelationExpireOnly',
        'initial' => 'initial',
        'renew' => 'renew',
        'renewTerm' => 'renewTerm',
        'customer' => 'customer',
        'articleTypeLabel' => 'articleTypeLabel',
        'articleLabel' => 'articleLabel',
        'autodeleteable' => 'autodeleteable',
        'restoreable' => 'restoreable'
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
        'cancelation' => 'setCancelation',
        'cancelationExpireOnly' => 'setCancelationExpireOnly',
        'initial' => 'setInitial',
        'renew' => 'setRenew',
        'renewTerm' => 'setRenewTerm',
        'customer' => 'setCustomer',
        'articleTypeLabel' => 'setArticleTypeLabel',
        'articleLabel' => 'setArticleLabel',
        'autodeleteable' => 'setAutodeleteable',
        'restoreable' => 'setRestoreable'
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
        'cancelation' => 'getCancelation',
        'cancelationExpireOnly' => 'getCancelationExpireOnly',
        'initial' => 'getInitial',
        'renew' => 'getRenew',
        'renewTerm' => 'getRenewTerm',
        'customer' => 'getCustomer',
        'articleTypeLabel' => 'getArticleTypeLabel',
        'articleLabel' => 'getArticleLabel',
        'autodeleteable' => 'getAutodeleteable',
        'restoreable' => 'getRestoreable'
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
        $this->container['created'] = isset($data['created']) ? $this->createData($data['created'], 'created')  : null;
        $this->container['updated'] = isset($data['updated']) ? $this->createData($data['updated'], 'updated')  : null;
        $this->container['owner'] = isset($data['owner']) ? $this->createData($data['owner'], 'owner')  : null;
        $this->container['updater'] = isset($data['updater']) ? $this->createData($data['updater'], 'updater')  : null;
        $this->container['cancelation'] = isset($data['cancelation']) ? $this->createData($data['cancelation'], 'cancelation')  : null;
        $this->container['cancelationExpireOnly'] = isset($data['cancelationExpireOnly']) ? $this->createData($data['cancelationExpireOnly'], 'cancelationExpireOnly')  : null;
        $this->container['initial'] = isset($data['initial']) ? $this->createData($data['initial'], 'initial')  : null;
        $this->container['renew'] = isset($data['renew']) ? $this->createData($data['renew'], 'renew')  : null;
        $this->container['renewTerm'] = isset($data['renewTerm']) ? $this->createData($data['renewTerm'], 'renewTerm')  : null;
        $this->container['customer'] = isset($data['customer']) ? $this->createData($data['customer'], 'customer')  : null;
        $this->container['articleTypeLabel'] = isset($data['articleTypeLabel']) ? $this->createData($data['articleTypeLabel'], 'articleTypeLabel')  : null;
        $this->container['articleLabel'] = isset($data['articleLabel']) ? $this->createData($data['articleLabel'], 'articleLabel')  : null;
        $this->container['autodeleteable'] = isset($data['autodeleteable']) ? $this->createData($data['autodeleteable'], 'autodeleteable')  : null;
        $this->container['restoreable'] = isset($data['restoreable']) ? $this->createData($data['restoreable'], 'restoreable')  : null;
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
    public function createData($data = null, $property = '')
    {
        if ($data === null || $property === '') {
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
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cancelation'] === null) {
            $invalidProperties[] = "'cancelation' can't be null";
        }
        if ($this->container['initial'] === null) {
            $invalidProperties[] = "'initial' can't be null";
        }
        if ($this->container['renew'] === null) {
            $invalidProperties[] = "'renew' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the 
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
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
     * Gets cancelation
     *
     * @return \Domainrobot\Model\TimePeriod
     */
    public function getCancelation()
    {
        return $this->container['cancelation'];
    }

    /**
     * Sets cancelation
     *
     * @param \Domainrobot\Model\TimePeriod $cancelation cancelation
     *
     * @return $this
     */
    public function setCancelation($cancelation)
    {
        $this->container['cancelation'] = $cancelation;

        return $this;
    }

    /**
     * Gets cancelationExpireOnly
     *
     * @return bool
     */
    public function getCancelationExpireOnly()
    {
        return $this->container['cancelationExpireOnly'];
    }

    /**
     * Sets cancelationExpireOnly
     *
     * @param bool $cancelationExpireOnly cancelationExpireOnly
     *
     * @return $this
     */
    public function setCancelationExpireOnly($cancelationExpireOnly)
    {
        $this->container['cancelationExpireOnly'] = $cancelationExpireOnly;

        return $this;
    }

    /**
     * Gets initial
     *
     * @return \Domainrobot\Model\TimePeriod
     */
    public function getInitial()
    {
        return $this->container['initial'];
    }

    /**
     * Sets initial
     *
     * @param \Domainrobot\Model\TimePeriod $initial initial
     *
     * @return $this
     */
    public function setInitial($initial)
    {
        $this->container['initial'] = $initial;

        return $this;
    }

    /**
     * Gets renew
     *
     * @return \Domainrobot\Model\TimePeriod
     */
    public function getRenew()
    {
        return $this->container['renew'];
    }

    /**
     * Sets renew
     *
     * @param \Domainrobot\Model\TimePeriod $renew renew
     *
     * @return $this
     */
    public function setRenew($renew)
    {
        $this->container['renew'] = $renew;

        return $this;
    }

    /**
     * Gets renewTerm
     *
     * @return \Domainrobot\Model\TimePeriod
     */
    public function getRenewTerm()
    {
        return $this->container['renewTerm'];
    }

    /**
     * Sets renewTerm
     *
     * @param \Domainrobot\Model\TimePeriod $renewTerm renewTerm
     *
     * @return $this
     */
    public function setRenewTerm($renewTerm)
    {
        $this->container['renewTerm'] = $renewTerm;

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
     * @param \Domainrobot\Model\GenericCustomer $customer the related customer or group
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets articleTypeLabel
     *
     * @return string
     */
    public function getArticleTypeLabel()
    {
        return $this->container['articleTypeLabel'];
    }

    /**
     * Sets articleTypeLabel
     *
     * @param string $articleTypeLabel The label of the article group
     *
     * @return $this
     */
    public function setArticleTypeLabel($articleTypeLabel)
    {
        $this->container['articleTypeLabel'] = $articleTypeLabel;

        return $this;
    }

    /**
     * Gets articleLabel
     *
     * @return string
     */
    public function getArticleLabel()
    {
        return $this->container['articleLabel'];
    }

    /**
     * Sets articleLabel
     *
     * @param string $articleLabel The label of the articel, e.g. domain
     *
     * @return $this
     */
    public function setArticleLabel($articleLabel)
    {
        $this->container['articleLabel'] = $articleLabel;

        return $this;
    }

    /**
     * Gets autodeleteable
     *
     * @return bool
     */
    public function getAutodeleteable()
    {
        return $this->container['autodeleteable'];
    }

    /**
     * Sets autodeleteable
     *
     * @param bool $autodeleteable Flag indication if the article can be autodeleted
     *
     * @return $this
     */
    public function setAutodeleteable($autodeleteable)
    {
        $this->container['autodeleteable'] = $autodeleteable;

        return $this;
    }

    /**
     * Gets restoreable
     *
     * @return bool
     */
    public function getRestoreable()
    {
        return $this->container['restoreable'];
    }

    /**
     * Sets restoreable
     *
     * @param bool $restoreable Flag indication if the article can be restored
     *
     * @return $this
     */
    public function setRestoreable($restoreable)
    {
        $this->container['restoreable'] = $restoreable;

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
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false){
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


