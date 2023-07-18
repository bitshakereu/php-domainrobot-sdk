<?php
/**
 * ContactGeneralExtensions
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
 * ContactGeneralExtensions Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactGeneralExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactGeneralExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'birth' => '\Domainrobot\Model\ContactBirthExtensions',
        'trademark' => '\Domainrobot\Model\ContactTrademarkExtensions',
        'identification' => '\Domainrobot\Model\ContactIdentificationExtensions',
        'language' => 'string',
        'companyNumber' => 'string',
        'gender' => '\Domainrobot\Model\GenderConstants',
        'vatNumber' => 'string',
        'citizenship' => 'string',
        'strict' => 'bool',
        'mobilePhone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'birth' => null,
        'trademark' => null,
        'identification' => null,
        'language' => null,
        'companyNumber' => null,
        'gender' => null,
        'vatNumber' => null,
        'citizenship' => null,
        'strict' => null,
        'mobilePhone' => null
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
        'birth' => 'birth',
        'trademark' => 'trademark',
        'identification' => 'identification',
        'language' => 'language',
        'companyNumber' => 'companyNumber',
        'gender' => 'gender',
        'vatNumber' => 'vatNumber',
        'citizenship' => 'citizenship',
        'strict' => 'strict',
        'mobilePhone' => 'mobilePhone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'birth' => 'setBirth',
        'trademark' => 'setTrademark',
        'identification' => 'setIdentification',
        'language' => 'setLanguage',
        'companyNumber' => 'setCompanyNumber',
        'gender' => 'setGender',
        'vatNumber' => 'setVatNumber',
        'citizenship' => 'setCitizenship',
        'strict' => 'setStrict',
        'mobilePhone' => 'setMobilePhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'birth' => 'getBirth',
        'trademark' => 'getTrademark',
        'identification' => 'getIdentification',
        'language' => 'getLanguage',
        'companyNumber' => 'getCompanyNumber',
        'gender' => 'getGender',
        'vatNumber' => 'getVatNumber',
        'citizenship' => 'getCitizenship',
        'strict' => 'getStrict',
        'mobilePhone' => 'getMobilePhone'
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
        $this->container['birth'] = isset($data['birth']) ? $this->createData($data['birth'], 'birth')  : null;
        $this->container['trademark'] = isset($data['trademark']) ? $this->createData($data['trademark'], 'trademark')  : null;
        $this->container['identification'] = isset($data['identification']) ? $this->createData($data['identification'], 'identification')  : null;
        $this->container['language'] = isset($data['language']) ? $this->createData($data['language'], 'language')  : null;
        $this->container['companyNumber'] = isset($data['companyNumber']) ? $this->createData($data['companyNumber'], 'companyNumber')  : null;
        $this->container['gender'] = isset($data['gender']) ? $this->createData($data['gender'], 'gender')  : null;
        $this->container['vatNumber'] = isset($data['vatNumber']) ? $this->createData($data['vatNumber'], 'vatNumber')  : null;
        $this->container['citizenship'] = isset($data['citizenship']) ? $this->createData($data['citizenship'], 'citizenship')  : null;
        $this->container['strict'] = isset($data['strict']) ? $this->createData($data['strict'], 'strict')  : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $this->createData($data['mobilePhone'], 'mobilePhone')  : null;
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
     * Gets birth
     *
     * @return \Domainrobot\Model\ContactBirthExtensions
     */
    public function getBirth()
    {
        return $this->container['birth'];
    }

    /**
     * Sets birth
     *
     * @param \Domainrobot\Model\ContactBirthExtensions $birth The birth extensions.
     *
     * @return $this
     */
    public function setBirth($birth)
    {
        $this->container['birth'] = $birth;

        return $this;
    }

    /**
     * Gets trademark
     *
     * @return \Domainrobot\Model\ContactTrademarkExtensions
     */
    public function getTrademark()
    {
        return $this->container['trademark'];
    }

    /**
     * Sets trademark
     *
     * @param \Domainrobot\Model\ContactTrademarkExtensions $trademark The trademark extensions.
     *
     * @return $this
     */
    public function setTrademark($trademark)
    {
        $this->container['trademark'] = $trademark;

        return $this;
    }

    /**
     * Gets identification
     *
     * @return \Domainrobot\Model\ContactIdentificationExtensions
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param \Domainrobot\Model\ContactIdentificationExtensions $identification The identification extensions.
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language of the contact RFC 3066.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets companyNumber
     *
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->container['companyNumber'];
    }

    /**
     * Sets companyNumber
     *
     * @param string $companyNumber Company number.
     *
     * @return $this
     */
    public function setCompanyNumber($companyNumber)
    {
        $this->container['companyNumber'] = $companyNumber;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Domainrobot\Model\GenderConstants
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Domainrobot\Model\GenderConstants $gender Gender.
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vatNumber'];
    }

    /**
     * Sets vatNumber
     *
     * @param string $vatNumber VAT number.
     *
     * @return $this
     */
    public function setVatNumber($vatNumber)
    {
        $this->container['vatNumber'] = $vatNumber;

        return $this;
    }

    /**
     * Gets citizenship
     *
     * @return string
     */
    public function getCitizenship()
    {
        return $this->container['citizenship'];
    }

    /**
     * Sets citizenship
     *
     * @param string $citizenship Citizenship. For EU citizens living outside the EU.
     *
     * @return $this
     */
    public function setCitizenship($citizenship)
    {
        $this->container['citizenship'] = $citizenship;

        return $this;
    }

    /**
     * Gets strict
     *
     * @return bool
     */
    public function getStrict()
    {
        return $this->container['strict'];
    }

    /**
     * Sets strict
     *
     * @param bool $strict If strict mode should be used for the registry mapping.
     *
     * @return $this
     */
    public function setStrict($strict)
    {
        $this->container['strict'] = $strict;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param string $mobilePhone Mobile phone number.
     *
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;

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


