<?php
/**
 * SpamPolicy
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
 * SpamPolicy Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SpamPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SpamPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mode' => '\Domainrobot\Model\PolicyMode',
        'modifySubject' => 'bool',
        'tagHeader' => 'double',
        'spam' => 'double',
        'kill' => 'double',
        'quarantineDigestInterval' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mode' => null,
        'modifySubject' => null,
        'tagHeader' => 'double',
        'spam' => 'double',
        'kill' => 'double',
        'quarantineDigestInterval' => 'int32'
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
        'mode' => 'mode',
        'modifySubject' => 'modifySubject',
        'tagHeader' => 'tagHeader',
        'spam' => 'spam',
        'kill' => 'kill',
        'quarantineDigestInterval' => 'quarantineDigestInterval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mode' => 'setMode',
        'modifySubject' => 'setModifySubject',
        'tagHeader' => 'setTagHeader',
        'spam' => 'setSpam',
        'kill' => 'setKill',
        'quarantineDigestInterval' => 'setQuarantineDigestInterval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mode' => 'getMode',
        'modifySubject' => 'getModifySubject',
        'tagHeader' => 'getTagHeader',
        'spam' => 'getSpam',
        'kill' => 'getKill',
        'quarantineDigestInterval' => 'getQuarantineDigestInterval'
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
        $this->container['mode'] = isset($data['mode']) ? $this->createData($data['mode'], 'mode')  : null;
        $this->container['modifySubject'] = isset($data['modifySubject']) ? $this->createData($data['modifySubject'], 'modifySubject')  : null;
        $this->container['tagHeader'] = isset($data['tagHeader']) ? $this->createData($data['tagHeader'], 'tagHeader')  : null;
        $this->container['spam'] = isset($data['spam']) ? $this->createData($data['spam'], 'spam')  : null;
        $this->container['kill'] = isset($data['kill']) ? $this->createData($data['kill'], 'kill')  : null;
        $this->container['quarantineDigestInterval'] = isset($data['quarantineDigestInterval']) ? $this->createData($data['quarantineDigestInterval'], 'quarantineDigestInterval')  : null;
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

        if (!is_null($this->container['tagHeader']) && ($this->container['tagHeader'] > 999.9)) {
            $invalidProperties[] = "invalid value for 'tagHeader', must be smaller than or equal to 999.9.";
        }

        if (!is_null($this->container['tagHeader']) && ($this->container['tagHeader'] < -999.9)) {
            $invalidProperties[] = "invalid value for 'tagHeader', must be bigger than or equal to -999.9.";
        }

        if (!is_null($this->container['spam']) && ($this->container['spam'] > 999.9)) {
            $invalidProperties[] = "invalid value for 'spam', must be smaller than or equal to 999.9.";
        }

        if (!is_null($this->container['spam']) && ($this->container['spam'] < -999.9)) {
            $invalidProperties[] = "invalid value for 'spam', must be bigger than or equal to -999.9.";
        }

        if (!is_null($this->container['kill']) && ($this->container['kill'] > 999.9)) {
            $invalidProperties[] = "invalid value for 'kill', must be smaller than or equal to 999.9.";
        }

        if (!is_null($this->container['kill']) && ($this->container['kill'] < -999.9)) {
            $invalidProperties[] = "invalid value for 'kill', must be bigger than or equal to -999.9.";
        }

        if (!is_null($this->container['quarantineDigestInterval']) && ($this->container['quarantineDigestInterval'] < 1440)) {
            $invalidProperties[] = "invalid value for 'quarantineDigestInterval', must be bigger than or equal to 1440.";
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
     * Gets mode
     *
     * @return \Domainrobot\Model\PolicyMode
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \Domainrobot\Model\PolicyMode $mode mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets modifySubject
     *
     * @return bool
     */
    public function getModifySubject()
    {
        return $this->container['modifySubject'];
    }

    /**
     * Sets modifySubject
     *
     * @param bool $modifySubject Setting for the flag in the subject:  false = The emails should not be marked in the subject  true = The emails should receive the label in the subject.  Default= false  For XML, 0 (false) and 1 (true) can also be used.
     *
     * @return $this
     */
    public function setModifySubject($modifySubject)
    {
        $this->container['modifySubject'] = $modifySubject;

        return $this;
    }

    /**
     * Gets tagHeader
     *
     * @return double
     */
    public function getTagHeader()
    {
        return $this->container['tagHeader'];
    }

    /**
     * Sets tagHeader
     *
     * @param double $tagHeader Enter a score. If an incoming email reaches this value, the email will   be marked as spam in the header. (Header X-Spam Status   and X-Spam Level).  Recommendation:  Value between -999 and 1  Minimum: -999.9  Maximum: 999.9
     *
     * @return $this
     */
    public function setTagHeader($tagHeader)
    {

        if (!is_null($tagHeader) && ($tagHeader > 999.9)) {
            throw new \InvalidArgumentException('invalid value for $tagHeader when calling SpamPolicy., must be smaller than or equal to 999.9.');
        }
        if (!is_null($tagHeader) && ($tagHeader < -999.9)) {
            throw new \InvalidArgumentException('invalid value for $tagHeader when calling SpamPolicy., must be bigger than or equal to -999.9.');
        }

        $this->container['tagHeader'] = $tagHeader;

        return $this;
    }

    /**
     * Gets spam
     *
     * @return double
     */
    public function getSpam()
    {
        return $this->container['spam'];
    }

    /**
     * Sets spam
     *
     * @param double $spam Enter a score from which an email should be classified as spam.   The header X-Spam-Flag will be added to emails that reach this score.  Minimum: -999.9  Maximum: 999.9
     *
     * @return $this
     */
    public function setSpam($spam)
    {

        if (!is_null($spam) && ($spam > 999.9)) {
            throw new \InvalidArgumentException('invalid value for $spam when calling SpamPolicy., must be smaller than or equal to 999.9.');
        }
        if (!is_null($spam) && ($spam < -999.9)) {
            throw new \InvalidArgumentException('invalid value for $spam when calling SpamPolicy., must be bigger than or equal to -999.9.');
        }

        $this->container['spam'] = $spam;

        return $this;
    }

    /**
     * Gets kill
     *
     * @return double
     */
    public function getKill()
    {
        return $this->container['kill'];
    }

    /**
     * Sets kill
     *
     * @param double $kill At what value an email should be quarantined for the selected task  Minimum: -999.9  Maximum: 999.9
     *
     * @return $this
     */
    public function setKill($kill)
    {

        if (!is_null($kill) && ($kill > 999.9)) {
            throw new \InvalidArgumentException('invalid value for $kill when calling SpamPolicy., must be smaller than or equal to 999.9.');
        }
        if (!is_null($kill) && ($kill < -999.9)) {
            throw new \InvalidArgumentException('invalid value for $kill when calling SpamPolicy., must be bigger than or equal to -999.9.');
        }

        $this->container['kill'] = $kill;

        return $this;
    }

    /**
     * Gets quarantineDigestInterval
     *
     * @return int
     */
    public function getQuarantineDigestInterval()
    {
        return $this->container['quarantineDigestInterval'];
    }

    /**
     * Sets quarantineDigestInterval
     *
     * @param int $quarantineDigestInterval \"Specify how long an email should be kept in quarantine.  Time unit: minutes  Default: 1440 min  Minimum: 1440 min\"
     *
     * @return $this
     */
    public function setQuarantineDigestInterval($quarantineDigestInterval)
    {

        if (!is_null($quarantineDigestInterval) && ($quarantineDigestInterval < 1440)) {
            throw new \InvalidArgumentException('invalid value for $quarantineDigestInterval when calling SpamPolicy., must be bigger than or equal to 1440.');
        }

        $this->container['quarantineDigestInterval'] = $quarantineDigestInterval;

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


