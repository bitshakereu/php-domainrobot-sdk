<?php
/**
 * DomainStudioDomainSource
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
use \Domainrobot\ObjectSerializer;

/**
 * DomainStudioDomainSource Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainStudioDomainSource
{
    /**
     * Possible values of this enum
     */
    const INITIAL = 'INITIAL';
    const SUGGESTION = 'SUGGESTION';
    const PREMIUM = 'PREMIUM';
    const GEO = 'GEO';
    const SIMILAR = 'SIMILAR';
    const RECOMMENDED = 'RECOMMENDED';
    const CUSTOM = 'CUSTOM';
    const ONLINE_PRESENCE = 'ONLINE_PRESENCE';
    const SPIN_WORD = 'SPIN_WORD';
    const PERSONAL_NAMES = 'PERSONAL_NAMES';
    const UPCOMING = 'UPCOMING';
    const MARKET = 'MARKET';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INITIAL,
            self::SUGGESTION,
            self::PREMIUM,
            self::GEO,
            self::SIMILAR,
            self::RECOMMENDED,
            self::CUSTOM,
            self::ONLINE_PRESENCE,
            self::SPIN_WORD,
            self::PERSONAL_NAMES,
            self::UPCOMING,
            self::MARKET,
        ];
    }
}


