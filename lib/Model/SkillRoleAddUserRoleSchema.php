<?php
/**
 * SkillRoleAddUserRoleSchema
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
 * SkillRoleAddUserRoleSchema Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillRoleAddUserRoleSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillRoleAddUserRoleSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'role_ids' => 'int[]',
        'branch_ids' => 'int[]',
        'group_ids' => 'int[]',
        'user_ids' => 'int[]'
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
        'role_ids' => 'role_ids',
        'branch_ids' => 'branch_ids',
        'group_ids' => 'group_ids',
        'user_ids' => 'user_ids'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'role_ids' => 'setRoleIds',
        'branch_ids' => 'setBranchIds',
        'group_ids' => 'setGroupIds',
        'user_ids' => 'setUserIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'role_ids' => 'getRoleIds',
        'branch_ids' => 'getBranchIds',
        'group_ids' => 'getGroupIds',
        'user_ids' => 'getUserIds'
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
        $this->container['role_ids'] = isset($data['role_ids']) ? $data['role_ids'] : null;
        $this->container['branch_ids'] = isset($data['branch_ids']) ? $data['branch_ids'] : null;
        $this->container['group_ids'] = isset($data['group_ids']) ? $data['group_ids'] : null;
        $this->container['user_ids'] = isset($data['user_ids']) ? $data['user_ids'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets role_ids
     * @return int[]
     */
    public function getRoleIds()
    {
        return $this->container['role_ids'];
    }

    /**
     * Sets role_ids
     * @param int[] $role_ids IDs of roles, which users to assign
     * @return $this
     */
    public function setRoleIds($role_ids)
    {
        $this->container['role_ids'] = $role_ids;

        return $this;
    }

    /**
     * Gets branch_ids
     * @return int[]
     */
    public function getBranchIds()
    {
        return $this->container['branch_ids'];
    }

    /**
     * Sets branch_ids
     * @param int[] $branch_ids IDs of branches, which users to assign; key = branch id; value = 1 (branch and descendants); value = 2 (branch without descendants)
     * @return $this
     */
    public function setBranchIds($branch_ids)
    {
        $this->container['branch_ids'] = $branch_ids;

        return $this;
    }

    /**
     * Gets group_ids
     * @return int[]
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     * @param int[] $group_ids IDs of groups, which users to assign
     * @return $this
     */
    public function setGroupIds($group_ids)
    {
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets user_ids
     * @return int[]
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     * @param int[] $user_ids IDs of users to assign
     * @return $this
     */
    public function setUserIds($user_ids)
    {
        $this->container['user_ids'] = $user_ids;

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

