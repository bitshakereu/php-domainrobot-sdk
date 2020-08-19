<?php
/**
 * StatisticsParameters
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Service Pricer API
 *
 * The documentation for the internal price estimation API.<br> Every request expects the following headers:<ul><li>Content-Type: application/json</li><li>Accept: application/json</li></ul>
 *
 * OpenAPI spec version: 1.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12-SNAPSHOT
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
 * StatisticsParameters Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatisticsParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StatisticsParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalQueries' => 'float',
        'webQueries' => 'float',
        'apiQueries' => 'float',
        'queryPercentage' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalQueries' => 'integer',
        'webQueries' => 'integer',
        'apiQueries' => 'integer',
        'queryPercentage' => 'integer'
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
        'totalQueries' => 'totalQueries',
        'webQueries' => 'webQueries',
        'apiQueries' => 'apiQueries',
        'queryPercentage' => 'queryPercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalQueries' => 'setTotalQueries',
        'webQueries' => 'setWebQueries',
        'apiQueries' => 'setApiQueries',
        'queryPercentage' => 'setQueryPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalQueries' => 'getTotalQueries',
        'webQueries' => 'getWebQueries',
        'apiQueries' => 'getApiQueries',
        'queryPercentage' => 'getQueryPercentage'
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
        $this->container['totalQueries'] = isset($data['totalQueries']) ? $data['totalQueries'] : null;
        $this->container['webQueries'] = isset($data['webQueries']) ? $data['webQueries'] : null;
        $this->container['apiQueries'] = isset($data['apiQueries']) ? $data['apiQueries'] : null;
        $this->container['queryPercentage'] = isset($data['queryPercentage']) ? $data['queryPercentage'] : null;
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
     * Gets totalQueries
     *
     * @return float
     */
    public function getTotalQueries()
    {
        return $this->container['totalQueries'];
    }

    /**
     * Sets totalQueries
     *
     * @param float $totalQueries totalQueries
     *
     * @return $this
     */
    public function setTotalQueries($totalQueries)
    {
        $this->container['totalQueries'] = $totalQueries;

        return $this;
    }

    /**
     * Gets webQueries
     *
     * @return float
     */
    public function getWebQueries()
    {
        return $this->container['webQueries'];
    }

    /**
     * Sets webQueries
     *
     * @param float $webQueries webQueries
     *
     * @return $this
     */
    public function setWebQueries($webQueries)
    {
        $this->container['webQueries'] = $webQueries;

        return $this;
    }

    /**
     * Gets apiQueries
     *
     * @return float
     */
    public function getApiQueries()
    {
        return $this->container['apiQueries'];
    }

    /**
     * Sets apiQueries
     *
     * @param float $apiQueries apiQueries
     *
     * @return $this
     */
    public function setApiQueries($apiQueries)
    {
        $this->container['apiQueries'] = $apiQueries;

        return $this;
    }

    /**
     * Gets queryPercentage
     *
     * @return float
     */
    public function getQueryPercentage()
    {
        return $this->container['queryPercentage'];
    }

    /**
     * Sets queryPercentage
     *
     * @param float $queryPercentage queryPercentage
     *
     * @return $this
     */
    public function setQueryPercentage($queryPercentage)
    {
        $this->container['queryPercentage'] = $queryPercentage;

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
        foreach($container as $key => &$value){
            if(!$retrieveAllValues && empty($value)){
                unset($container[$key]);
                continue;
            }
            
            if(gettype($value) === "object"){
                $value = $value->toArray();
            }
            if(is_array($value)){
                foreach($value as &$v){
                    if (gettype($v) === "object") {
                        $v = $v->toArray();
                    }
                }
            }
        };
        return $container;
    }
}

