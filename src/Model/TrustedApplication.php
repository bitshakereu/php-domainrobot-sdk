<?php
/**
 * TrustedApplication
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
 * TrustedApplication Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrustedApplication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrustedApplication';

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
        'user' => '\Domainrobot\Model\BasicUser',
        'uuid' => 'string',
        'password' => 'string',
        'application' => '\Domainrobot\Model\Application',
        'functions' => '\Domainrobot\Model\TrustedApplicationFunctions',
        'restrictions' => '\Domainrobot\Model\IpRestrictions',
        'device' => 'string',
        'comment' => 'string'
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
        'user' => null,
        'uuid' => null,
        'password' => null,
        'application' => null,
        'functions' => null,
        'restrictions' => null,
        'device' => null,
        'comment' => null
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
        'user' => 'user',
        'uuid' => 'uuid',
        'password' => 'password',
        'application' => 'application',
        'functions' => 'functions',
        'restrictions' => 'restrictions',
        'device' => 'device',
        'comment' => 'comment'
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
        'user' => 'setUser',
        'uuid' => 'setUuid',
        'password' => 'setPassword',
        'application' => 'setApplication',
        'functions' => 'setFunctions',
        'restrictions' => 'setRestrictions',
        'device' => 'setDevice',
        'comment' => 'setComment'
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
        'user' => 'getUser',
        'uuid' => 'getUuid',
        'password' => 'getPassword',
        'application' => 'getApplication',
        'functions' => 'getFunctions',
        'restrictions' => 'getRestrictions',
        'device' => 'getDevice',
        'comment' => 'getComment'
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
        $this->container['user'] = isset($data['user']) ? $this->createData($data['user'], 'user')  : null;
        $this->container['uuid'] = isset($data['uuid']) ? $this->createData($data['uuid'], 'uuid')  : null;
        $this->container['password'] = isset($data['password']) ? $this->createData($data['password'], 'password')  : null;
        $this->container['application'] = isset($data['application']) ? $this->createData($data['application'], 'application')  : null;
        $this->container['functions'] = isset($data['functions']) ? $this->createData($data['functions'], 'functions')  : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $this->createData($data['restrictions'], 'restrictions')  : null;
        $this->container['device'] = isset($data['device']) ? $this->createData($data['device'], 'device')  : null;
        $this->container['comment'] = isset($data['comment']) ? $this->createData($data['comment'], 'comment')  : null;
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

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ($this->container['application'] === null) {
            $invalidProperties[] = "'application' can't be null";
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
     * @param \Domainrobot\Model\BasicUser $user The user the trusted application belongs to.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid The unique identifier for the trusted application.
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password The password for the trusted application.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets application
     *
     * @return \Domainrobot\Model\Application
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param \Domainrobot\Model\Application $application The kind of application.
     *
     * @return $this
     */
    public function setApplication($application)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets functions
     *
     * @return \Domainrobot\Model\TrustedApplicationFunctions
     */
    public function getFunctions()
    {
        return $this->container['functions'];
    }

    /**
     * Sets functions
     *
     * @param \Domainrobot\Model\TrustedApplicationFunctions $functions The wrapper of the allowed functions for the trusted application.
     *
     * @return $this
     */
    public function setFunctions($functions)
    {
        $this->container['functions'] = $functions;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \Domainrobot\Model\IpRestrictions
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \Domainrobot\Model\IpRestrictions $restrictions The wrapper of the ip restrictions for the trusted application.
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string $device The device, which uses the trusted app.
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

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
     * @param string $comment A comment for the trusted application.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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


