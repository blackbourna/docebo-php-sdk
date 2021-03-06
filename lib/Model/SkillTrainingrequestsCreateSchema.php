<?php
/**
 * SkillTrainingrequestsCreateSchema
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
 * SkillTrainingrequestsCreateSchema Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillTrainingrequestsCreateSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillTrainingrequestsCreateSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_type' => 'string',
        'employee_id' => 'int',
        'requester_id' => 'int',
        'skill_id' => 'int'
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
        'request_type' => 'request_type',
        'employee_id' => 'employee_id',
        'requester_id' => 'requester_id',
        'skill_id' => 'skill_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'request_type' => 'setRequestType',
        'employee_id' => 'setEmployeeId',
        'requester_id' => 'setRequesterId',
        'skill_id' => 'setSkillId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'request_type' => 'getRequestType',
        'employee_id' => 'getEmployeeId',
        'requester_id' => 'getRequesterId',
        'skill_id' => 'getSkillId'
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
        $this->container['request_type'] = isset($data['request_type']) ? $data['request_type'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['requester_id'] = isset($data['requester_id']) ? $data['requester_id'] : null;
        $this->container['skill_id'] = isset($data['skill_id']) ? $data['skill_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['request_type'] === null) {
            $invalid_properties[] = "'request_type' can't be null";
        }
        if ($this->container['employee_id'] === null) {
            $invalid_properties[] = "'employee_id' can't be null";
        }
        if ($this->container['requester_id'] === null) {
            $invalid_properties[] = "'requester_id' can't be null";
        }
        if ($this->container['skill_id'] === null) {
            $invalid_properties[] = "'skill_id' can't be null";
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

        if ($this->container['request_type'] === null) {
            return false;
        }
        if ($this->container['employee_id'] === null) {
            return false;
        }
        if ($this->container['requester_id'] === null) {
            return false;
        }
        if ($this->container['skill_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets request_type
     * @return string
     */
    public function getRequestType()
    {
        return $this->container['request_type'];
    }

    /**
     * Sets request_type
     * @param string $request_type M|E|H Manager, Employee or HR request. HR request reserved for future enhancements.
     * @return $this
     */
    public function setRequestType($request_type)
    {
        $this->container['request_type'] = $request_type;

        return $this;
    }

    /**
     * Gets employee_id
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     * @param int $employee_id ID of the employee that should perform the training
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets requester_id
     * @return int
     */
    public function getRequesterId()
    {
        return $this->container['requester_id'];
    }

    /**
     * Sets requester_id
     * @param int $requester_id ID of the requester
     * @return $this
     */
    public function setRequesterId($requester_id)
    {
        $this->container['requester_id'] = $requester_id;

        return $this;
    }

    /**
     * Gets skill_id
     * @return int
     */
    public function getSkillId()
    {
        return $this->container['skill_id'];
    }

    /**
     * Sets skill_id
     * @param int $skill_id ID of the skill requested
     * @return $this
     */
    public function setSkillId($skill_id)
    {
        $this->container['skill_id'] = $skill_id;

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


