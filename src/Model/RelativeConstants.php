<?php
/**
 * RelativeConstants
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
 * RelativeConstants Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RelativeConstants
{
    /**
     * Possible values of this enum
     */
    const FIX = 'FIX';
    const RELATIVE_PERCENT = 'RELATIVE_PERCENT';
    const RELATIVE_AMOUNT = 'RELATIVE_AMOUNT';
    const DELETE = 'DELETE';
    const REPLACE = 'REPLACE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIX,
            self::RELATIVE_PERCENT,
            self::RELATIVE_AMOUNT,
            self::DELETE,
            self::REPLACE,
        ];
    }
}


