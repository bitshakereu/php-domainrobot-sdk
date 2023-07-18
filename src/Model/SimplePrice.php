<?php
/**
 * SimplePrice
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
 * SimplePrice Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SimplePrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SimplePrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'double',
        'netAmount' => 'double',
        'vatAmount' => 'double',
        'currency' => 'string',
        'price' => '\Domainrobot\Model\ExchangedPrice',
        'businessCase' => 'string',
        'period' => '\Domainrobot\Model\TimePeriod',
        'customs' => '\Domainrobot\Model\Custom[]',
        'view' => '\Domainrobot\Model\CurrencyRate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'double',
        'netAmount' => 'double',
        'vatAmount' => 'double',
        'currency' => null,
        'price' => null,
        'businessCase' => null,
        'period' => null,
        'customs' => null,
        'view' => null
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
        'amount' => 'amount',
        'netAmount' => 'netAmount',
        'vatAmount' => 'vatAmount',
        'currency' => 'currency',
        'price' => 'price',
        'businessCase' => 'businessCase',
        'period' => 'period',
        'customs' => 'customs',
        'view' => 'view'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'netAmount' => 'setNetAmount',
        'vatAmount' => 'setVatAmount',
        'currency' => 'setCurrency',
        'price' => 'setPrice',
        'businessCase' => 'setBusinessCase',
        'period' => 'setPeriod',
        'customs' => 'setCustoms',
        'view' => 'setView'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'netAmount' => 'getNetAmount',
        'vatAmount' => 'getVatAmount',
        'currency' => 'getCurrency',
        'price' => 'getPrice',
        'businessCase' => 'getBusinessCase',
        'period' => 'getPeriod',
        'customs' => 'getCustoms',
        'view' => 'getView'
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
        $this->container['amount'] = isset($data['amount']) ? $this->createData($data['amount'], 'amount')  : null;
        $this->container['netAmount'] = isset($data['netAmount']) ? $this->createData($data['netAmount'], 'netAmount')  : null;
        $this->container['vatAmount'] = isset($data['vatAmount']) ? $this->createData($data['vatAmount'], 'vatAmount')  : null;
        $this->container['currency'] = isset($data['currency']) ? $this->createData($data['currency'], 'currency')  : null;
        $this->container['price'] = isset($data['price']) ? $this->createData($data['price'], 'price')  : null;
        $this->container['businessCase'] = isset($data['businessCase']) ? $this->createData($data['businessCase'], 'businessCase')  : null;
        $this->container['period'] = isset($data['period']) ? $this->createData($data['period'], 'period')  : null;
        $this->container['customs'] = isset($data['customs']) ? $this->createData($data['customs'], 'customs')  : null;
        $this->container['view'] = isset($data['view']) ? $this->createData($data['view'], 'view')  : null;
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
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount The gross amount of the calculation
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets netAmount
     *
     * @return double
     */
    public function getNetAmount()
    {
        return $this->container['netAmount'];
    }

    /**
     * Sets netAmount
     *
     * @param double $netAmount The net amount of the calculation
     *
     * @return $this
     */
    public function setNetAmount($netAmount)
    {
        $this->container['netAmount'] = $netAmount;

        return $this;
    }

    /**
     * Gets vatAmount
     *
     * @return double
     */
    public function getVatAmount()
    {
        return $this->container['vatAmount'];
    }

    /**
     * Sets vatAmount
     *
     * @param double $vatAmount The calculated vat amount
     *
     * @return $this
     */
    public function setVatAmount($vatAmount)
    {
        $this->container['vatAmount'] = $vatAmount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The billing currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Domainrobot\Model\ExchangedPrice
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Domainrobot\Model\ExchangedPrice $price The price. Note the currency can be differ from the billing currency
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param string $businessCase The business case
     *
     * @return $this
     */
    public function setBusinessCase($businessCase)
    {
        $this->container['businessCase'] = $businessCase;

        return $this;
    }

    /**
     * Gets period
     *
     * @return \Domainrobot\Model\TimePeriod
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param \Domainrobot\Model\TimePeriod $period The period for the price calculation
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets customs
     *
     * @return \Domainrobot\Model\Custom[]
     */
    public function getCustoms()
    {
        return $this->container['customs'];
    }

    /**
     * Sets customs
     *
     * @param \Domainrobot\Model\Custom[] $customs Custom values,such as price class
     *
     * @return $this
     */
    public function setCustoms($customs)
    {
        $this->container['customs'] = $customs;

        return $this;
    }

    /**
     * Gets view
     *
     * @return \Domainrobot\Model\CurrencyRate
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     *
     * @param \Domainrobot\Model\CurrencyRate $view The currency rate for the view currency
     *
     * @return $this
     */
    public function setView($view)
    {
        $this->container['view'] = $view;

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


