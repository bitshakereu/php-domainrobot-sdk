<?php
/**
 * ZoneBasePatchRequest
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
 * ZoneBasePatchRequest Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ZoneBasePatchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ZoneBasePatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'origin' => 'string',
        'idn' => 'string',
        'soa' => '\Domainrobot\Model\Soa',
        'dnssec' => 'bool',
        'nameServerGroup' => 'string',
        'allowTransfer' => 'bool',
        'owner' => '\Domainrobot\Model\BasicUser',
        'updater' => '\Domainrobot\Model\BasicUser',
        'logId' => 'int',
        'comment' => 'string',
        'domainsafe' => 'bool',
        'source' => 'string',
        'sourceVirtualHostname' => 'string',
        'purgeDate' => '\DateTime',
        'purgeType' => '\Domainrobot\Model\PurgeTypes',
        'date' => '\DateTime',
        'zoneGrantsAdd' => 'string[]',
        'zoneGrantsRem' => 'string[]',
        'modifiers' => '\Domainrobot\Model\Modifier[]',
        'nameServers' => '\Domainrobot\Model\NameServer[]',
        'main' => '\Domainrobot\Model\MainIp',
        'wwwInclude' => 'bool',
        'virtualNameServer' => 'string',
        'freeText' => 'string[]',
        'action' => '\Domainrobot\Model\NameserverActionConstants',
        'grants' => 'string[]',
        'resourceRecords' => '\Domainrobot\Model\ResourceRecord[]',
        'roid' => 'int',
        'resourceRecordsAdd' => '\Domainrobot\Model\ResourceRecord[]',
        'resourceRecordsRem' => '\Domainrobot\Model\ResourceRecord[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'origin' => null,
        'idn' => null,
        'soa' => null,
        'dnssec' => null,
        'nameServerGroup' => null,
        'allowTransfer' => null,
        'owner' => null,
        'updater' => null,
        'logId' => 'int64',
        'comment' => null,
        'domainsafe' => null,
        'source' => null,
        'sourceVirtualHostname' => null,
        'purgeDate' => 'date-time',
        'purgeType' => null,
        'date' => 'date-time',
        'zoneGrantsAdd' => null,
        'zoneGrantsRem' => null,
        'modifiers' => null,
        'nameServers' => null,
        'main' => null,
        'wwwInclude' => null,
        'virtualNameServer' => null,
        'freeText' => null,
        'action' => null,
        'grants' => null,
        'resourceRecords' => null,
        'roid' => 'int32',
        'resourceRecordsAdd' => null,
        'resourceRecordsRem' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'origin' => 'origin',
        'idn' => 'idn',
        'soa' => 'soa',
        'dnssec' => 'dnssec',
        'nameServerGroup' => 'nameServerGroup',
        'allowTransfer' => 'allowTransfer',
        'owner' => 'owner',
        'updater' => 'updater',
        'logId' => 'logId',
        'comment' => 'comment',
        'domainsafe' => 'domainsafe',
        'source' => 'source',
        'sourceVirtualHostname' => 'sourceVirtualHostname',
        'purgeDate' => 'purgeDate',
        'purgeType' => 'purgeType',
        'date' => 'date',
        'zoneGrantsAdd' => 'zoneGrantsAdd',
        'zoneGrantsRem' => 'zoneGrantsRem',
        'modifiers' => 'modifiers',
        'nameServers' => 'nameServers',
        'main' => 'main',
        'wwwInclude' => 'wwwInclude',
        'virtualNameServer' => 'virtualNameServer',
        'freeText' => 'freeText',
        'action' => 'action',
        'grants' => 'grants',
        'resourceRecords' => 'resourceRecords',
        'roid' => 'roid',
        'resourceRecordsAdd' => 'resourceRecordsAdd',
        'resourceRecordsRem' => 'resourceRecordsRem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'origin' => 'setOrigin',
        'idn' => 'setIdn',
        'soa' => 'setSoa',
        'dnssec' => 'setDnssec',
        'nameServerGroup' => 'setNameServerGroup',
        'allowTransfer' => 'setAllowTransfer',
        'owner' => 'setOwner',
        'updater' => 'setUpdater',
        'logId' => 'setLogId',
        'comment' => 'setComment',
        'domainsafe' => 'setDomainsafe',
        'source' => 'setSource',
        'sourceVirtualHostname' => 'setSourceVirtualHostname',
        'purgeDate' => 'setPurgeDate',
        'purgeType' => 'setPurgeType',
        'date' => 'setDate',
        'zoneGrantsAdd' => 'setZoneGrantsAdd',
        'zoneGrantsRem' => 'setZoneGrantsRem',
        'modifiers' => 'setModifiers',
        'nameServers' => 'setNameServers',
        'main' => 'setMain',
        'wwwInclude' => 'setWwwInclude',
        'virtualNameServer' => 'setVirtualNameServer',
        'freeText' => 'setFreeText',
        'action' => 'setAction',
        'grants' => 'setGrants',
        'resourceRecords' => 'setResourceRecords',
        'roid' => 'setRoid',
        'resourceRecordsAdd' => 'setResourceRecordsAdd',
        'resourceRecordsRem' => 'setResourceRecordsRem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'origin' => 'getOrigin',
        'idn' => 'getIdn',
        'soa' => 'getSoa',
        'dnssec' => 'getDnssec',
        'nameServerGroup' => 'getNameServerGroup',
        'allowTransfer' => 'getAllowTransfer',
        'owner' => 'getOwner',
        'updater' => 'getUpdater',
        'logId' => 'getLogId',
        'comment' => 'getComment',
        'domainsafe' => 'getDomainsafe',
        'source' => 'getSource',
        'sourceVirtualHostname' => 'getSourceVirtualHostname',
        'purgeDate' => 'getPurgeDate',
        'purgeType' => 'getPurgeType',
        'date' => 'getDate',
        'zoneGrantsAdd' => 'getZoneGrantsAdd',
        'zoneGrantsRem' => 'getZoneGrantsRem',
        'modifiers' => 'getModifiers',
        'nameServers' => 'getNameServers',
        'main' => 'getMain',
        'wwwInclude' => 'getWwwInclude',
        'virtualNameServer' => 'getVirtualNameServer',
        'freeText' => 'getFreeText',
        'action' => 'getAction',
        'grants' => 'getGrants',
        'resourceRecords' => 'getResourceRecords',
        'roid' => 'getRoid',
        'resourceRecordsAdd' => 'getResourceRecordsAdd',
        'resourceRecordsRem' => 'getResourceRecordsRem'
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
        $this->container['created'] = isset($data['created']) ? $this->createData($data['created'], 'created')  : null;
        $this->container['updated'] = isset($data['updated']) ? $this->createData($data['updated'], 'updated')  : null;
        $this->container['origin'] = isset($data['origin']) ? $this->createData($data['origin'], 'origin')  : null;
        $this->container['idn'] = isset($data['idn']) ? $this->createData($data['idn'], 'idn')  : null;
        $this->container['soa'] = isset($data['soa']) ? $this->createData($data['soa'], 'soa')  : null;
        $this->container['dnssec'] = isset($data['dnssec']) ? $this->createData($data['dnssec'], 'dnssec')  : null;
        $this->container['nameServerGroup'] = isset($data['nameServerGroup']) ? $this->createData($data['nameServerGroup'], 'nameServerGroup')  : null;
        $this->container['allowTransfer'] = isset($data['allowTransfer']) ? $this->createData($data['allowTransfer'], 'allowTransfer')  : null;
        $this->container['owner'] = isset($data['owner']) ? $this->createData($data['owner'], 'owner')  : null;
        $this->container['updater'] = isset($data['updater']) ? $this->createData($data['updater'], 'updater')  : null;
        $this->container['logId'] = isset($data['logId']) ? $this->createData($data['logId'], 'logId')  : null;
        $this->container['comment'] = isset($data['comment']) ? $this->createData($data['comment'], 'comment')  : null;
        $this->container['domainsafe'] = isset($data['domainsafe']) ? $this->createData($data['domainsafe'], 'domainsafe')  : null;
        $this->container['source'] = isset($data['source']) ? $this->createData($data['source'], 'source')  : null;
        $this->container['sourceVirtualHostname'] = isset($data['sourceVirtualHostname']) ? $this->createData($data['sourceVirtualHostname'], 'sourceVirtualHostname')  : null;
        $this->container['purgeDate'] = isset($data['purgeDate']) ? $this->createData($data['purgeDate'], 'purgeDate')  : null;
        $this->container['purgeType'] = isset($data['purgeType']) ? $this->createData($data['purgeType'], 'purgeType')  : null;
        $this->container['date'] = isset($data['date']) ? $this->createData($data['date'], 'date')  : null;
        $this->container['zoneGrantsAdd'] = isset($data['zoneGrantsAdd']) ? $this->createData($data['zoneGrantsAdd'], 'zoneGrantsAdd')  : null;
        $this->container['zoneGrantsRem'] = isset($data['zoneGrantsRem']) ? $this->createData($data['zoneGrantsRem'], 'zoneGrantsRem')  : null;
        $this->container['modifiers'] = isset($data['modifiers']) ? $this->createData($data['modifiers'], 'modifiers')  : null;
        $this->container['nameServers'] = isset($data['nameServers']) ? $this->createData($data['nameServers'], 'nameServers')  : null;
        $this->container['main'] = isset($data['main']) ? $this->createData($data['main'], 'main')  : null;
        $this->container['wwwInclude'] = isset($data['wwwInclude']) ? $this->createData($data['wwwInclude'], 'wwwInclude')  : null;
        $this->container['virtualNameServer'] = isset($data['virtualNameServer']) ? $this->createData($data['virtualNameServer'], 'virtualNameServer')  : null;
        $this->container['freeText'] = isset($data['freeText']) ? $this->createData($data['freeText'], 'freeText')  : null;
        $this->container['action'] = isset($data['action']) ? $this->createData($data['action'], 'action')  : null;
        $this->container['grants'] = isset($data['grants']) ? $this->createData($data['grants'], 'grants')  : null;
        $this->container['resourceRecords'] = isset($data['resourceRecords']) ? $this->createData($data['resourceRecords'], 'resourceRecords')  : null;
        $this->container['roid'] = isset($data['roid']) ? $this->createData($data['roid'], 'roid')  : null;
        $this->container['resourceRecordsAdd'] = isset($data['resourceRecordsAdd']) ? $this->createData($data['resourceRecordsAdd'], 'resourceRecordsAdd')  : null;
        $this->container['resourceRecordsRem'] = isset($data['resourceRecordsRem']) ? $this->createData($data['resourceRecordsRem'], 'resourceRecordsRem')  : null;
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

        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
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
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin Zone name
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

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
     * @param string $idn Punycode version of the origin.
     *
     * @return $this
     */
    public function setIdn($idn)
    {
        $this->container['idn'] = $idn;

        return $this;
    }

    /**
     * Gets soa
     *
     * @return \Domainrobot\Model\Soa
     */
    public function getSoa()
    {
        return $this->container['soa'];
    }

    /**
     * Sets soa
     *
     * @param \Domainrobot\Model\Soa $soa Only for ns_action: \"primary\"  and \"complete\"
     *
     * @return $this
     */
    public function setSoa($soa)
    {
        $this->container['soa'] = $soa;

        return $this;
    }

    /**
     * Gets dnssec
     *
     * @return bool
     */
    public function getDnssec()
    {
        return $this->container['dnssec'];
    }

    /**
     * Sets dnssec
     *
     * @param bool $dnssec If true dnssec signing for the zone is active.
     *
     * @return $this
     */
    public function setDnssec($dnssec)
    {
        $this->container['dnssec'] = $dnssec;

        return $this;
    }

    /**
     * Gets nameServerGroup
     *
     * @return string
     */
    public function getNameServerGroup()
    {
        return $this->container['nameServerGroup'];
    }

    /**
     * Sets nameServerGroup
     *
     * @param string $nameServerGroup Name of the nameserver group.
     *
     * @return $this
     */
    public function setNameServerGroup($nameServerGroup)
    {
        $this->container['nameServerGroup'] = $nameServerGroup;

        return $this;
    }

    /**
     * Gets allowTransfer
     *
     * @return bool
     */
    public function getAllowTransfer()
    {
        return $this->container['allowTransfer'];
    }

    /**
     * Sets allowTransfer
     *
     * @param bool $allowTransfer Allow zone transfer for the defined zone grants
     *
     * @return $this
     */
    public function setAllowTransfer($allowTransfer)
    {
        $this->container['allowTransfer'] = $allowTransfer;

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
     * @param \Domainrobot\Model\BasicUser $owner Owner of the zone object
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
     * @param \Domainrobot\Model\BasicUser $updater User who last updated the zone.
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets logId
     *
     * @return int
     */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
     * Sets logId
     *
     * @param int $logId The id of the related log-entry.
     *
     * @return $this
     */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;

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
     * @param string $comment A custom field. Can only be updated via PUT /zone/{name}/{nameserver}/_comment. Requires appropriate ACLs.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets domainsafe
     *
     * @return bool
     */
    public function getDomainsafe()
    {
        return $this->container['domainsafe'];
    }

    /**
     * Sets domainsafe
     *
     * @param bool $domainsafe Denotes of the zone is present in the DomainSafe service.
     *
     * @return $this
     */
    public function setDomainsafe($domainsafe)
    {
        $this->container['domainsafe'] = $domainsafe;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Name server from which a zone is copied via AXFR (with zone_import).
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets sourceVirtualHostname
     *
     * @return string
     */
    public function getSourceVirtualHostname()
    {
        return $this->container['sourceVirtualHostname'];
    }

    /**
     * Sets sourceVirtualHostname
     *
     * @param string $sourceVirtualHostname System name server to look up the zone to copy
     *
     * @return $this
     */
    public function setSourceVirtualHostname($sourceVirtualHostname)
    {
        $this->container['sourceVirtualHostname'] = $sourceVirtualHostname;

        return $this;
    }

    /**
     * Gets purgeDate
     *
     * @return \DateTime
     */
    public function getPurgeDate()
    {
        return $this->container['purgeDate'];
    }

    /**
     * Sets purgeDate
     *
     * @param \DateTime $purgeDate Date on which the zone is purged (removed) from the system.
     *
     * @return $this
     */
    public function setPurgeDate($purgeDate)
    {
        $this->container['purgeDate'] = $purgeDate;

        return $this;
    }

    /**
     * Gets purgeType
     *
     * @return \Domainrobot\Model\PurgeTypes
     */
    public function getPurgeType()
    {
        return $this->container['purgeType'];
    }

    /**
     * Sets purgeType
     *
     * @param \Domainrobot\Model\PurgeTypes $purgeType Setting for automatic zone deletion.
     *
     * @return $this
     */
    public function setPurgeType($purgeType)
    {
        $this->container['purgeType'] = $purgeType;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Date of search.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets zoneGrantsAdd
     *
     * @return string[]
     */
    public function getZoneGrantsAdd()
    {
        return $this->container['zoneGrantsAdd'];
    }

    /**
     * Sets zoneGrantsAdd
     *
     * @param string[] $zoneGrantsAdd Adds new zone garnts to the zone
     *
     * @return $this
     */
    public function setZoneGrantsAdd($zoneGrantsAdd)
    {
        $this->container['zoneGrantsAdd'] = $zoneGrantsAdd;

        return $this;
    }

    /**
     * Gets zoneGrantsRem
     *
     * @return string[]
     */
    public function getZoneGrantsRem()
    {
        return $this->container['zoneGrantsRem'];
    }

    /**
     * Sets zoneGrantsRem
     *
     * @param string[] $zoneGrantsRem Removes the zone garnts if exists.
     *
     * @return $this
     */
    public function setZoneGrantsRem($zoneGrantsRem)
    {
        $this->container['zoneGrantsRem'] = $zoneGrantsRem;

        return $this;
    }

    /**
     * Gets modifiers
     *
     * @return \Domainrobot\Model\Modifier[]
     */
    public function getModifiers()
    {
        return $this->container['modifiers'];
    }

    /**
     * Sets modifiers
     *
     * @param \Domainrobot\Model\Modifier[] $modifiers The modifer to apply on the objects
     *
     * @return $this
     */
    public function setModifiers($modifiers)
    {
        $this->container['modifiers'] = $modifiers;

        return $this;
    }

    /**
     * Gets nameServers
     *
     * @return \Domainrobot\Model\NameServer[]
     */
    public function getNameServers()
    {
        return $this->container['nameServers'];
    }

    /**
     * Sets nameServers
     *
     * @param \Domainrobot\Model\NameServer[] $nameServers List of hostnames to be used as name severs.
     *
     * @return $this
     */
    public function setNameServers($nameServers)
    {
        $this->container['nameServers'] = $nameServers;

        return $this;
    }

    /**
     * Gets main
     *
     * @return \Domainrobot\Model\MainIp
     */
    public function getMain()
    {
        return $this->container['main'];
    }

    /**
     * Sets main
     *
     * @param \Domainrobot\Model\MainIp $main Main IP address of the zone. Required for ns_action \"primary\" and \"complete\".
     *
     * @return $this
     */
    public function setMain($main)
    {
        $this->container['main'] = $main;

        return $this;
    }

    /**
     * Gets wwwInclude
     *
     * @return bool
     */
    public function getWwwInclude()
    {
        return $this->container['wwwInclude'];
    }

    /**
     * Sets wwwInclude
     *
     * @param bool $wwwInclude Create a www A-record automatically?  false = no true = yes   Default = true   For XML, 0 (false) and 1 (true) can also be used.
     *
     * @return $this
     */
    public function setWwwInclude($wwwInclude)
    {
        $this->container['wwwInclude'] = $wwwInclude;

        return $this;
    }

    /**
     * Gets virtualNameServer
     *
     * @return string
     */
    public function getVirtualNameServer()
    {
        return $this->container['virtualNameServer'];
    }

    /**
     * Sets virtualNameServer
     *
     * @param string $virtualNameServer The first nameserver managed by the system
     *
     * @return $this
     */
    public function setVirtualNameServer($virtualNameServer)
    {
        $this->container['virtualNameServer'] = $virtualNameServer;

        return $this;
    }

    /**
     * Gets freeText
     *
     * @return string[]
     */
    public function getFreeText()
    {
        return $this->container['freeText'];
    }

    /**
     * Sets freeText
     *
     * @param string[] $freeText Freely definable resource records to be entered in BIND Syntax.
     *
     * @return $this
     */
    public function setFreeText($freeText)
    {
        $this->container['freeText'] = $freeText;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \Domainrobot\Model\NameserverActionConstants
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \Domainrobot\Model\NameserverActionConstants $action Additional nameserver check is proceeded.
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets grants
     *
     * @return string[]
     */
    public function getGrants()
    {
        return $this->container['grants'];
    }

    /**
     * Sets grants
     *
     * @param string[] $grants A list of IP addresses from which a zone transfer (AXFR) by be started from for this zone.
     *
     * @return $this
     */
    public function setGrants($grants)
    {
        $this->container['grants'] = $grants;

        return $this;
    }

    /**
     * Gets resourceRecords
     *
     * @return \Domainrobot\Model\ResourceRecord[]
     */
    public function getResourceRecords()
    {
        return $this->container['resourceRecords'];
    }

    /**
     * Sets resourceRecords
     *
     * @param \Domainrobot\Model\ResourceRecord[] $resourceRecords The resource records.
     *
     * @return $this
     */
    public function setResourceRecords($resourceRecords)
    {
        $this->container['resourceRecords'] = $resourceRecords;

        return $this;
    }

    /**
     * Gets roid
     *
     * @return int
     */
    public function getRoid()
    {
        return $this->container['roid'];
    }

    /**
     * Sets roid
     *
     * @param int $roid The resource object identifier of the zone.
     *
     * @return $this
     */
    public function setRoid($roid)
    {
        $this->container['roid'] = $roid;

        return $this;
    }

    /**
     * Gets resourceRecordsAdd
     *
     * @return \Domainrobot\Model\ResourceRecord[]
     */
    public function getResourceRecordsAdd()
    {
        return $this->container['resourceRecordsAdd'];
    }

    /**
     * Sets resourceRecordsAdd
     *
     * @param \Domainrobot\Model\ResourceRecord[] $resourceRecordsAdd Adds new zone records to the extistings
     *
     * @return $this
     */
    public function setResourceRecordsAdd($resourceRecordsAdd)
    {
        $this->container['resourceRecordsAdd'] = $resourceRecordsAdd;

        return $this;
    }

    /**
     * Gets resourceRecordsRem
     *
     * @return \Domainrobot\Model\ResourceRecord[]
     */
    public function getResourceRecordsRem()
    {
        return $this->container['resourceRecordsRem'];
    }

    /**
     * Sets resourceRecordsRem
     *
     * @param \Domainrobot\Model\ResourceRecord[] $resourceRecordsRem Removes the zone records if exists.
     *
     * @return $this
     */
    public function setResourceRecordsRem($resourceRecordsRem)
    {
        $this->container['resourceRecordsRem'] = $resourceRecordsRem;

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


