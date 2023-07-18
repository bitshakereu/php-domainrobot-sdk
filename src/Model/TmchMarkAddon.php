<?php
/**
 * TmchMarkAddon
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
 * TmchMarkAddon Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TmchMarkAddon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TmchMarkAddon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'courtName' => 'string',
        'protection' => '\DateTime',
        'courtProtectionCountry' => 'string',
        'courtReference' => 'string',
        'treatyTitle' => 'string',
        'treatyExecution' => '\DateTime',
        'trademarkRegistration' => '\DateTime',
        'trademarkClassification' => 'string',
        'trademarkExpire' => '\DateTime',
        'trademarkNumber' => 'string',
        'trademarkJurisdiction' => 'string',
        'parentReference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'courtName' => null,
        'protection' => 'date-time',
        'courtProtectionCountry' => null,
        'courtReference' => null,
        'treatyTitle' => null,
        'treatyExecution' => 'date-time',
        'trademarkRegistration' => 'date-time',
        'trademarkClassification' => null,
        'trademarkExpire' => 'date-time',
        'trademarkNumber' => null,
        'trademarkJurisdiction' => null,
        'parentReference' => null
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
        'courtName' => 'courtName',
        'protection' => 'protection',
        'courtProtectionCountry' => 'courtProtectionCountry',
        'courtReference' => 'courtReference',
        'treatyTitle' => 'treatyTitle',
        'treatyExecution' => 'treatyExecution',
        'trademarkRegistration' => 'trademarkRegistration',
        'trademarkClassification' => 'trademarkClassification',
        'trademarkExpire' => 'trademarkExpire',
        'trademarkNumber' => 'trademarkNumber',
        'trademarkJurisdiction' => 'trademarkJurisdiction',
        'parentReference' => 'parentReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'courtName' => 'setCourtName',
        'protection' => 'setProtection',
        'courtProtectionCountry' => 'setCourtProtectionCountry',
        'courtReference' => 'setCourtReference',
        'treatyTitle' => 'setTreatyTitle',
        'treatyExecution' => 'setTreatyExecution',
        'trademarkRegistration' => 'setTrademarkRegistration',
        'trademarkClassification' => 'setTrademarkClassification',
        'trademarkExpire' => 'setTrademarkExpire',
        'trademarkNumber' => 'setTrademarkNumber',
        'trademarkJurisdiction' => 'setTrademarkJurisdiction',
        'parentReference' => 'setParentReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'courtName' => 'getCourtName',
        'protection' => 'getProtection',
        'courtProtectionCountry' => 'getCourtProtectionCountry',
        'courtReference' => 'getCourtReference',
        'treatyTitle' => 'getTreatyTitle',
        'treatyExecution' => 'getTreatyExecution',
        'trademarkRegistration' => 'getTrademarkRegistration',
        'trademarkClassification' => 'getTrademarkClassification',
        'trademarkExpire' => 'getTrademarkExpire',
        'trademarkNumber' => 'getTrademarkNumber',
        'trademarkJurisdiction' => 'getTrademarkJurisdiction',
        'parentReference' => 'getParentReference'
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
        $this->container['courtName'] = isset($data['courtName']) ? $this->createData($data['courtName'], 'courtName')  : null;
        $this->container['protection'] = isset($data['protection']) ? $this->createData($data['protection'], 'protection')  : null;
        $this->container['courtProtectionCountry'] = isset($data['courtProtectionCountry']) ? $this->createData($data['courtProtectionCountry'], 'courtProtectionCountry')  : null;
        $this->container['courtReference'] = isset($data['courtReference']) ? $this->createData($data['courtReference'], 'courtReference')  : null;
        $this->container['treatyTitle'] = isset($data['treatyTitle']) ? $this->createData($data['treatyTitle'], 'treatyTitle')  : null;
        $this->container['treatyExecution'] = isset($data['treatyExecution']) ? $this->createData($data['treatyExecution'], 'treatyExecution')  : null;
        $this->container['trademarkRegistration'] = isset($data['trademarkRegistration']) ? $this->createData($data['trademarkRegistration'], 'trademarkRegistration')  : null;
        $this->container['trademarkClassification'] = isset($data['trademarkClassification']) ? $this->createData($data['trademarkClassification'], 'trademarkClassification')  : null;
        $this->container['trademarkExpire'] = isset($data['trademarkExpire']) ? $this->createData($data['trademarkExpire'], 'trademarkExpire')  : null;
        $this->container['trademarkNumber'] = isset($data['trademarkNumber']) ? $this->createData($data['trademarkNumber'], 'trademarkNumber')  : null;
        $this->container['trademarkJurisdiction'] = isset($data['trademarkJurisdiction']) ? $this->createData($data['trademarkJurisdiction'], 'trademarkJurisdiction')  : null;
        $this->container['parentReference'] = isset($data['parentReference']) ? $this->createData($data['parentReference'], 'parentReference')  : null;
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
     * Gets courtName
     *
     * @return string
     */
    public function getCourtName()
    {
        return $this->container['courtName'];
    }

    /**
     * Sets courtName
     *
     * @param string $courtName courtName
     *
     * @return $this
     */
    public function setCourtName($courtName)
    {
        $this->container['courtName'] = $courtName;

        return $this;
    }

    /**
     * Gets protection
     *
     * @return \DateTime
     */
    public function getProtection()
    {
        return $this->container['protection'];
    }

    /**
     * Sets protection
     *
     * @param \DateTime $protection protection
     *
     * @return $this
     */
    public function setProtection($protection)
    {
        $this->container['protection'] = $protection;

        return $this;
    }

    /**
     * Gets courtProtectionCountry
     *
     * @return string
     */
    public function getCourtProtectionCountry()
    {
        return $this->container['courtProtectionCountry'];
    }

    /**
     * Sets courtProtectionCountry
     *
     * @param string $courtProtectionCountry courtProtectionCountry
     *
     * @return $this
     */
    public function setCourtProtectionCountry($courtProtectionCountry)
    {
        $this->container['courtProtectionCountry'] = $courtProtectionCountry;

        return $this;
    }

    /**
     * Gets courtReference
     *
     * @return string
     */
    public function getCourtReference()
    {
        return $this->container['courtReference'];
    }

    /**
     * Sets courtReference
     *
     * @param string $courtReference courtReference
     *
     * @return $this
     */
    public function setCourtReference($courtReference)
    {
        $this->container['courtReference'] = $courtReference;

        return $this;
    }

    /**
     * Gets treatyTitle
     *
     * @return string
     */
    public function getTreatyTitle()
    {
        return $this->container['treatyTitle'];
    }

    /**
     * Sets treatyTitle
     *
     * @param string $treatyTitle treatyTitle
     *
     * @return $this
     */
    public function setTreatyTitle($treatyTitle)
    {
        $this->container['treatyTitle'] = $treatyTitle;

        return $this;
    }

    /**
     * Gets treatyExecution
     *
     * @return \DateTime
     */
    public function getTreatyExecution()
    {
        return $this->container['treatyExecution'];
    }

    /**
     * Sets treatyExecution
     *
     * @param \DateTime $treatyExecution treatyExecution
     *
     * @return $this
     */
    public function setTreatyExecution($treatyExecution)
    {
        $this->container['treatyExecution'] = $treatyExecution;

        return $this;
    }

    /**
     * Gets trademarkRegistration
     *
     * @return \DateTime
     */
    public function getTrademarkRegistration()
    {
        return $this->container['trademarkRegistration'];
    }

    /**
     * Sets trademarkRegistration
     *
     * @param \DateTime $trademarkRegistration trademarkRegistration
     *
     * @return $this
     */
    public function setTrademarkRegistration($trademarkRegistration)
    {
        $this->container['trademarkRegistration'] = $trademarkRegistration;

        return $this;
    }

    /**
     * Gets trademarkClassification
     *
     * @return string
     */
    public function getTrademarkClassification()
    {
        return $this->container['trademarkClassification'];
    }

    /**
     * Sets trademarkClassification
     *
     * @param string $trademarkClassification trademarkClassification
     *
     * @return $this
     */
    public function setTrademarkClassification($trademarkClassification)
    {
        $this->container['trademarkClassification'] = $trademarkClassification;

        return $this;
    }

    /**
     * Gets trademarkExpire
     *
     * @return \DateTime
     */
    public function getTrademarkExpire()
    {
        return $this->container['trademarkExpire'];
    }

    /**
     * Sets trademarkExpire
     *
     * @param \DateTime $trademarkExpire trademarkExpire
     *
     * @return $this
     */
    public function setTrademarkExpire($trademarkExpire)
    {
        $this->container['trademarkExpire'] = $trademarkExpire;

        return $this;
    }

    /**
     * Gets trademarkNumber
     *
     * @return string
     */
    public function getTrademarkNumber()
    {
        return $this->container['trademarkNumber'];
    }

    /**
     * Sets trademarkNumber
     *
     * @param string $trademarkNumber trademarkNumber
     *
     * @return $this
     */
    public function setTrademarkNumber($trademarkNumber)
    {
        $this->container['trademarkNumber'] = $trademarkNumber;

        return $this;
    }

    /**
     * Gets trademarkJurisdiction
     *
     * @return string
     */
    public function getTrademarkJurisdiction()
    {
        return $this->container['trademarkJurisdiction'];
    }

    /**
     * Sets trademarkJurisdiction
     *
     * @param string $trademarkJurisdiction trademarkJurisdiction
     *
     * @return $this
     */
    public function setTrademarkJurisdiction($trademarkJurisdiction)
    {
        $this->container['trademarkJurisdiction'] = $trademarkJurisdiction;

        return $this;
    }

    /**
     * Gets parentReference
     *
     * @return string
     */
    public function getParentReference()
    {
        return $this->container['parentReference'];
    }

    /**
     * Sets parentReference
     *
     * @param string $parentReference parentReference
     *
     * @return $this
     */
    public function setParentReference($parentReference)
    {
        $this->container['parentReference'] = $parentReference;

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


