<?php
/**
 * DomainStudioSourceOnlinePresence
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
 * DomainStudioSourceOnlinePresence Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainStudioSourceOnlinePresence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainStudioSourceOnlinePresence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'services' => '\Domainrobot\Model\DomainEnvelopeSearchService[]',
        'onlyAvailable' => 'bool',
        'domains' => 'string[]',
        'max' => 'int',
        'maxSldLength' => 'int',
        'useDash' => 'bool',
        'tlds' => 'string[]',
        'onlinePresenceUrl' => 'string',
        'onlinePresenceTitle' => 'string',
        'relatedUrls' => 'string[]',
        'category' => 'string',
        'onlinePresenceDescription' => 'string',
        'preferredName' => 'string',
        'location' => 'string',
        'business' => 'bool',
        'shortName' => 'string',
        'fullName' => 'string',
        'firstName' => 'string',
        'middleNames' => 'string[]',
        'lastName' => 'string',
        'email' => 'string',
        'hometown' => 'string',
        'skills' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'services' => null,
        'onlyAvailable' => null,
        'domains' => null,
        'max' => 'int32',
        'maxSldLength' => 'int32',
        'useDash' => null,
        'tlds' => null,
        'onlinePresenceUrl' => null,
        'onlinePresenceTitle' => null,
        'relatedUrls' => null,
        'category' => null,
        'onlinePresenceDescription' => null,
        'preferredName' => null,
        'location' => null,
        'business' => null,
        'shortName' => null,
        'fullName' => null,
        'firstName' => null,
        'middleNames' => null,
        'lastName' => null,
        'email' => null,
        'hometown' => null,
        'skills' => null
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
        'services' => 'services',
        'onlyAvailable' => 'onlyAvailable',
        'domains' => 'domains',
        'max' => 'max',
        'maxSldLength' => 'maxSldLength',
        'useDash' => 'useDash',
        'tlds' => 'tlds',
        'onlinePresenceUrl' => 'onlinePresenceUrl',
        'onlinePresenceTitle' => 'onlinePresenceTitle',
        'relatedUrls' => 'relatedUrls',
        'category' => 'category',
        'onlinePresenceDescription' => 'onlinePresenceDescription',
        'preferredName' => 'preferredName',
        'location' => 'location',
        'business' => 'business',
        'shortName' => 'shortName',
        'fullName' => 'fullName',
        'firstName' => 'firstName',
        'middleNames' => 'middleNames',
        'lastName' => 'lastName',
        'email' => 'email',
        'hometown' => 'hometown',
        'skills' => 'skills'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'services' => 'setServices',
        'onlyAvailable' => 'setOnlyAvailable',
        'domains' => 'setDomains',
        'max' => 'setMax',
        'maxSldLength' => 'setMaxSldLength',
        'useDash' => 'setUseDash',
        'tlds' => 'setTlds',
        'onlinePresenceUrl' => 'setOnlinePresenceUrl',
        'onlinePresenceTitle' => 'setOnlinePresenceTitle',
        'relatedUrls' => 'setRelatedUrls',
        'category' => 'setCategory',
        'onlinePresenceDescription' => 'setOnlinePresenceDescription',
        'preferredName' => 'setPreferredName',
        'location' => 'setLocation',
        'business' => 'setBusiness',
        'shortName' => 'setShortName',
        'fullName' => 'setFullName',
        'firstName' => 'setFirstName',
        'middleNames' => 'setMiddleNames',
        'lastName' => 'setLastName',
        'email' => 'setEmail',
        'hometown' => 'setHometown',
        'skills' => 'setSkills'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'services' => 'getServices',
        'onlyAvailable' => 'getOnlyAvailable',
        'domains' => 'getDomains',
        'max' => 'getMax',
        'maxSldLength' => 'getMaxSldLength',
        'useDash' => 'getUseDash',
        'tlds' => 'getTlds',
        'onlinePresenceUrl' => 'getOnlinePresenceUrl',
        'onlinePresenceTitle' => 'getOnlinePresenceTitle',
        'relatedUrls' => 'getRelatedUrls',
        'category' => 'getCategory',
        'onlinePresenceDescription' => 'getOnlinePresenceDescription',
        'preferredName' => 'getPreferredName',
        'location' => 'getLocation',
        'business' => 'getBusiness',
        'shortName' => 'getShortName',
        'fullName' => 'getFullName',
        'firstName' => 'getFirstName',
        'middleNames' => 'getMiddleNames',
        'lastName' => 'getLastName',
        'email' => 'getEmail',
        'hometown' => 'getHometown',
        'skills' => 'getSkills'
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
        $this->container['services'] = isset($data['services']) ? $this->createData($data['services'], 'services')  : null;
        $this->container['onlyAvailable'] = isset($data['onlyAvailable']) ? $this->createData($data['onlyAvailable'], 'onlyAvailable')  : null;
        $this->container['domains'] = isset($data['domains']) ? $this->createData($data['domains'], 'domains')  : null;
        $this->container['max'] = isset($data['max']) ? $this->createData($data['max'], 'max')  : null;
        $this->container['maxSldLength'] = isset($data['maxSldLength']) ? $this->createData($data['maxSldLength'], 'maxSldLength')  : null;
        $this->container['useDash'] = isset($data['useDash']) ? $this->createData($data['useDash'], 'useDash')  : null;
        $this->container['tlds'] = isset($data['tlds']) ? $this->createData($data['tlds'], 'tlds')  : null;
        $this->container['onlinePresenceUrl'] = isset($data['onlinePresenceUrl']) ? $this->createData($data['onlinePresenceUrl'], 'onlinePresenceUrl')  : null;
        $this->container['onlinePresenceTitle'] = isset($data['onlinePresenceTitle']) ? $this->createData($data['onlinePresenceTitle'], 'onlinePresenceTitle')  : null;
        $this->container['relatedUrls'] = isset($data['relatedUrls']) ? $this->createData($data['relatedUrls'], 'relatedUrls')  : null;
        $this->container['category'] = isset($data['category']) ? $this->createData($data['category'], 'category')  : null;
        $this->container['onlinePresenceDescription'] = isset($data['onlinePresenceDescription']) ? $this->createData($data['onlinePresenceDescription'], 'onlinePresenceDescription')  : null;
        $this->container['preferredName'] = isset($data['preferredName']) ? $this->createData($data['preferredName'], 'preferredName')  : null;
        $this->container['location'] = isset($data['location']) ? $this->createData($data['location'], 'location')  : null;
        $this->container['business'] = isset($data['business']) ? $this->createData($data['business'], 'business')  : null;
        $this->container['shortName'] = isset($data['shortName']) ? $this->createData($data['shortName'], 'shortName')  : null;
        $this->container['fullName'] = isset($data['fullName']) ? $this->createData($data['fullName'], 'fullName')  : null;
        $this->container['firstName'] = isset($data['firstName']) ? $this->createData($data['firstName'], 'firstName')  : null;
        $this->container['middleNames'] = isset($data['middleNames']) ? $this->createData($data['middleNames'], 'middleNames')  : null;
        $this->container['lastName'] = isset($data['lastName']) ? $this->createData($data['lastName'], 'lastName')  : null;
        $this->container['email'] = isset($data['email']) ? $this->createData($data['email'], 'email')  : null;
        $this->container['hometown'] = isset($data['hometown']) ? $this->createData($data['hometown'], 'hometown')  : null;
        $this->container['skills'] = isset($data['skills']) ? $this->createData($data['skills'], 'skills')  : null;
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
     * Gets services
     *
     * @return \Domainrobot\Model\DomainEnvelopeSearchService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Domainrobot\Model\DomainEnvelopeSearchService[] $services The services to fetch extra data from for this source
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets onlyAvailable
     *
     * @return bool
     */
    public function getOnlyAvailable()
    {
        return $this->container['onlyAvailable'];
    }

    /**
     * Sets onlyAvailable
     *
     * @param bool $onlyAvailable Defines whether to return only free domain names when service WHOIS is used for a source.
     *
     * @return $this
     */
    public function setOnlyAvailable($onlyAvailable)
    {
        $this->container['onlyAvailable'] = $onlyAvailable;

        return $this;
    }

    /**
     * Gets domains
     *
     * @return string[]
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param string[] $domains The generated domains of this source
     *
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets max
     *
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param int $max Maximum fetched suggested domains
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets maxSldLength
     *
     * @return int
     */
    public function getMaxSldLength()
    {
        return $this->container['maxSldLength'];
    }

    /**
     * Sets maxSldLength
     *
     * @param int $maxSldLength Maximum sld length for suggested domains
     *
     * @return $this
     */
    public function setMaxSldLength($maxSldLength)
    {
        $this->container['maxSldLength'] = $maxSldLength;

        return $this;
    }

    /**
     * Gets useDash
     *
     * @return bool
     */
    public function getUseDash()
    {
        return $this->container['useDash'];
    }

    /**
     * Sets useDash
     *
     * @param bool $useDash Suggested domains with dash
     *
     * @return $this
     */
    public function setUseDash($useDash)
    {
        $this->container['useDash'] = $useDash;

        return $this;
    }

    /**
     * Gets tlds
     *
     * @return string[]
     */
    public function getTlds()
    {
        return $this->container['tlds'];
    }

    /**
     * Sets tlds
     *
     * @param string[] $tlds Selected tlds
     *
     * @return $this
     */
    public function setTlds($tlds)
    {
        $this->container['tlds'] = $tlds;

        return $this;
    }

    /**
     * Gets onlinePresenceUrl
     *
     * @return string
     */
    public function getOnlinePresenceUrl()
    {
        return $this->container['onlinePresenceUrl'];
    }

    /**
     * Sets onlinePresenceUrl
     *
     * @param string $onlinePresenceUrl The primary online presence URL.
     *
     * @return $this
     */
    public function setOnlinePresenceUrl($onlinePresenceUrl)
    {
        $this->container['onlinePresenceUrl'] = $onlinePresenceUrl;

        return $this;
    }

    /**
     * Gets onlinePresenceTitle
     *
     * @return string
     */
    public function getOnlinePresenceTitle()
    {
        return $this->container['onlinePresenceTitle'];
    }

    /**
     * Sets onlinePresenceTitle
     *
     * @param string $onlinePresenceTitle The title of a website or a page.
     *
     * @return $this
     */
    public function setOnlinePresenceTitle($onlinePresenceTitle)
    {
        $this->container['onlinePresenceTitle'] = $onlinePresenceTitle;

        return $this;
    }

    /**
     * Gets relatedUrls
     *
     * @return string[]
     */
    public function getRelatedUrls()
    {
        return $this->container['relatedUrls'];
    }

    /**
     * Sets relatedUrls
     *
     * @param string[] $relatedUrls List of related URLs.
     *
     * @return $this
     */
    public function setRelatedUrls($relatedUrls)
    {
        $this->container['relatedUrls'] = $relatedUrls;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Business category.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets onlinePresenceDescription
     *
     * @return string
     */
    public function getOnlinePresenceDescription()
    {
        return $this->container['onlinePresenceDescription'];
    }

    /**
     * Sets onlinePresenceDescription
     *
     * @param string $onlinePresenceDescription Description of the page.
     *
     * @return $this
     */
    public function setOnlinePresenceDescription($onlinePresenceDescription)
    {
        $this->container['onlinePresenceDescription'] = $onlinePresenceDescription;

        return $this;
    }

    /**
     * Gets preferredName
     *
     * @return string
     */
    public function getPreferredName()
    {
        return $this->container['preferredName'];
    }

    /**
     * Sets preferredName
     *
     * @param string $preferredName Preferred name. This parameter value isused to create exact match suggestions inpreferred TLDs prioritizing them aboveother suggestions.
     *
     * @return $this
     */
    public function setPreferredName($preferredName)
    {
        $this->container['preferredName'] = $preferredName;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Location of the business.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets business
     *
     * @return bool
     */
    public function getBusiness()
    {
        return $this->container['business'];
    }

    /**
     * Sets business
     *
     * @param bool $business A flag indicating if the online presence is a business ornot.
     *
     * @return $this
     */
    public function setBusiness($business)
    {
        $this->container['business'] = $business;

        return $this;
    }

    /**
     * Gets shortName
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->container['shortName'];
    }

    /**
     * Sets shortName
     *
     * @param string $shortName Short name (nick name).
     *
     * @return $this
     */
    public function setShortName($shortName)
    {
        $this->container['shortName'] = $shortName;

        return $this;
    }

    /**
     * Gets fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
     * Sets fullName
     *
     * @param string $fullName Full name.
     *
     * @return $this
     */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName First name.
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets middleNames
     *
     * @return string[]
     */
    public function getMiddleNames()
    {
        return $this->container['middleNames'];
    }

    /**
     * Sets middleNames
     *
     * @param string[] $middleNames List of middle names.
     *
     * @return $this
     */
    public function setMiddleNames($middleNames)
    {
        $this->container['middleNames'] = $middleNames;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName Last name.
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets hometown
     *
     * @return string
     */
    public function getHometown()
    {
        return $this->container['hometown'];
    }

    /**
     * Sets hometown
     *
     * @param string $hometown Hometown.
     *
     * @return $this
     */
    public function setHometown($hometown)
    {
        $this->container['hometown'] = $hometown;

        return $this;
    }

    /**
     * Gets skills
     *
     * @return string[]
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     *
     * @param string[] $skills List of skills.
     *
     * @return $this
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

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


