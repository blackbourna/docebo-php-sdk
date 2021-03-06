<?php
/**
 * LearnCourseViewInstructors
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
 * LearnCourseViewInstructors Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnCourseViewInstructors implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnCourseViewInstructors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avatar_url' => 'string',
        'firstname' => 'string',
        'username' => 'string',
        'instructor_id' => 'int',
        'lastname' => 'string'
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
        'avatar_url' => 'avatar_url',
        'firstname' => 'firstname',
        'username' => 'username',
        'instructor_id' => 'instructor_id',
        'lastname' => 'lastname'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'avatar_url' => 'setAvatarUrl',
        'firstname' => 'setFirstname',
        'username' => 'setUsername',
        'instructor_id' => 'setInstructorId',
        'lastname' => 'setLastname'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'avatar_url' => 'getAvatarUrl',
        'firstname' => 'getFirstname',
        'username' => 'getUsername',
        'instructor_id' => 'getInstructorId',
        'lastname' => 'getLastname'
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
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['instructor_id'] = isset($data['instructor_id']) ? $data['instructor_id'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
        }
        if ($this->container['instructor_id'] === null) {
            $invalid_properties[] = "'instructor_id' can't be null";
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

        if ($this->container['username'] === null) {
            return false;
        }
        if ($this->container['instructor_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets avatar_url
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     * @param string $avatar_url The avatar URL of the instructor
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname The firstname of the instructor
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username The username of the instructor
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets instructor_id
     * @return int
     */
    public function getInstructorId()
    {
        return $this->container['instructor_id'];
    }

    /**
     * Sets instructor_id
     * @param int $instructor_id The uniquer id of the instructor
     * @return $this
     */
    public function setInstructorId($instructor_id)
    {
        $this->container['instructor_id'] = $instructor_id;

        return $this;
    }

    /**
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname The lastname of the instructor
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

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


