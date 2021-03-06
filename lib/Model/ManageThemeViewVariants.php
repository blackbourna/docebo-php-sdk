<?php
/**
 * ManageThemeViewVariants
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ManageThemeViewVariants Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageThemeViewVariants implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageThemeViewVariants';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_multidomain' => 'int',
        'used_for_current_multidomain' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id_multidomain' => 'id_multidomain',
        'used_for_current_multidomain' => 'used_for_current_multidomain'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_multidomain' => 'setIdMultidomain',
        'used_for_current_multidomain' => 'setUsedForCurrentMultidomain'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_multidomain' => 'getIdMultidomain',
        'used_for_current_multidomain' => 'getUsedForCurrentMultidomain'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_multidomain'] = isset($data['id_multidomain']) ? $data['id_multidomain'] : null;
        $this->container['used_for_current_multidomain'] = isset($data['used_for_current_multidomain']) ? $data['used_for_current_multidomain'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id_multidomain'] === null) {
            $invalid_properties[] = "'id_multidomain' can't be null";
        }
        if ($this->container['used_for_current_multidomain'] === null) {
            $invalid_properties[] = "'used_for_current_multidomain' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id_multidomain'] === null) {
            return false;
        }
        if ($this->container['used_for_current_multidomain'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_multidomain
     * @return int
     */
    public function getIdMultidomain()
    {
        return $this->container['id_multidomain'];
    }

    /**
     * Sets id_multidomain
     * @param int $id_multidomain Identifier of the multidomain for which this theme variant is used. Zero if this variant is used for the base domain
     * @return $this
     */
    public function setIdMultidomain($id_multidomain)
    {
        $this->container['id_multidomain'] = $id_multidomain;

        return $this;
    }

    /**
     * Gets used_for_current_multidomain
     * @return bool
     */
    public function getUsedForCurrentMultidomain()
    {
        return $this->container['used_for_current_multidomain'];
    }

    /**
     * Sets used_for_current_multidomain
     * @param bool $used_for_current_multidomain Indicates whether or not this theme variant is applicable for the API caller's multidomain context. This does not mean that the variant is active for the caller's multidomain
     * @return $this
     */
    public function setUsedForCurrentMultidomain($used_for_current_multidomain)
    {
        $this->container['used_for_current_multidomain'] = $used_for_current_multidomain;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


