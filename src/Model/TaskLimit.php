<?php
/**
 * TaskLimit
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
 * TaskLimit Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskLimit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskLimit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'taskGroup' => '\Domainrobot\Model\TaskGroup',
        'limitSelf' => 'int',
        'inclusiveSelf' => 'int',
        'timeUnitSelf' => '\Domainrobot\Model\TimeUnitConstants',
        'limitChildren' => 'int',
        'inclusiveChildren' => 'int',
        'timeUnitChildren' => '\Domainrobot\Model\TimeUnitConstants',
        'count' => 'int',
        'user' => '\Domainrobot\Model\BasicUser'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'taskGroup' => null,
        'limitSelf' => 'int32',
        'inclusiveSelf' => 'int32',
        'timeUnitSelf' => null,
        'limitChildren' => 'int32',
        'inclusiveChildren' => 'int32',
        'timeUnitChildren' => null,
        'count' => 'int32',
        'user' => null
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
        'taskGroup' => 'taskGroup',
        'limitSelf' => 'limitSelf',
        'inclusiveSelf' => 'inclusiveSelf',
        'timeUnitSelf' => 'timeUnitSelf',
        'limitChildren' => 'limitChildren',
        'inclusiveChildren' => 'inclusiveChildren',
        'timeUnitChildren' => 'timeUnitChildren',
        'count' => 'count',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'taskGroup' => 'setTaskGroup',
        'limitSelf' => 'setLimitSelf',
        'inclusiveSelf' => 'setInclusiveSelf',
        'timeUnitSelf' => 'setTimeUnitSelf',
        'limitChildren' => 'setLimitChildren',
        'inclusiveChildren' => 'setInclusiveChildren',
        'timeUnitChildren' => 'setTimeUnitChildren',
        'count' => 'setCount',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'taskGroup' => 'getTaskGroup',
        'limitSelf' => 'getLimitSelf',
        'inclusiveSelf' => 'getInclusiveSelf',
        'timeUnitSelf' => 'getTimeUnitSelf',
        'limitChildren' => 'getLimitChildren',
        'inclusiveChildren' => 'getInclusiveChildren',
        'timeUnitChildren' => 'getTimeUnitChildren',
        'count' => 'getCount',
        'user' => 'getUser'
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
        $this->container['taskGroup'] = isset($data['taskGroup']) ? $this->createData($data['taskGroup'], 'taskGroup')  : null;
        $this->container['limitSelf'] = isset($data['limitSelf']) ? $this->createData($data['limitSelf'], 'limitSelf')  : null;
        $this->container['inclusiveSelf'] = isset($data['inclusiveSelf']) ? $this->createData($data['inclusiveSelf'], 'inclusiveSelf')  : null;
        $this->container['timeUnitSelf'] = isset($data['timeUnitSelf']) ? $this->createData($data['timeUnitSelf'], 'timeUnitSelf')  : null;
        $this->container['limitChildren'] = isset($data['limitChildren']) ? $this->createData($data['limitChildren'], 'limitChildren')  : null;
        $this->container['inclusiveChildren'] = isset($data['inclusiveChildren']) ? $this->createData($data['inclusiveChildren'], 'inclusiveChildren')  : null;
        $this->container['timeUnitChildren'] = isset($data['timeUnitChildren']) ? $this->createData($data['timeUnitChildren'], 'timeUnitChildren')  : null;
        $this->container['count'] = isset($data['count']) ? $this->createData($data['count'], 'count')  : null;
        $this->container['user'] = isset($data['user']) ? $this->createData($data['user'], 'user')  : null;
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
     * Gets taskGroup
     *
     * @return \Domainrobot\Model\TaskGroup
     */
    public function getTaskGroup()
    {
        return $this->container['taskGroup'];
    }

    /**
     * Sets taskGroup
     *
     * @param \Domainrobot\Model\TaskGroup $taskGroup The selected task group
     *
     * @return $this
     */
    public function setTaskGroup($taskGroup)
    {
        $this->container['taskGroup'] = $taskGroup;

        return $this;
    }

    /**
     * Gets limitSelf
     *
     * @return int
     */
    public function getLimitSelf()
    {
        return $this->container['limitSelf'];
    }

    /**
     * Sets limitSelf
     *
     * @param int $limitSelf The self limit count
     *
     * @return $this
     */
    public function setLimitSelf($limitSelf)
    {
        $this->container['limitSelf'] = $limitSelf;

        return $this;
    }

    /**
     * Gets inclusiveSelf
     *
     * @return int
     */
    public function getInclusiveSelf()
    {
        return $this->container['inclusiveSelf'];
    }

    /**
     * Sets inclusiveSelf
     *
     * @param int $inclusiveSelf The self included count
     *
     * @return $this
     */
    public function setInclusiveSelf($inclusiveSelf)
    {
        $this->container['inclusiveSelf'] = $inclusiveSelf;

        return $this;
    }

    /**
     * Gets timeUnitSelf
     *
     * @return \Domainrobot\Model\TimeUnitConstants
     */
    public function getTimeUnitSelf()
    {
        return $this->container['timeUnitSelf'];
    }

    /**
     * Sets timeUnitSelf
     *
     * @param \Domainrobot\Model\TimeUnitConstants $timeUnitSelf The self time unit
     *
     * @return $this
     */
    public function setTimeUnitSelf($timeUnitSelf)
    {
        $this->container['timeUnitSelf'] = $timeUnitSelf;

        return $this;
    }

    /**
     * Gets limitChildren
     *
     * @return int
     */
    public function getLimitChildren()
    {
        return $this->container['limitChildren'];
    }

    /**
     * Sets limitChildren
     *
     * @param int $limitChildren The limited count for each child
     *
     * @return $this
     */
    public function setLimitChildren($limitChildren)
    {
        $this->container['limitChildren'] = $limitChildren;

        return $this;
    }

    /**
     * Gets inclusiveChildren
     *
     * @return int
     */
    public function getInclusiveChildren()
    {
        return $this->container['inclusiveChildren'];
    }

    /**
     * Sets inclusiveChildren
     *
     * @param int $inclusiveChildren The included count for each child
     *
     * @return $this
     */
    public function setInclusiveChildren($inclusiveChildren)
    {
        $this->container['inclusiveChildren'] = $inclusiveChildren;

        return $this;
    }

    /**
     * Gets timeUnitChildren
     *
     * @return \Domainrobot\Model\TimeUnitConstants
     */
    public function getTimeUnitChildren()
    {
        return $this->container['timeUnitChildren'];
    }

    /**
     * Sets timeUnitChildren
     *
     * @param \Domainrobot\Model\TimeUnitConstants $timeUnitChildren The time unit for each child
     *
     * @return $this
     */
    public function setTimeUnitChildren($timeUnitChildren)
    {
        $this->container['timeUnitChildren'] = $timeUnitChildren;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count The current count if available
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Domainrobot\Model\BasicUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Domainrobot\Model\BasicUser $user The affected user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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


