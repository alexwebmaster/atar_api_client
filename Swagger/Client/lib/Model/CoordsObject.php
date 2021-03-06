<?php
/**
 * CoordsObject
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CoordsObject Class Doc Comment
 *
 * @category Class
 * @description Coordenadas
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CoordsObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CoordsObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'latitude' => 'double',
'longitude' => 'double',
'altitude' => 'double',
'floor' => 'int',
'horizontal_accuracy' => 'double',
'vertical_accuracy' => 'double',
'speed' => 'double',
'course' => 'double',
'timestamp' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'latitude' => 'double',
'longitude' => 'double',
'altitude' => 'double',
'floor' => 'int32',
'horizontal_accuracy' => 'double',
'vertical_accuracy' => 'double',
'speed' => 'double',
'course' => 'double',
'timestamp' => null    ];

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
        'latitude' => 'latitude',
'longitude' => 'longitude',
'altitude' => 'altitude',
'floor' => 'floor',
'horizontal_accuracy' => 'horizontalAccuracy',
'vertical_accuracy' => 'verticalAccuracy',
'speed' => 'speed',
'course' => 'course',
'timestamp' => 'timestamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'latitude' => 'setLatitude',
'longitude' => 'setLongitude',
'altitude' => 'setAltitude',
'floor' => 'setFloor',
'horizontal_accuracy' => 'setHorizontalAccuracy',
'vertical_accuracy' => 'setVerticalAccuracy',
'speed' => 'setSpeed',
'course' => 'setCourse',
'timestamp' => 'setTimestamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'latitude' => 'getLatitude',
'longitude' => 'getLongitude',
'altitude' => 'getAltitude',
'floor' => 'getFloor',
'horizontal_accuracy' => 'getHorizontalAccuracy',
'vertical_accuracy' => 'getVerticalAccuracy',
'speed' => 'getSpeed',
'course' => 'getCourse',
'timestamp' => 'getTimestamp'    ];

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
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['altitude'] = isset($data['altitude']) ? $data['altitude'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['horizontal_accuracy'] = isset($data['horizontal_accuracy']) ? $data['horizontal_accuracy'] : null;
        $this->container['vertical_accuracy'] = isset($data['vertical_accuracy']) ? $data['vertical_accuracy'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['course'] = isset($data['course']) ? $data['course'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude Latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude Longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets altitude
     *
     * @return double
     */
    public function getAltitude()
    {
        return $this->container['altitude'];
    }

    /**
     * Sets altitude
     *
     * @param double $altitude Altitude
     *
     * @return $this
     */
    public function setAltitude($altitude)
    {
        $this->container['altitude'] = $altitude;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return int
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param int $floor Andar
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets horizontal_accuracy
     *
     * @return double
     */
    public function getHorizontalAccuracy()
    {
        return $this->container['horizontal_accuracy'];
    }

    /**
     * Sets horizontal_accuracy
     *
     * @param double $horizontal_accuracy Precisao horizontal
     *
     * @return $this
     */
    public function setHorizontalAccuracy($horizontal_accuracy)
    {
        $this->container['horizontal_accuracy'] = $horizontal_accuracy;

        return $this;
    }

    /**
     * Gets vertical_accuracy
     *
     * @return double
     */
    public function getVerticalAccuracy()
    {
        return $this->container['vertical_accuracy'];
    }

    /**
     * Sets vertical_accuracy
     *
     * @param double $vertical_accuracy Precisao vertical
     *
     * @return $this
     */
    public function setVerticalAccuracy($vertical_accuracy)
    {
        $this->container['vertical_accuracy'] = $vertical_accuracy;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return double
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param double $speed Velocidade
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;

        return $this;
    }

    /**
     * Gets course
     *
     * @return double
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     *
     * @param double $course Direcao em graus. 0 norte, 90 leste, 180 sul, 270 oeste
     *
     * @return $this
     */
    public function setCourse($course)
    {
        $this->container['course'] = $course;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp Timestamp do momento que a localizacao foi capturada
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
}
