<?php
/**
 * UserEstimationStatistics
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
 * UserEstimationStatistics Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserEstimationStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserEstimationStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'queriesLast24Hours' => '\Domainrobot\Model\StatisticsParameters',
        'queriesThisMonth' => '\Domainrobot\Model\StatisticsParameters',
        'queriesThisYear' => '\Domainrobot\Model\StatisticsParameters',
        'last12MonthsDevelopment' => '\Domainrobot\Model\UserEstimationStatisticsLast12MonthsDevelopment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'queriesLast24Hours' => null,
        'queriesThisMonth' => null,
        'queriesThisYear' => null,
        'last12MonthsDevelopment' => null
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
        'queriesLast24Hours' => 'queriesLast24Hours',
        'queriesThisMonth' => 'queriesThisMonth',
        'queriesThisYear' => 'queriesThisYear',
        'last12MonthsDevelopment' => 'last12MonthsDevelopment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'queriesLast24Hours' => 'setQueriesLast24Hours',
        'queriesThisMonth' => 'setQueriesThisMonth',
        'queriesThisYear' => 'setQueriesThisYear',
        'last12MonthsDevelopment' => 'setLast12MonthsDevelopment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'queriesLast24Hours' => 'getQueriesLast24Hours',
        'queriesThisMonth' => 'getQueriesThisMonth',
        'queriesThisYear' => 'getQueriesThisYear',
        'last12MonthsDevelopment' => 'getLast12MonthsDevelopment'
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
        $this->container['queriesLast24Hours'] = isset($data['queriesLast24Hours']) ? $this->createData($data['queriesLast24Hours'], 'queriesLast24Hours')  : null;
        $this->container['queriesThisMonth'] = isset($data['queriesThisMonth']) ? $this->createData($data['queriesThisMonth'], 'queriesThisMonth')  : null;
        $this->container['queriesThisYear'] = isset($data['queriesThisYear']) ? $this->createData($data['queriesThisYear'], 'queriesThisYear')  : null;
        $this->container['last12MonthsDevelopment'] = isset($data['last12MonthsDevelopment']) ? $this->createData($data['last12MonthsDevelopment'], 'last12MonthsDevelopment')  : null;
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
     * Gets queriesLast24Hours
     *
     * @return \Domainrobot\Model\StatisticsParameters
     */
    public function getQueriesLast24Hours()
    {
        return $this->container['queriesLast24Hours'];
    }

    /**
     * Sets queriesLast24Hours
     *
     * @param \Domainrobot\Model\StatisticsParameters $queriesLast24Hours queriesLast24Hours
     *
     * @return $this
     */
    public function setQueriesLast24Hours($queriesLast24Hours)
    {
        $this->container['queriesLast24Hours'] = $queriesLast24Hours;

        return $this;
    }

    /**
     * Gets queriesThisMonth
     *
     * @return \Domainrobot\Model\StatisticsParameters
     */
    public function getQueriesThisMonth()
    {
        return $this->container['queriesThisMonth'];
    }

    /**
     * Sets queriesThisMonth
     *
     * @param \Domainrobot\Model\StatisticsParameters $queriesThisMonth queriesThisMonth
     *
     * @return $this
     */
    public function setQueriesThisMonth($queriesThisMonth)
    {
        $this->container['queriesThisMonth'] = $queriesThisMonth;

        return $this;
    }

    /**
     * Gets queriesThisYear
     *
     * @return \Domainrobot\Model\StatisticsParameters
     */
    public function getQueriesThisYear()
    {
        return $this->container['queriesThisYear'];
    }

    /**
     * Sets queriesThisYear
     *
     * @param \Domainrobot\Model\StatisticsParameters $queriesThisYear queriesThisYear
     *
     * @return $this
     */
    public function setQueriesThisYear($queriesThisYear)
    {
        $this->container['queriesThisYear'] = $queriesThisYear;

        return $this;
    }

    /**
     * Gets last12MonthsDevelopment
     *
     * @return \Domainrobot\Model\UserEstimationStatisticsLast12MonthsDevelopment
     */
    public function getLast12MonthsDevelopment()
    {
        return $this->container['last12MonthsDevelopment'];
    }

    /**
     * Sets last12MonthsDevelopment
     *
     * @param \Domainrobot\Model\UserEstimationStatisticsLast12MonthsDevelopment $last12MonthsDevelopment last12MonthsDevelopment
     *
     * @return $this
     */
    public function setLast12MonthsDevelopment($last12MonthsDevelopment)
    {
        $this->container['last12MonthsDevelopment'] = $last12MonthsDevelopment;

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


