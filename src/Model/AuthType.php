<?php
/**
 * AuthType
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
 * AuthType Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthType
{
    /**
     * Possible values of this enum
     */
    const PASSWORD = 'PASSWORD';
    const PASSWORD_TOKEN = 'PASSWORD_TOKEN';
    const ALIAS = 'ALIAS';
    const INVITE = 'INVITE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PASSWORD,
            self::PASSWORD_TOKEN,
            self::ALIAS,
            self::INVITE,
        ];
    }
}


