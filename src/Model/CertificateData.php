<?php
/**
 * CertificateData
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
 * CertificateData Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CertificateData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CertificateData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'plain' => 'string',
        'name' => 'string',
        'subjectAlternativeNames' => '\Domainrobot\Model\SubjectAlternativeName[]',
        'histories' => '\Domainrobot\Model\CertificateHistory[]',
        'keySize' => 'int',
        'countryCode' => 'string',
        'challengePassword' => 'string',
        'state' => 'string',
        'city' => 'string',
        'organization' => 'string',
        'organizationUnit' => 'string',
        'email' => 'string',
        'product' => 'string',
        'authentication' => '\Domainrobot\Model\CertAuthentication[]',
        'algorithm' => '\Domainrobot\Model\CsrHashAlgorithmConstants',
        'signatureHashAlgorithm' => '\Domainrobot\Model\SignatureHashAlgorithmConstants',
        'certificate' => '\Domainrobot\Model\Certificate',
        'idn' => 'string',
        'checkCaa' => 'bool',
        'businessCase' => 'string',
        'ecCurve' => '\Domainrobot\Model\CsrHashAlgorithmConstants',
        'vmcLogo' => 'string',
        'vmcTrademarkRegistrationNumber' => 'string',
        'vmcTrademarkCountryOrRegion' => '\Domainrobot\Model\VmcTrademarkCountryOrRegion',
        'scope' => '\Domainrobot\Model\DcvValidationScope',
        'hasMultiValueDN' => 'bool',
        'validSignature' => 'bool',
        'includedSans' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'plain' => null,
        'name' => null,
        'subjectAlternativeNames' => null,
        'histories' => null,
        'keySize' => 'int32',
        'countryCode' => null,
        'challengePassword' => null,
        'state' => null,
        'city' => null,
        'organization' => null,
        'organizationUnit' => null,
        'email' => null,
        'product' => null,
        'authentication' => null,
        'algorithm' => null,
        'signatureHashAlgorithm' => null,
        'certificate' => null,
        'idn' => null,
        'checkCaa' => null,
        'businessCase' => null,
        'ecCurve' => null,
        'vmcLogo' => null,
        'vmcTrademarkRegistrationNumber' => null,
        'vmcTrademarkCountryOrRegion' => null,
        'scope' => null,
        'hasMultiValueDN' => null,
        'validSignature' => null,
        'includedSans' => null
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
        'plain' => 'plain',
        'name' => 'name',
        'subjectAlternativeNames' => 'subjectAlternativeNames',
        'histories' => 'histories',
        'keySize' => 'keySize',
        'countryCode' => 'countryCode',
        'challengePassword' => 'challengePassword',
        'state' => 'state',
        'city' => 'city',
        'organization' => 'organization',
        'organizationUnit' => 'organizationUnit',
        'email' => 'email',
        'product' => 'product',
        'authentication' => 'authentication',
        'algorithm' => 'algorithm',
        'signatureHashAlgorithm' => 'signatureHashAlgorithm',
        'certificate' => 'certificate',
        'idn' => 'idn',
        'checkCaa' => 'checkCaa',
        'businessCase' => 'businessCase',
        'ecCurve' => 'ecCurve',
        'vmcLogo' => 'vmcLogo',
        'vmcTrademarkRegistrationNumber' => 'vmcTrademarkRegistrationNumber',
        'vmcTrademarkCountryOrRegion' => 'vmcTrademarkCountryOrRegion',
        'scope' => 'scope',
        'hasMultiValueDN' => 'hasMultiValueDN',
        'validSignature' => 'validSignature',
        'includedSans' => 'includedSans'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plain' => 'setPlain',
        'name' => 'setName',
        'subjectAlternativeNames' => 'setSubjectAlternativeNames',
        'histories' => 'setHistories',
        'keySize' => 'setKeySize',
        'countryCode' => 'setCountryCode',
        'challengePassword' => 'setChallengePassword',
        'state' => 'setState',
        'city' => 'setCity',
        'organization' => 'setOrganization',
        'organizationUnit' => 'setOrganizationUnit',
        'email' => 'setEmail',
        'product' => 'setProduct',
        'authentication' => 'setAuthentication',
        'algorithm' => 'setAlgorithm',
        'signatureHashAlgorithm' => 'setSignatureHashAlgorithm',
        'certificate' => 'setCertificate',
        'idn' => 'setIdn',
        'checkCaa' => 'setCheckCaa',
        'businessCase' => 'setBusinessCase',
        'ecCurve' => 'setEcCurve',
        'vmcLogo' => 'setVmcLogo',
        'vmcTrademarkRegistrationNumber' => 'setVmcTrademarkRegistrationNumber',
        'vmcTrademarkCountryOrRegion' => 'setVmcTrademarkCountryOrRegion',
        'scope' => 'setScope',
        'hasMultiValueDN' => 'setHasMultiValueDN',
        'validSignature' => 'setValidSignature',
        'includedSans' => 'setIncludedSans'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plain' => 'getPlain',
        'name' => 'getName',
        'subjectAlternativeNames' => 'getSubjectAlternativeNames',
        'histories' => 'getHistories',
        'keySize' => 'getKeySize',
        'countryCode' => 'getCountryCode',
        'challengePassword' => 'getChallengePassword',
        'state' => 'getState',
        'city' => 'getCity',
        'organization' => 'getOrganization',
        'organizationUnit' => 'getOrganizationUnit',
        'email' => 'getEmail',
        'product' => 'getProduct',
        'authentication' => 'getAuthentication',
        'algorithm' => 'getAlgorithm',
        'signatureHashAlgorithm' => 'getSignatureHashAlgorithm',
        'certificate' => 'getCertificate',
        'idn' => 'getIdn',
        'checkCaa' => 'getCheckCaa',
        'businessCase' => 'getBusinessCase',
        'ecCurve' => 'getEcCurve',
        'vmcLogo' => 'getVmcLogo',
        'vmcTrademarkRegistrationNumber' => 'getVmcTrademarkRegistrationNumber',
        'vmcTrademarkCountryOrRegion' => 'getVmcTrademarkCountryOrRegion',
        'scope' => 'getScope',
        'hasMultiValueDN' => 'getHasMultiValueDN',
        'validSignature' => 'getValidSignature',
        'includedSans' => 'getIncludedSans'
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
        $this->container['plain'] = isset($data['plain']) ? $this->createData($data['plain'], 'plain')  : null;
        $this->container['name'] = isset($data['name']) ? $this->createData($data['name'], 'name')  : null;
        $this->container['subjectAlternativeNames'] = isset($data['subjectAlternativeNames']) ? $this->createData($data['subjectAlternativeNames'], 'subjectAlternativeNames')  : null;
        $this->container['histories'] = isset($data['histories']) ? $this->createData($data['histories'], 'histories')  : null;
        $this->container['keySize'] = isset($data['keySize']) ? $this->createData($data['keySize'], 'keySize')  : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $this->createData($data['countryCode'], 'countryCode')  : null;
        $this->container['challengePassword'] = isset($data['challengePassword']) ? $this->createData($data['challengePassword'], 'challengePassword')  : null;
        $this->container['state'] = isset($data['state']) ? $this->createData($data['state'], 'state')  : null;
        $this->container['city'] = isset($data['city']) ? $this->createData($data['city'], 'city')  : null;
        $this->container['organization'] = isset($data['organization']) ? $this->createData($data['organization'], 'organization')  : null;
        $this->container['organizationUnit'] = isset($data['organizationUnit']) ? $this->createData($data['organizationUnit'], 'organizationUnit')  : null;
        $this->container['email'] = isset($data['email']) ? $this->createData($data['email'], 'email')  : null;
        $this->container['product'] = isset($data['product']) ? $this->createData($data['product'], 'product')  : null;
        $this->container['authentication'] = isset($data['authentication']) ? $this->createData($data['authentication'], 'authentication')  : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $this->createData($data['algorithm'], 'algorithm')  : null;
        $this->container['signatureHashAlgorithm'] = isset($data['signatureHashAlgorithm']) ? $this->createData($data['signatureHashAlgorithm'], 'signatureHashAlgorithm')  : null;
        $this->container['certificate'] = isset($data['certificate']) ? $this->createData($data['certificate'], 'certificate')  : null;
        $this->container['idn'] = isset($data['idn']) ? $this->createData($data['idn'], 'idn')  : null;
        $this->container['checkCaa'] = isset($data['checkCaa']) ? $this->createData($data['checkCaa'], 'checkCaa')  : null;
        $this->container['businessCase'] = isset($data['businessCase']) ? $this->createData($data['businessCase'], 'businessCase')  : null;
        $this->container['ecCurve'] = isset($data['ecCurve']) ? $this->createData($data['ecCurve'], 'ecCurve')  : null;
        $this->container['vmcLogo'] = isset($data['vmcLogo']) ? $this->createData($data['vmcLogo'], 'vmcLogo')  : null;
        $this->container['vmcTrademarkRegistrationNumber'] = isset($data['vmcTrademarkRegistrationNumber']) ? $this->createData($data['vmcTrademarkRegistrationNumber'], 'vmcTrademarkRegistrationNumber')  : null;
        $this->container['vmcTrademarkCountryOrRegion'] = isset($data['vmcTrademarkCountryOrRegion']) ? $this->createData($data['vmcTrademarkCountryOrRegion'], 'vmcTrademarkCountryOrRegion')  : null;
        $this->container['scope'] = isset($data['scope']) ? $this->createData($data['scope'], 'scope')  : null;
        $this->container['hasMultiValueDN'] = isset($data['hasMultiValueDN']) ? $this->createData($data['hasMultiValueDN'], 'hasMultiValueDN')  : null;
        $this->container['validSignature'] = isset($data['validSignature']) ? $this->createData($data['validSignature'], 'validSignature')  : null;
        $this->container['includedSans'] = isset($data['includedSans']) ? $this->createData($data['includedSans'], 'includedSans')  : null;
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
     * @param string $plain The CSR key as a string.
     *
     * @return $this
     */
    public function setPlain($plain)
    {
        $this->container['plain'] = $plain;

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
     * @param string $name The name of the certificate which is contained within the CSR key.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subjectAlternativeNames
     *
     * @return \Domainrobot\Model\SubjectAlternativeName[]
     */
    public function getSubjectAlternativeNames()
    {
        return $this->container['subjectAlternativeNames'];
    }

    /**
     * Sets subjectAlternativeNames
     *
     * @param \Domainrobot\Model\SubjectAlternativeName[] $subjectAlternativeNames The SubjectAlternativeNames contained within the CSR key.
     *
     * @return $this
     */
    public function setSubjectAlternativeNames($subjectAlternativeNames)
    {
        $this->container['subjectAlternativeNames'] = $subjectAlternativeNames;

        return $this;
    }

    /**
     * Gets histories
     *
     * @return \Domainrobot\Model\CertificateHistory[]
     */
    public function getHistories()
    {
        return $this->container['histories'];
    }

    /**
     * Sets histories
     *
     * @param \Domainrobot\Model\CertificateHistory[] $histories The certificate history (old version).
     *
     * @return $this
     */
    public function setHistories($histories)
    {
        $this->container['histories'] = $histories;

        return $this;
    }

    /**
     * Gets keySize
     *
     * @return int
     */
    public function getKeySize()
    {
        return $this->container['keySize'];
    }

    /**
     * Sets keySize
     *
     * @param int $keySize The key length of the CSR key.
     *
     * @return $this
     */
    public function setKeySize($keySize)
    {
        $this->container['keySize'] = $keySize;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode The country code which is contained within the CSR key.
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets challengePassword
     *
     * @return string
     */
    public function getChallengePassword()
    {
        return $this->container['challengePassword'];
    }

    /**
     * Sets challengePassword
     *
     * @param string $challengePassword The password defined in the csr.
     *
     * @return $this
     */
    public function setChallengePassword($challengePassword)
    {
        $this->container['challengePassword'] = $challengePassword;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state defined in the csr.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city contained within the CSR key.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization The organisation contained within the CSR key.
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets organizationUnit
     *
     * @return string
     */
    public function getOrganizationUnit()
    {
        return $this->container['organizationUnit'];
    }

    /**
     * Sets organizationUnit
     *
     * @param string $organizationUnit The organisation contained within the CSR key.
     *
     * @return $this
     */
    public function setOrganizationUnit($organizationUnit)
    {
        $this->container['organizationUnit'] = $organizationUnit;

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
     * @param string $email The email address contained within the CSR key.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product The SSL product.
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets authentication
     *
     * @return \Domainrobot\Model\CertAuthentication[]
     */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
     * Sets authentication
     *
     * @param \Domainrobot\Model\CertAuthentication[] $authentication The generated authentication data.
     *
     * @return $this
     */
    public function setAuthentication($authentication)
    {
        $this->container['authentication'] = $authentication;

        return $this;
    }

    /**
     * Gets algorithm
     *
     * @return \Domainrobot\Model\CsrHashAlgorithmConstants
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     *
     * @param \Domainrobot\Model\CsrHashAlgorithmConstants $algorithm The algorithm used in the CSR key.
     *
     * @return $this
     */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets signatureHashAlgorithm
     *
     * @return \Domainrobot\Model\SignatureHashAlgorithmConstants
     */
    public function getSignatureHashAlgorithm()
    {
        return $this->container['signatureHashAlgorithm'];
    }

    /**
     * Sets signatureHashAlgorithm
     *
     * @param \Domainrobot\Model\SignatureHashAlgorithmConstants $signatureHashAlgorithm The hash algorithm which was used for the CSR.
     *
     * @return $this
     */
    public function setSignatureHashAlgorithm($signatureHashAlgorithm)
    {
        $this->container['signatureHashAlgorithm'] = $signatureHashAlgorithm;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return \Domainrobot\Model\Certificate
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param \Domainrobot\Model\Certificate $certificate The certificate.
     *
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets idn
     *
     * @return string
     */
    public function getIdn()
    {
        return $this->container['idn'];
    }

    /**
     * Sets idn
     *
     * @param string $idn The common name written in punycode format.
     *
     * @return $this
     */
    public function setIdn($idn)
    {
        $this->container['idn'] = $idn;

        return $this;
    }

    /**
     * Gets checkCaa
     *
     * @return bool
     */
    public function getCheckCaa()
    {
        return $this->container['checkCaa'];
    }

    /**
     * Sets checkCaa
     *
     * @param bool $checkCaa Activates the CAA record check. false = off true = on Default value = false
     *
     * @return $this
     */
    public function setCheckCaa($checkCaa)
    {
        $this->container['checkCaa'] = $checkCaa;

        return $this;
    }

    /**
     * Gets businessCase
     *
     * @return string
     */
    public function getBusinessCase()
    {
        return $this->container['businessCase'];
    }

    /**
     * Sets businessCase
     *
     * @param string $businessCase Describes the business case (CREATE, RENEW, REISSUE, DELETE) for which preparation is to be performed.
     *
     * @return $this
     */
    public function setBusinessCase($businessCase)
    {
        $this->container['businessCase'] = $businessCase;

        return $this;
    }

    /**
     * Gets ecCurve
     *
     * @return \Domainrobot\Model\CsrHashAlgorithmConstants
     */
    public function getEcCurve()
    {
        return $this->container['ecCurve'];
    }

    /**
     * Sets ecCurve
     *
     * @param \Domainrobot\Model\CsrHashAlgorithmConstants $ecCurve The ec curve of the public key.
     *
     * @return $this
     */
    public function setEcCurve($ecCurve)
    {
        $this->container['ecCurve'] = $ecCurve;

        return $this;
    }

    /**
     * Gets vmcLogo
     *
     * @return string
     */
    public function getVmcLogo()
    {
        return $this->container['vmcLogo'];
    }

    /**
     * Sets vmcLogo
     *
     * @param string $vmcLogo The base64 encoded SVG logo
     *
     * @return $this
     */
    public function setVmcLogo($vmcLogo)
    {
        $this->container['vmcLogo'] = $vmcLogo;

        return $this;
    }

    /**
     * Gets vmcTrademarkRegistrationNumber
     *
     * @return string
     */
    public function getVmcTrademarkRegistrationNumber()
    {
        return $this->container['vmcTrademarkRegistrationNumber'];
    }

    /**
     * Sets vmcTrademarkRegistrationNumber
     *
     * @param string $vmcTrademarkRegistrationNumber The trademark registration number
     *
     * @return $this
     */
    public function setVmcTrademarkRegistrationNumber($vmcTrademarkRegistrationNumber)
    {
        $this->container['vmcTrademarkRegistrationNumber'] = $vmcTrademarkRegistrationNumber;

        return $this;
    }

    /**
     * Gets vmcTrademarkCountryOrRegion
     *
     * @return \Domainrobot\Model\VmcTrademarkCountryOrRegion
     */
    public function getVmcTrademarkCountryOrRegion()
    {
        return $this->container['vmcTrademarkCountryOrRegion'];
    }

    /**
     * Sets vmcTrademarkCountryOrRegion
     *
     * @param \Domainrobot\Model\VmcTrademarkCountryOrRegion $vmcTrademarkCountryOrRegion Two-letter code for the country or region where the logo is trademarked
     *
     * @return $this
     */
    public function setVmcTrademarkCountryOrRegion($vmcTrademarkCountryOrRegion)
    {
        $this->container['vmcTrademarkCountryOrRegion'] = $vmcTrademarkCountryOrRegion;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return \Domainrobot\Model\DcvValidationScope
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \Domainrobot\Model\DcvValidationScope $scope The DCV scope to use for generating the dcv data
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets hasMultiValueDN
     *
     * @return bool
     */
    public function getHasMultiValueDN()
    {
        return $this->container['hasMultiValueDN'];
    }

    /**
     * Sets hasMultiValueDN
     *
     * @param bool $hasMultiValueDN Describes whether the CSR contains multi value DN data
     *
     * @return $this
     */
    public function setHasMultiValueDN($hasMultiValueDN)
    {
        $this->container['hasMultiValueDN'] = $hasMultiValueDN;

        return $this;
    }

    /**
     * Gets validSignature
     *
     * @return bool
     */
    public function getValidSignature()
    {
        return $this->container['validSignature'];
    }

    /**
     * Sets validSignature
     *
     * @param bool $validSignature Describes whether the CSR contains a valid signature or not
     *
     * @return $this
     */
    public function setValidSignature($validSignature)
    {
        $this->container['validSignature'] = $validSignature;

        return $this;
    }

    /**
     * Gets includedSans
     *
     * @return string[]
     */
    public function getIncludedSans()
    {
        return $this->container['includedSans'];
    }

    /**
     * Sets includedSans
     *
     * @param string[] $includedSans Included subject alternativ names for the current order
     *
     * @return $this
     */
    public function setIncludedSans($includedSans)
    {
        $this->container['includedSans'] = $includedSans;

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


