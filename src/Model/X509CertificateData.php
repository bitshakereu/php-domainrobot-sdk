<?php
/**
 * X509CertificateData
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
 * X509CertificateData Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class X509CertificateData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'X509CertificateData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cn' => 'string',
        'serialNumber' => 'string',
        'issuer' => '\Domainrobot\Model\X509CertificateIssuer',
        'subject' => '\Domainrobot\Model\X509CertificateSubject',
        'validity' => '\Domainrobot\Model\X509CertificateValidity',
        'subjectAlternativNames' => 'string[]',
        'plain' => 'string',
        'signatureAlgorithm' => 'string',
        'sha1Thumbprint' => 'string',
        'sha256Thumbprint' => 'string',
        'md5Thumbprint' => 'string',
        'publicKeyData' => '\Domainrobot\Model\X509CertificatePublicKeyData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cn' => null,
        'serialNumber' => null,
        'issuer' => null,
        'subject' => null,
        'validity' => null,
        'subjectAlternativNames' => null,
        'plain' => null,
        'signatureAlgorithm' => null,
        'sha1Thumbprint' => null,
        'sha256Thumbprint' => null,
        'md5Thumbprint' => null,
        'publicKeyData' => null
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
        'cn' => 'cn',
        'serialNumber' => 'serialNumber',
        'issuer' => 'issuer',
        'subject' => 'subject',
        'validity' => 'validity',
        'subjectAlternativNames' => 'subjectAlternativNames',
        'plain' => 'plain',
        'signatureAlgorithm' => 'signatureAlgorithm',
        'sha1Thumbprint' => 'sha1Thumbprint',
        'sha256Thumbprint' => 'sha256Thumbprint',
        'md5Thumbprint' => 'md5Thumbprint',
        'publicKeyData' => 'publicKeyData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cn' => 'setCn',
        'serialNumber' => 'setSerialNumber',
        'issuer' => 'setIssuer',
        'subject' => 'setSubject',
        'validity' => 'setValidity',
        'subjectAlternativNames' => 'setSubjectAlternativNames',
        'plain' => 'setPlain',
        'signatureAlgorithm' => 'setSignatureAlgorithm',
        'sha1Thumbprint' => 'setSha1Thumbprint',
        'sha256Thumbprint' => 'setSha256Thumbprint',
        'md5Thumbprint' => 'setMd5Thumbprint',
        'publicKeyData' => 'setPublicKeyData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cn' => 'getCn',
        'serialNumber' => 'getSerialNumber',
        'issuer' => 'getIssuer',
        'subject' => 'getSubject',
        'validity' => 'getValidity',
        'subjectAlternativNames' => 'getSubjectAlternativNames',
        'plain' => 'getPlain',
        'signatureAlgorithm' => 'getSignatureAlgorithm',
        'sha1Thumbprint' => 'getSha1Thumbprint',
        'sha256Thumbprint' => 'getSha256Thumbprint',
        'md5Thumbprint' => 'getMd5Thumbprint',
        'publicKeyData' => 'getPublicKeyData'
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
        $this->container['cn'] = isset($data['cn']) ? $this->createData($data['cn'], 'cn')  : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $this->createData($data['serialNumber'], 'serialNumber')  : null;
        $this->container['issuer'] = isset($data['issuer']) ? $this->createData($data['issuer'], 'issuer')  : null;
        $this->container['subject'] = isset($data['subject']) ? $this->createData($data['subject'], 'subject')  : null;
        $this->container['validity'] = isset($data['validity']) ? $this->createData($data['validity'], 'validity')  : null;
        $this->container['subjectAlternativNames'] = isset($data['subjectAlternativNames']) ? $this->createData($data['subjectAlternativNames'], 'subjectAlternativNames')  : null;
        $this->container['plain'] = isset($data['plain']) ? $this->createData($data['plain'], 'plain')  : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $this->createData($data['signatureAlgorithm'], 'signatureAlgorithm')  : null;
        $this->container['sha1Thumbprint'] = isset($data['sha1Thumbprint']) ? $this->createData($data['sha1Thumbprint'], 'sha1Thumbprint')  : null;
        $this->container['sha256Thumbprint'] = isset($data['sha256Thumbprint']) ? $this->createData($data['sha256Thumbprint'], 'sha256Thumbprint')  : null;
        $this->container['md5Thumbprint'] = isset($data['md5Thumbprint']) ? $this->createData($data['md5Thumbprint'], 'md5Thumbprint')  : null;
        $this->container['publicKeyData'] = isset($data['publicKeyData']) ? $this->createData($data['publicKeyData'], 'publicKeyData')  : null;
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
     * Gets cn
     *
     * @return string
     */
    public function getCn()
    {
        return $this->container['cn'];
    }

    /**
     * Sets cn
     *
     * @param string $cn The common name
     *
     * @return $this
     */
    public function setCn($cn)
    {
        $this->container['cn'] = $cn;

        return $this;
    }

    /**
     * Gets serialNumber
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
     * Sets serialNumber
     *
     * @param string $serialNumber The serial number of the certificate
     *
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return \Domainrobot\Model\X509CertificateIssuer
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param \Domainrobot\Model\X509CertificateIssuer $issuer The issuer information of the certificate
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return \Domainrobot\Model\X509CertificateSubject
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \Domainrobot\Model\X509CertificateSubject $subject The subject information of the certificate
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets validity
     *
     * @return \Domainrobot\Model\X509CertificateValidity
     */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
     * Sets validity
     *
     * @param \Domainrobot\Model\X509CertificateValidity $validity The validity of the certificate
     *
     * @return $this
     */
    public function setValidity($validity)
    {
        $this->container['validity'] = $validity;

        return $this;
    }

    /**
     * Gets subjectAlternativNames
     *
     * @return string[]
     */
    public function getSubjectAlternativNames()
    {
        return $this->container['subjectAlternativNames'];
    }

    /**
     * Sets subjectAlternativNames
     *
     * @param string[] $subjectAlternativNames The subject alternativ names covered by this certificate
     *
     * @return $this
     */
    public function setSubjectAlternativNames($subjectAlternativNames)
    {
        $this->container['subjectAlternativNames'] = $subjectAlternativNames;

        return $this;
    }

    /**
     * Gets plain
     *
     * @return string
     */
    public function getPlain()
    {
        return $this->container['plain'];
    }

    /**
     * Sets plain
     *
     * @param string $plain The plain certificate pem string, that was used to decode.
     *
     * @return $this
     */
    public function setPlain($plain)
    {
        $this->container['plain'] = $plain;

        return $this;
    }

    /**
     * Gets signatureAlgorithm
     *
     * @return string
     */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
     * Sets signatureAlgorithm
     *
     * @param string $signatureAlgorithm The signatureAlgorithm of the certificate.
     *
     * @return $this
     */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;

        return $this;
    }

    /**
     * Gets sha1Thumbprint
     *
     * @return string
     */
    public function getSha1Thumbprint()
    {
        return $this->container['sha1Thumbprint'];
    }

    /**
     * Sets sha1Thumbprint
     *
     * @param string $sha1Thumbprint The SHA-1 thumbprint for the certificate.
     *
     * @return $this
     */
    public function setSha1Thumbprint($sha1Thumbprint)
    {
        $this->container['sha1Thumbprint'] = $sha1Thumbprint;

        return $this;
    }

    /**
     * Gets sha256Thumbprint
     *
     * @return string
     */
    public function getSha256Thumbprint()
    {
        return $this->container['sha256Thumbprint'];
    }

    /**
     * Sets sha256Thumbprint
     *
     * @param string $sha256Thumbprint The SHA-256 thumbprint for the certificate.
     *
     * @return $this
     */
    public function setSha256Thumbprint($sha256Thumbprint)
    {
        $this->container['sha256Thumbprint'] = $sha256Thumbprint;

        return $this;
    }

    /**
     * Gets md5Thumbprint
     *
     * @return string
     */
    public function getMd5Thumbprint()
    {
        return $this->container['md5Thumbprint'];
    }

    /**
     * Sets md5Thumbprint
     *
     * @param string $md5Thumbprint The MD5 thumbprint for the certificate.
     *
     * @return $this
     */
    public function setMd5Thumbprint($md5Thumbprint)
    {
        $this->container['md5Thumbprint'] = $md5Thumbprint;

        return $this;
    }

    /**
     * Gets publicKeyData
     *
     * @return \Domainrobot\Model\X509CertificatePublicKeyData
     */
    public function getPublicKeyData()
    {
        return $this->container['publicKeyData'];
    }

    /**
     * Sets publicKeyData
     *
     * @param \Domainrobot\Model\X509CertificatePublicKeyData $publicKeyData The public key data from the certificate.
     *
     * @return $this
     */
    public function setPublicKeyData($publicKeyData)
    {
        $this->container['publicKeyData'] = $publicKeyData;

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


