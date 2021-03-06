<?php
/**
 * SkillEvaluationGetEvaluationRequestsItems
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
 * SkillEvaluationGetEvaluationRequestsItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillEvaluationGetEvaluationRequestsItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillEvaluationGetEvaluationRequestsItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'users_count' => 'int',
        'role_description' => 'string',
        'role_id' => 'int',
        'evaluation_types' => '\Swagger\Client\Model\SkillEvaluationGetEvaluationRequestsEvaluationTypes[]',
        'role_title' => 'string'
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
        'users_count' => 'users_count',
        'role_description' => 'role_description',
        'role_id' => 'role_id',
        'evaluation_types' => 'evaluation_types',
        'role_title' => 'role_title'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'users_count' => 'setUsersCount',
        'role_description' => 'setRoleDescription',
        'role_id' => 'setRoleId',
        'evaluation_types' => 'setEvaluationTypes',
        'role_title' => 'setRoleTitle'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'users_count' => 'getUsersCount',
        'role_description' => 'getRoleDescription',
        'role_id' => 'getRoleId',
        'evaluation_types' => 'getEvaluationTypes',
        'role_title' => 'getRoleTitle'
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
        $this->container['users_count'] = isset($data['users_count']) ? $data['users_count'] : null;
        $this->container['role_description'] = isset($data['role_description']) ? $data['role_description'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['evaluation_types'] = isset($data['evaluation_types']) ? $data['evaluation_types'] : null;
        $this->container['role_title'] = isset($data['role_title']) ? $data['role_title'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['users_count'] === null) {
            $invalid_properties[] = "'users_count' can't be null";
        }
        if ($this->container['role_description'] === null) {
            $invalid_properties[] = "'role_description' can't be null";
        }
        if ($this->container['role_id'] === null) {
            $invalid_properties[] = "'role_id' can't be null";
        }
        if ($this->container['evaluation_types'] === null) {
            $invalid_properties[] = "'evaluation_types' can't be null";
        }
        if ($this->container['role_title'] === null) {
            $invalid_properties[] = "'role_title' can't be null";
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

        if ($this->container['users_count'] === null) {
            return false;
        }
        if ($this->container['role_description'] === null) {
            return false;
        }
        if ($this->container['role_id'] === null) {
            return false;
        }
        if ($this->container['evaluation_types'] === null) {
            return false;
        }
        if ($this->container['role_title'] === null) {
            return false;
        }
        return true;
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
     * @param int $users_count Count of role users
     * @return $this
     */
    public function setUsersCount($users_count)
    {
        $this->container['users_count'] = $users_count;

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
     * Gets evaluation_types
     * @return \Swagger\Client\Model\SkillEvaluationGetEvaluationRequestsEvaluationTypes[]
     */
    public function getEvaluationTypes()
    {
        return $this->container['evaluation_types'];
    }

    /**
     * Sets evaluation_types
     * @param \Swagger\Client\Model\SkillEvaluationGetEvaluationRequestsEvaluationTypes[] $evaluation_types Evaluation statistics by type
     * @return $this
     */
    public function setEvaluationTypes($evaluation_types)
    {
        $this->container['evaluation_types'] = $evaluation_types;

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


