<?php
/**
 * TldDns
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
 * TldDns Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TldDns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TldDns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dnssecMin' => 'int',
        'dnssecMax' => 'int',
        'dnssecAlgorithms' => 'int[]',
        'nserverMin' => 'int',
        'nserverMax' => 'int',
        'ipv4Min' => 'int',
        'ipv4Max' => 'int',
        'ipv6Min' => 'int',
        'ipv6Max' => 'int',
        'nsentryMin' => 'int',
        'nsentryMax' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dnssecMin' => 'int32',
        'dnssecMax' => 'int32',
        'dnssecAlgorithms' => 'int32',
        'nserverMin' => 'int32',
        'nserverMax' => 'int32',
        'ipv4Min' => 'int32',
        'ipv4Max' => 'int32',
        'ipv6Min' => 'int32',
        'ipv6Max' => 'int32',
        'nsentryMin' => 'int32',
        'nsentryMax' => 'int32'
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
        'dnssecMin' => 'dnssecMin',
        'dnssecMax' => 'dnssecMax',
        'dnssecAlgorithms' => 'dnssecAlgorithms',
        'nserverMin' => 'nserverMin',
        'nserverMax' => 'nserverMax',
        'ipv4Min' => 'ipv4Min',
        'ipv4Max' => 'ipv4Max',
        'ipv6Min' => 'ipv6Min',
        'ipv6Max' => 'ipv6Max',
        'nsentryMin' => 'nsentryMin',
        'nsentryMax' => 'nsentryMax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dnssecMin' => 'setDnssecMin',
        'dnssecMax' => 'setDnssecMax',
        'dnssecAlgorithms' => 'setDnssecAlgorithms',
        'nserverMin' => 'setNserverMin',
        'nserverMax' => 'setNserverMax',
        'ipv4Min' => 'setIpv4Min',
        'ipv4Max' => 'setIpv4Max',
        'ipv6Min' => 'setIpv6Min',
        'ipv6Max' => 'setIpv6Max',
        'nsentryMin' => 'setNsentryMin',
        'nsentryMax' => 'setNsentryMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dnssecMin' => 'getDnssecMin',
        'dnssecMax' => 'getDnssecMax',
        'dnssecAlgorithms' => 'getDnssecAlgorithms',
        'nserverMin' => 'getNserverMin',
        'nserverMax' => 'getNserverMax',
        'ipv4Min' => 'getIpv4Min',
        'ipv4Max' => 'getIpv4Max',
        'ipv6Min' => 'getIpv6Min',
        'ipv6Max' => 'getIpv6Max',
        'nsentryMin' => 'getNsentryMin',
        'nsentryMax' => 'getNsentryMax'
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
        $this->container['dnssecMin'] = isset($data['dnssecMin']) ? $this->createData($data['dnssecMin'], 'dnssecMin')  : null;
        $this->container['dnssecMax'] = isset($data['dnssecMax']) ? $this->createData($data['dnssecMax'], 'dnssecMax')  : null;
        $this->container['dnssecAlgorithms'] = isset($data['dnssecAlgorithms']) ? $this->createData($data['dnssecAlgorithms'], 'dnssecAlgorithms')  : null;
        $this->container['nserverMin'] = isset($data['nserverMin']) ? $this->createData($data['nserverMin'], 'nserverMin')  : null;
        $this->container['nserverMax'] = isset($data['nserverMax']) ? $this->createData($data['nserverMax'], 'nserverMax')  : null;
        $this->container['ipv4Min'] = isset($data['ipv4Min']) ? $this->createData($data['ipv4Min'], 'ipv4Min')  : null;
        $this->container['ipv4Max'] = isset($data['ipv4Max']) ? $this->createData($data['ipv4Max'], 'ipv4Max')  : null;
        $this->container['ipv6Min'] = isset($data['ipv6Min']) ? $this->createData($data['ipv6Min'], 'ipv6Min')  : null;
        $this->container['ipv6Max'] = isset($data['ipv6Max']) ? $this->createData($data['ipv6Max'], 'ipv6Max')  : null;
        $this->container['nsentryMin'] = isset($data['nsentryMin']) ? $this->createData($data['nsentryMin'], 'nsentryMin')  : null;
        $this->container['nsentryMax'] = isset($data['nsentryMax']) ? $this->createData($data['nsentryMax'], 'nsentryMax')  : null;
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
     * Gets dnssecMin
     *
     * @return int
     */
    public function getDnssecMin()
    {
        return $this->container['dnssecMin'];
    }

    /**
     * Sets dnssecMin
     *
     * @param int $dnssecMin dnssecMin
     *
     * @return $this
     */
    public function setDnssecMin($dnssecMin)
    {
        $this->container['dnssecMin'] = $dnssecMin;

        return $this;
    }

    /**
     * Gets dnssecMax
     *
     * @return int
     */
    public function getDnssecMax()
    {
        return $this->container['dnssecMax'];
    }

    /**
     * Sets dnssecMax
     *
     * @param int $dnssecMax dnssecMax
     *
     * @return $this
     */
    public function setDnssecMax($dnssecMax)
    {
        $this->container['dnssecMax'] = $dnssecMax;

        return $this;
    }

    /**
     * Gets dnssecAlgorithms
     *
     * @return int[]
     */
    public function getDnssecAlgorithms()
    {
        return $this->container['dnssecAlgorithms'];
    }

    /**
     * Sets dnssecAlgorithms
     *
     * @param int[] $dnssecAlgorithms dnssecAlgorithms
     *
     * @return $this
     */
    public function setDnssecAlgorithms($dnssecAlgorithms)
    {
        $this->container['dnssecAlgorithms'] = $dnssecAlgorithms;

        return $this;
    }

    /**
     * Gets nserverMin
     *
     * @return int
     */
    public function getNserverMin()
    {
        return $this->container['nserverMin'];
    }

    /**
     * Sets nserverMin
     *
     * @param int $nserverMin nserverMin
     *
     * @return $this
     */
    public function setNserverMin($nserverMin)
    {
        $this->container['nserverMin'] = $nserverMin;

        return $this;
    }

    /**
     * Gets nserverMax
     *
     * @return int
     */
    public function getNserverMax()
    {
        return $this->container['nserverMax'];
    }

    /**
     * Sets nserverMax
     *
     * @param int $nserverMax nserverMax
     *
     * @return $this
     */
    public function setNserverMax($nserverMax)
    {
        $this->container['nserverMax'] = $nserverMax;

        return $this;
    }

    /**
     * Gets ipv4Min
     *
     * @return int
     */
    public function getIpv4Min()
    {
        return $this->container['ipv4Min'];
    }

    /**
     * Sets ipv4Min
     *
     * @param int $ipv4Min ipv4Min
     *
     * @return $this
     */
    public function setIpv4Min($ipv4Min)
    {
        $this->container['ipv4Min'] = $ipv4Min;

        return $this;
    }

    /**
     * Gets ipv4Max
     *
     * @return int
     */
    public function getIpv4Max()
    {
        return $this->container['ipv4Max'];
    }

    /**
     * Sets ipv4Max
     *
     * @param int $ipv4Max ipv4Max
     *
     * @return $this
     */
    public function setIpv4Max($ipv4Max)
    {
        $this->container['ipv4Max'] = $ipv4Max;

        return $this;
    }

    /**
     * Gets ipv6Min
     *
     * @return int
     */
    public function getIpv6Min()
    {
        return $this->container['ipv6Min'];
    }

    /**
     * Sets ipv6Min
     *
     * @param int $ipv6Min ipv6Min
     *
     * @return $this
     */
    public function setIpv6Min($ipv6Min)
    {
        $this->container['ipv6Min'] = $ipv6Min;

        return $this;
    }

    /**
     * Gets ipv6Max
     *
     * @return int
     */
    public function getIpv6Max()
    {
        return $this->container['ipv6Max'];
    }

    /**
     * Sets ipv6Max
     *
     * @param int $ipv6Max ipv6Max
     *
     * @return $this
     */
    public function setIpv6Max($ipv6Max)
    {
        $this->container['ipv6Max'] = $ipv6Max;

        return $this;
    }

    /**
     * Gets nsentryMin
     *
     * @return int
     */
    public function getNsentryMin()
    {
        return $this->container['nsentryMin'];
    }

    /**
     * Sets nsentryMin
     *
     * @param int $nsentryMin nsentryMin
     *
     * @return $this
     */
    public function setNsentryMin($nsentryMin)
    {
        $this->container['nsentryMin'] = $nsentryMin;

        return $this;
    }

    /**
     * Gets nsentryMax
     *
     * @return int
     */
    public function getNsentryMax()
    {
        return $this->container['nsentryMax'];
    }

    /**
     * Sets nsentryMax
     *
     * @param int $nsentryMax nsentryMax
     *
     * @return $this
     */
    public function setNsentryMax($nsentryMax)
    {
        $this->container['nsentryMax'] = $nsentryMax;

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


