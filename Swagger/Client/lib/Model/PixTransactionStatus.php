<?php
/**
 * PixTransactionStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API BaaS - Atar B2B
 *
 * Documentação da API do serviço de Banking as a Service.
 *
 * OpenAPI spec version: v3.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * PixTransactionStatus Class Doc Comment
 *
 * @category Class
 * @description Status da transação
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PixTransactionStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'pending';
const APPROVED = 'approved';
const CHARGEBACK = 'chargeback';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
self::APPROVED,
self::CHARGEBACK,        ];
    }
}
