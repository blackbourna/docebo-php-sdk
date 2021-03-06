<?php
/**
 * SkillRoleListItems
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
 * SkillRoleListItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillRoleListItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillRoleListItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'role_skills' => 'int',
        'role_description' => 'string',
        'role_id' => 'int',
        'actions' => 'string[]',
        'role_users' => 'int',
        'role_config' => 'int',
        'role_title' => 'string',
        'role_status' => 'int'
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
        'role_skills' => 'role_skills',
        'role_description' => 'role_description',
        'role_id' => 'role_id',
        'actions' => 'actions',
        'role_users' => 'role_users',
        'role_config' => 'role_config',
        'role_title' => 'role_title',
        'role_status' => 'role_status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'role_skills' => 'setRoleSkills',
        'role_description' => 'setRoleDescription',
        'role_id' => 'setRoleId',
        'actions' => 'setActions',
        'role_users' => 'setRoleUsers',
        'role_config' => 'setRoleConfig',
        'role_title' => 'setRoleTitle',
        'role_status' => 'setRoleStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'role_skills' => 'getRoleSkills',
        'role_description' => 'getRoleDescription',
        'role_id' => 'getRoleId',
        'actions' => 'getActions',
        'role_users' => 'getRoleUsers',
        'role_config' => 'getRoleConfig',
        'role_title' => 'getRoleTitle',
        'role_status' => 'getRoleStatus'
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
        $this->container['role_skills'] = isset($data['role_skills']) ? $data['role_skills'] : null;
        $this->container['role_description'] = isset($data['role_description']) ? $data['role_description'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['role_users'] = isset($data['role_users']) ? $data['role_users'] : null;
        $this->container['role_config'] = isset($data['role_config']) ? $data['role_config'] : null;
        $this->container['role_title'] = isset($data['role_title']) ? $data['role_title'] : null;
        $this->container['role_status'] = isset($data['role_status']) ? $data['role_status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['role_skills'] === null) {
            $invalid_properties[] = "'role_skills' can't be null";
        }
        if ($this->container['role_description'] === null) {
            $invalid_properties[] = "'role_description' can't be null";
        }
        if ($this->container['role_id'] === null) {
            $invalid_properties[] = "'role_id' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalid_properties[] = "'actions' can't be null";
        }
        if ($this->container['role_users'] === null) {
            $invalid_properties[] = "'role_users' can't be null";
        }
        if ($this->container['role_config'] === null) {
            $invalid_properties[] = "'role_config' can't be null";
        }
        if ($this->container['role_title'] === null) {
            $invalid_properties[] = "'role_title' can't be null";
        }
        if ($this->container['role_status'] === null) {
            $invalid_properties[] = "'role_status' can't be null";
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

        if ($this->container['role_skills'] === null) {
            return false;
        }
        if ($this->container['role_description'] === null) {
            return false;
        }
        if ($this->container['role_id'] === null) {
            return false;
        }
        if ($this->container['actions'] === null) {
            return false;
        }
        if ($this->container['role_users'] === null) {
            return false;
        }
        if ($this->container['role_config'] === null) {
            return false;
        }
        if ($this->container['role_title'] === null) {
            return false;
        }
        if ($this->container['role_status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets role_skills
     * @return int
     */
    public function getRoleSkills()
    {
        return $this->container['role_skills'];
    }

    /**
     * Sets role_skills
     * @param int $role_skills Count of the skills assigned to the role
     * @return $this
     */
    public function setRoleSkills($role_skills)
    {
        $this->container['role_skills'] = $role_skills;

        return $this;
    }

    /**
     * Gets role_description
     * @return string
     */
    public function getRoleDescription()
    {
        return $this->container['role_description'];
    }

    /**
     * Sets role_description
     * @param string $role_description Role title in the selected language
     * @return $this
     */
    public function setRoleDescription($role_description)
    {
        $this->container['role_description'] = $role_description;

        return $this;
    }

    /**
     * Gets role_id
     * @return int
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     * @param int $role_id ID of the role
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets actions
     * @return string[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     * @param string[] $actions Available actions, that could be performed on the role
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets role_users
     * @return int
     */
    public function getRoleUsers()
    {
        return $this->container['role_users'];
    }

    /**
     * Sets role_users
     * @param int $role_users Count of the users assigned to the role
     * @return $this
     */
    public function setRoleUsers($role_users)
    {
        $this->container['role_users'] = $role_users;

        return $this;
    }

    /**
     * Gets role_config
     * @return int
     */
    public function getRoleConfig()
    {
        return $this->container['role_config'];
    }

    /**
     * Sets role_config
     * @param int $role_config Id of the custom role configuration if set or null if there is no custom role config
     * @return $this
     */
    public function setRoleConfig($role_config)
    {
        $this->container['role_config'] = $role_config;

        return $this;
    }

    /**
     * Gets role_title
     * @return string
     */
    public function getRoleTitle()
    {
        return $this->container['role_title'];
    }

    /**
     * Sets role_title
     * @param string $role_title Role title in the selected language
     * @return $this
     */
    public function setRoleTitle($role_title)
    {
        $this->container['role_title'] = $role_title;

        return $this;
    }

    /**
     * Gets role_status
     * @return int
     */
    public function getRoleStatus()
    {
        return $this->container['role_status'];
    }

    /**
     * Sets role_status
     * @param int $role_status Role status - active[1], inactive[0]
     * @return $this
     */
    public function setRoleStatus($role_status)
    {
        $this->container['role_status'] = $role_status;

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


