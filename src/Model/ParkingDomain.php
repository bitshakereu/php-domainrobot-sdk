<?php
/**
 * ParkingDomain
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
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
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
 * ParkingDomain Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParkingDomain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParkingDomain';

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
        'parkingAccount' => '\Domainrobot\Model\ParkingAccount',
        'name' => 'string',
        'currency' => 'string',
        'fixedPrice' => 'bool',
        'forSale' => 'bool',
        'keywords' => 'string[]',
        'price' => 'double',
        'minPrice' => 'double',
        'externalReference' => 'string',
        'lastSynchronized' => '\DateTime',
        'registrantAccountId' => 'string',
        'status' => 'string',
        'message' => 'string'
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
        'parkingAccount' => null,
        'name' => null,
        'currency' => null,
        'fixedPrice' => null,
        'forSale' => null,
        'keywords' => null,
        'price' => 'double',
        'minPrice' => 'double',
        'externalReference' => null,
        'lastSynchronized' => 'date-time',
        'registrantAccountId' => null,
        'status' => null,
        'message' => null
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
        'parkingAccount' => 'parkingAccount',
        'name' => 'name',
        'currency' => 'currency',
        'fixedPrice' => 'fixedPrice',
        'forSale' => 'forSale',
        'keywords' => 'keywords',
        'price' => 'price',
        'minPrice' => 'minPrice',
        'externalReference' => 'externalReference',
        'lastSynchronized' => 'lastSynchronized',
        'registrantAccountId' => 'registrantAccountId',
        'status' => 'status',
        'message' => 'message'
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
        'parkingAccount' => 'setParkingAccount',
        'name' => 'setName',
        'currency' => 'setCurrency',
        'fixedPrice' => 'setFixedPrice',
        'forSale' => 'setForSale',
        'keywords' => 'setKeywords',
        'price' => 'setPrice',
        'minPrice' => 'setMinPrice',
        'externalReference' => 'setExternalReference',
        'lastSynchronized' => 'setLastSynchronized',
        'registrantAccountId' => 'setRegistrantAccountId',
        'status' => 'setStatus',
        'message' => 'setMessage'
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
        'parkingAccount' => 'getParkingAccount',
        'name' => 'getName',
        'currency' => 'getCurrency',
        'fixedPrice' => 'getFixedPrice',
        'forSale' => 'getForSale',
        'keywords' => 'getKeywords',
        'price' => 'getPrice',
        'minPrice' => 'getMinPrice',
        'externalReference' => 'getExternalReference',
        'lastSynchronized' => 'getLastSynchronized',
        'registrantAccountId' => 'getRegistrantAccountId',
        'status' => 'getStatus',
        'message' => 'getMessage'
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
        $this->container['parkingAccount'] = isset($data['parkingAccount']) ? $this->createData($data['parkingAccount'], 'parkingAccount')  : null;
        $this->container['name'] = isset($data['name']) ? $this->createData($data['name'], 'name')  : null;
        $this->container['currency'] = isset($data['currency']) ? $this->createData($data['currency'], 'currency')  : null;
        $this->container['fixedPrice'] = isset($data['fixedPrice']) ? $this->createData($data['fixedPrice'], 'fixedPrice')  : null;
        $this->container['forSale'] = isset($data['forSale']) ? $this->createData($data['forSale'], 'forSale')  : null;
        $this->container['keywords'] = isset($data['keywords']) ? $this->createData($data['keywords'], 'keywords')  : null;
        $this->container['price'] = isset($data['price']) ? $this->createData($data['price'], 'price')  : null;
        $this->container['minPrice'] = isset($data['minPrice']) ? $this->createData($data['minPrice'], 'minPrice')  : null;
        $this->container['externalReference'] = isset($data['externalReference']) ? $this->createData($data['externalReference'], 'externalReference')  : null;
        $this->container['lastSynchronized'] = isset($data['lastSynchronized']) ? $this->createData($data['lastSynchronized'], 'lastSynchronized')  : null;
        $this->container['registrantAccountId'] = isset($data['registrantAccountId']) ? $this->createData($data['registrantAccountId'], 'registrantAccountId')  : null;
        $this->container['status'] = isset($data['status']) ? $this->createData($data['status'], 'status')  : null;
        $this->container['message'] = isset($data['message']) ? $this->createData($data['message'], 'message')  : null;
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
     * Gets parkingAccount
     *
     * @return \Domainrobot\Model\ParkingAccount
     */
    public function getParkingAccount()
    {
        return $this->container['parkingAccount'];
    }

    /**
     * Sets parkingAccount
     *
     * @param \Domainrobot\Model\ParkingAccount $parkingAccount The connected parking account
     *
     * @return $this
     */
    public function setParkingAccount($parkingAccount)
    {
        $this->container['parkingAccount'] = $parkingAccount;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The domain name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $currency The currency of the sale
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets fixedPrice
     *
     * @return bool
     */
    public function getFixedPrice()
    {
        return $this->container['fixedPrice'];
    }

    /**
     * Sets fixedPrice
     *
     * @param bool $fixedPrice Is the price fix
     *
     * @return $this
     */
    public function setFixedPrice($fixedPrice)
    {
        $this->container['fixedPrice'] = $fixedPrice;

        return $this;
    }

    /**
     * Gets forSale
     *
     * @return bool
     */
    public function getForSale()
    {
        return $this->container['forSale'];
    }

    /**
     * Sets forSale
     *
     * @param bool $forSale Should the domain be listed for sale
     *
     * @return $this
     */
    public function setForSale($forSale)
    {
        $this->container['forSale'] = $forSale;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords The keywords to use
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price The price to use
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets minPrice
     *
     * @return double
     */
    public function getMinPrice()
    {
        return $this->container['minPrice'];
    }

    /**
     * Sets minPrice
     *
     * @param double $minPrice The minimum of price
     *
     * @return $this
     */
    public function setMinPrice($minPrice)
    {
        $this->container['minPrice'] = $minPrice;

        return $this;
    }

    /**
     * Gets externalReference
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->container['externalReference'];
    }

    /**
     * Sets externalReference
     *
     * @param string $externalReference The external reference
     *
     * @return $this
     */
    public function setExternalReference($externalReference)
    {
        $this->container['externalReference'] = $externalReference;

        return $this;
    }

    /**
     * Gets lastSynchronized
     *
     * @return \DateTime
     */
    public function getLastSynchronized()
    {
        return $this->container['lastSynchronized'];
    }

    /**
     * Sets lastSynchronized
     *
     * @param \DateTime $lastSynchronized The last synchronized date
     *
     * @return $this
     */
    public function setLastSynchronized($lastSynchronized)
    {
        $this->container['lastSynchronized'] = $lastSynchronized;

        return $this;
    }

    /**
     * Gets registrantAccountId
     *
     * @return string
     */
    public function getRegistrantAccountId()
    {
        return $this->container['registrantAccountId'];
    }

    /**
     * Sets registrantAccountId
     *
     * @param string $registrantAccountId Unique identifier of the registrants account in your systems.
     *
     * @return $this
     */
    public function setRegistrantAccountId($registrantAccountId)
    {
        $this->container['registrantAccountId'] = $registrantAccountId;

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
     * @param string $status The status of the domain
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message A message if status was FAILED
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


