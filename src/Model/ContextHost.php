<?php
/**
 * ContextHost
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
 * ContextHost Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContextHost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContextHost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'master' => 'bool',
        'csr' => 'string',
        'serverCert' => 'string',
        'caCert' => 'string',
        'status' => '\Domainrobot\Model\JobStatusConstants',
        'subStatus' => 'string',
        'zone' => '\Domainrobot\Model\ContextHostZone',
        'certificate' => '\Domainrobot\Model\BasicCertificate',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'master' => null,
        'csr' => null,
        'serverCert' => null,
        'caCert' => null,
        'status' => null,
        'subStatus' => null,
        'zone' => null,
        'certificate' => null,
        'name' => null
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
        'master' => 'master',
        'csr' => 'csr',
        'serverCert' => 'serverCert',
        'caCert' => 'caCert',
        'status' => 'status',
        'subStatus' => 'subStatus',
        'zone' => 'zone',
        'certificate' => 'certificate',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'master' => 'setMaster',
        'csr' => 'setCsr',
        'serverCert' => 'setServerCert',
        'caCert' => 'setCaCert',
        'status' => 'setStatus',
        'subStatus' => 'setSubStatus',
        'zone' => 'setZone',
        'certificate' => 'setCertificate',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'master' => 'getMaster',
        'csr' => 'getCsr',
        'serverCert' => 'getServerCert',
        'caCert' => 'getCaCert',
        'status' => 'getStatus',
        'subStatus' => 'getSubStatus',
        'zone' => 'getZone',
        'certificate' => 'getCertificate',
        'name' => 'getName'
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
        $this->container['master'] = isset($data['master']) ? $this->createData($data['master'], 'master')  : null;
        $this->container['csr'] = isset($data['csr']) ? $this->createData($data['csr'], 'csr')  : null;
        $this->container['serverCert'] = isset($data['serverCert']) ? $this->createData($data['serverCert'], 'serverCert')  : null;
        $this->container['caCert'] = isset($data['caCert']) ? $this->createData($data['caCert'], 'caCert')  : null;
        $this->container['status'] = isset($data['status']) ? $this->createData($data['status'], 'status')  : null;
        $this->container['subStatus'] = isset($data['subStatus']) ? $this->createData($data['subStatus'], 'subStatus')  : null;
        $this->container['zone'] = isset($data['zone']) ? $this->createData($data['zone'], 'zone')  : null;
        $this->container['certificate'] = isset($data['certificate']) ? $this->createData($data['certificate'], 'certificate')  : null;
        $this->container['name'] = isset($data['name']) ? $this->createData($data['name'], 'name')  : null;
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
     * Gets master
     *
     * @return bool
     */
    public function getMaster()
    {
        return $this->container['master'];
    }

    /**
     * Sets master
     *
     * @param bool $master Show if host is default value
     *
     * @return $this
     */
    public function setMaster($master)
    {
        $this->container['master'] = $master;

        return $this;
    }

    /**
     * Gets csr
     *
     * @return string
     */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
     * Sets csr
     *
     * @param string $csr The csr of the certificate
     *
     * @return $this
     */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;

        return $this;
    }

    /**
     * Gets serverCert
     *
     * @return string
     */
    public function getServerCert()
    {
        return $this->container['serverCert'];
    }

    /**
     * Sets serverCert
     *
     * @param string $serverCert The server certificate.
     *
     * @return $this
     */
    public function setServerCert($serverCert)
    {
        $this->container['serverCert'] = $serverCert;

        return $this;
    }

    /**
     * Gets caCert
     *
     * @return string
     */
    public function getCaCert()
    {
        return $this->container['caCert'];
    }

    /**
     * Sets caCert
     *
     * @param string $caCert The intermediates of the certificate
     *
     * @return $this
     */
    public function setCaCert($caCert)
    {
        $this->container['caCert'] = $caCert;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Domainrobot\Model\JobStatusConstants
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Domainrobot\Model\JobStatusConstants $status The job status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subStatus
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
     * Sets subStatus
     *
     * @param string $subStatus The job substatus
     *
     * @return $this
     */
    public function setSubStatus($subStatus)
    {
        $this->container['subStatus'] = $subStatus;

        return $this;
    }

    /**
     * Gets zone
     *
     * @return \Domainrobot\Model\ContextHostZone
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     *
     * @param \Domainrobot\Model\ContextHostZone $zone The zones of the host
     *
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return \Domainrobot\Model\BasicCertificate
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param \Domainrobot\Model\BasicCertificate $certificate The zones of the host
     *
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

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
     * @param string $name The host name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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


