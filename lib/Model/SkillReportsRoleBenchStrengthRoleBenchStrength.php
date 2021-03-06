<?php
/**
 * SkillReportsRoleBenchStrengthRoleBenchStrength
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
 * SkillReportsRoleBenchStrengthRoleBenchStrength Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillReportsRoleBenchStrengthRoleBenchStrength implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillReportsRoleBenchStrengthRoleBenchStrength';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'link_users_list' => 'string',
        'manager_missing' => 'int',
        'link_manager_missing' => 'string',
        'users_count' => 'int'
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
        'link_users_list' => 'link_users_list',
        'manager_missing' => 'manager_missing',
        'link_manager_missing' => 'link_manager_missing',
        'users_count' => 'users_count'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'link_users_list' => 'setLinkUsersList',
        'manager_missing' => 'setManagerMissing',
        'link_manager_missing' => 'setLinkManagerMissing',
        'users_count' => 'setUsersCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'link_users_list' => 'getLinkUsersList',
        'manager_missing' => 'getManagerMissing',
        'link_manager_missing' => 'getLinkManagerMissing',
        'users_count' => 'getUsersCount'
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
        $this->container['link_users_list'] = isset($data['link_users_list']) ? $data['link_users_list'] : null;
        $this->container['manager_missing'] = isset($data['manager_missing']) ? $data['manager_missing'] : null;
        $this->container['link_manager_missing'] = isset($data['link_manager_missing']) ? $data['link_manager_missing'] : null;
        $this->container['users_count'] = isset($data['users_count']) ? $data['users_count'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['link_users_list'] === null) {
            $invalid_properties[] = "'link_users_list' can't be null";
        }
        if ($this->container['manager_missing'] === null) {
            $invalid_properties[] = "'manager_missing' can't be null";
        }
        if ($this->container['link_manager_missing'] === null) {
            $invalid_properties[] = "'link_manager_missing' can't be null";
        }
        if ($this->container['users_count'] === null) {
            $invalid_properties[] = "'users_count' can't be null";
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

        if ($this->container['link_users_list'] === null) {
            return false;
        }
        if ($this->container['manager_missing'] === null) {
            return false;
        }
        if ($this->container['link_manager_missing'] === null) {
            return false;
        }
        if ($this->container['users_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets link_users_list
     * @return string
     */
    public function getLinkUsersList()
    {
        return $this->container['link_users_list'];
    }

    /**
     * Sets link_users_list
     * @param string $link_users_list Hateoas link to the list of employees suitable for the bench
     * @return $this
     */
    public function setLinkUsersList($link_users_list)
    {
        $this->container['link_users_list'] = $link_users_list;

        return $this;
    }

    /**
     * Gets manager_missing
     * @return int
     */
    public function getManagerMissing()
    {
        return $this->container['manager_missing'];
    }

    /**
     * Sets manager_missing
     * @param int $manager_missing Count of employees without manager evaluation
     * @return $this
     */
    public function setManagerMissing($manager_missing)
    {
        $this->container['manager_missing'] = $manager_missing;

        return $this;
    }

    /**
     * Gets link_manager_missing
     * @return string
     */
    public function getLinkManagerMissing()
    {
        return $this->container['link_manager_missing'];
    }

    /**
     * Sets link_manager_missing
     * @param string $link_manager_missing Link to the list of employees without manager evaluation
     * @return $this
     */
    public function setLinkManagerMissing($link_manager_missing)
    {
        $this->container['link_manager_missing'] = $link_manager_missing;

        return $this;
    }

    /**
     * Gets users_count
     * @return int
     */
    public function getUsersCount()
    {
        return $this->container['users_count'];
    }

    /**
     * Sets users_count
     * @param int $users_count Count of employees suitable for the bench
     * @return $this
     */
    public function setUsersCount($users_count)
    {
        $this->container['users_count'] = $users_count;

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


