<?php
/**
 * EstimationParametersV1Pagerank
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
 * EstimationParametersV1Pagerank Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstimationParametersV1Pagerank implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EstimationParametersV1_pagerank';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'globalRank' => 'float',
        'tldRank' => 'float',
        'refSubNets' => 'float',
        'refIPs' => 'float',
        'prevGlobalRank' => 'float',
        'prevTldRank' => 'float',
        'pPrevRefSubNets' => 'float',
        'prevRefIPs' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'globalRank' => null,
        'tldRank' => null,
        'refSubNets' => null,
        'refIPs' => null,
        'prevGlobalRank' => null,
        'prevTldRank' => null,
        'pPrevRefSubNets' => null,
        'prevRefIPs' => null
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
        'globalRank' => 'globalRank',
        'tldRank' => 'tldRank',
        'refSubNets' => 'refSubNets',
        'refIPs' => 'refIPs',
        'prevGlobalRank' => 'prevGlobalRank',
        'prevTldRank' => 'prevTldRank',
        'pPrevRefSubNets' => 'pPrevRefSubNets',
        'prevRefIPs' => 'prevRefIPs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'globalRank' => 'setGlobalRank',
        'tldRank' => 'setTldRank',
        'refSubNets' => 'setRefSubNets',
        'refIPs' => 'setRefIPs',
        'prevGlobalRank' => 'setPrevGlobalRank',
        'prevTldRank' => 'setPrevTldRank',
        'pPrevRefSubNets' => 'setPPrevRefSubNets',
        'prevRefIPs' => 'setPrevRefIPs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'globalRank' => 'getGlobalRank',
        'tldRank' => 'getTldRank',
        'refSubNets' => 'getRefSubNets',
        'refIPs' => 'getRefIPs',
        'prevGlobalRank' => 'getPrevGlobalRank',
        'prevTldRank' => 'getPrevTldRank',
        'pPrevRefSubNets' => 'getPPrevRefSubNets',
        'prevRefIPs' => 'getPrevRefIPs'
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
        $this->container['globalRank'] = isset($data['globalRank']) ? $this->createData($data['globalRank'], 'globalRank')  : null;
        $this->container['tldRank'] = isset($data['tldRank']) ? $this->createData($data['tldRank'], 'tldRank')  : null;
        $this->container['refSubNets'] = isset($data['refSubNets']) ? $this->createData($data['refSubNets'], 'refSubNets')  : null;
        $this->container['refIPs'] = isset($data['refIPs']) ? $this->createData($data['refIPs'], 'refIPs')  : null;
        $this->container['prevGlobalRank'] = isset($data['prevGlobalRank']) ? $this->createData($data['prevGlobalRank'], 'prevGlobalRank')  : null;
        $this->container['prevTldRank'] = isset($data['prevTldRank']) ? $this->createData($data['prevTldRank'], 'prevTldRank')  : null;
        $this->container['pPrevRefSubNets'] = isset($data['pPrevRefSubNets']) ? $this->createData($data['pPrevRefSubNets'], 'pPrevRefSubNets')  : null;
        $this->container['prevRefIPs'] = isset($data['prevRefIPs']) ? $this->createData($data['prevRefIPs'], 'prevRefIPs')  : null;
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
    public function createData($data = null, $property)
    {
        if ($data === null) {
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

                return $reflectionInstances;
            }
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
     * Gets globalRank
     *
     * @return float
     */
    public function getGlobalRank()
    {
        return $this->container['globalRank'];
    }

    /**
     * Sets globalRank
     *
     * @param float $globalRank globalRank
     *
     * @return $this
     */
    public function setGlobalRank($globalRank)
    {
        $this->container['globalRank'] = $globalRank;

        return $this;
    }

    /**
     * Gets tldRank
     *
     * @return float
     */
    public function getTldRank()
    {
        return $this->container['tldRank'];
    }

    /**
     * Sets tldRank
     *
     * @param float $tldRank tldRank
     *
     * @return $this
     */
    public function setTldRank($tldRank)
    {
        $this->container['tldRank'] = $tldRank;

        return $this;
    }

    /**
     * Gets refSubNets
     *
     * @return float
     */
    public function getRefSubNets()
    {
        return $this->container['refSubNets'];
    }

    /**
     * Sets refSubNets
     *
     * @param float $refSubNets refSubNets
     *
     * @return $this
     */
    public function setRefSubNets($refSubNets)
    {
        $this->container['refSubNets'] = $refSubNets;

        return $this;
    }

    /**
     * Gets refIPs
     *
     * @return float
     */
    public function getRefIPs()
    {
        return $this->container['refIPs'];
    }

    /**
     * Sets refIPs
     *
     * @param float $refIPs refIPs
     *
     * @return $this
     */
    public function setRefIPs($refIPs)
    {
        $this->container['refIPs'] = $refIPs;

        return $this;
    }

    /**
     * Gets prevGlobalRank
     *
     * @return float
     */
    public function getPrevGlobalRank()
    {
        return $this->container['prevGlobalRank'];
    }

    /**
     * Sets prevGlobalRank
     *
     * @param float $prevGlobalRank prevGlobalRank
     *
     * @return $this
     */
    public function setPrevGlobalRank($prevGlobalRank)
    {
        $this->container['prevGlobalRank'] = $prevGlobalRank;

        return $this;
    }

    /**
     * Gets prevTldRank
     *
     * @return float
     */
    public function getPrevTldRank()
    {
        return $this->container['prevTldRank'];
    }

    /**
     * Sets prevTldRank
     *
     * @param float $prevTldRank prevTldRank
     *
     * @return $this
     */
    public function setPrevTldRank($prevTldRank)
    {
        $this->container['prevTldRank'] = $prevTldRank;

        return $this;
    }

    /**
     * Gets pPrevRefSubNets
     *
     * @return float
     */
    public function getPPrevRefSubNets()
    {
        return $this->container['pPrevRefSubNets'];
    }

    /**
     * Sets pPrevRefSubNets
     *
     * @param float $pPrevRefSubNets pPrevRefSubNets
     *
     * @return $this
     */
    public function setPPrevRefSubNets($pPrevRefSubNets)
    {
        $this->container['pPrevRefSubNets'] = $pPrevRefSubNets;

        return $this;
    }

    /**
     * Gets prevRefIPs
     *
     * @return string
     */
    public function getPrevRefIPs()
    {
        return $this->container['prevRefIPs'];
    }

    /**
     * Sets prevRefIPs
     *
     * @param string $prevRefIPs prevRefIPs
     *
     * @return $this
     */
    public function setPrevRefIPs($prevRefIPs)
    {
        $this->container['prevRefIPs'] = $prevRefIPs;

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
            if (!$retrieveAllValues && empty($value)) {
                unset($container[$key]);
                continue;
            }
            
            if (gettype($value) === "object") {
                if(method_exists($value, 'toArray')) {
                    $value = $value->toArray();
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
                        $v = $v->toArray();
                    }
                }
            }
            $cleanContainer[self::$attributeMap[$key]] = $value;
        };
        return $cleanContainer;
    }
}


