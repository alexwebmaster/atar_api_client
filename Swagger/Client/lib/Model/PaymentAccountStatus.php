<?php
/**
 * PaymentAccountStatus
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
 * PaymentAccountStatus Class Doc Comment
 *
 * @category Class
 * @description Status da conta pagamento do usuario * open: livre para transacionar * locked: transacoes bloqueadas por tempo indeterminado * closed: conta encerrada, nao transaciona
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentAccountStatus
{
    /**
     * Possible values of this enum
     */
    const OPEN = 'open';
const LOCKED = 'locked';
const CLOSED = 'closed';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPEN,
self::LOCKED,
self::CLOSED,        ];
    }
}
