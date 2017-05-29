<?php
/**
 * LearnFilerepoUploadNewFileSchema
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
 * LearnFilerepoUploadNewFileSchema Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnFilerepoUploadNewFileSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnFilerepoUploadNewFileSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'visibility' => 'int',
        'title' => 'string',
        'user_id' => 'int',
        'viewable_by' => 'string',
        'file_name' => 'string',
        'original_file_name' => 'string',
        'course_id' => 'int',
        'parent_id' => 'int'
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
        'visibility' => 'visibility',
        'title' => 'title',
        'user_id' => 'user_id',
        'viewable_by' => 'viewable_by',
        'file_name' => 'file_name',
        'original_file_name' => 'original_file_name',
        'course_id' => 'course_id',
        'parent_id' => 'parent_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'visibility' => 'setVisibility',
        'title' => 'setTitle',
        'user_id' => 'setUserId',
        'viewable_by' => 'setViewableBy',
        'file_name' => 'setFileName',
        'original_file_name' => 'setOriginalFileName',
        'course_id' => 'setCourseId',
        'parent_id' => 'setParentId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'visibility' => 'getVisibility',
        'title' => 'getTitle',
        'user_id' => 'getUserId',
        'viewable_by' => 'getViewableBy',
        'file_name' => 'getFileName',
        'original_file_name' => 'getOriginalFileName',
        'course_id' => 'getCourseId',
        'parent_id' => 'getParentId'
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
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['viewable_by'] = isset($data['viewable_by']) ? $data['viewable_by'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['original_file_name'] = isset($data['original_file_name']) ? $data['original_file_name'] : null;
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['visibility'] === null) {
            $invalid_properties[] = "'visibility' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['viewable_by'] === null) {
            $invalid_properties[] = "'viewable_by' can't be null";
        }
        if ($this->container['file_name'] === null) {
            $invalid_properties[] = "'file_name' can't be null";
        }
        if ($this->container['original_file_name'] === null) {
            $invalid_properties[] = "'original_file_name' can't be null";
        }
        if ($this->container['course_id'] === null) {
            $invalid_properties[] = "'course_id' can't be null";
        }
        if ($this->container['parent_id'] === null) {
            $invalid_properties[] = "'parent_id' can't be null";
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

        if ($this->container['visibility'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['viewable_by'] === null) {
            return false;
        }
        if ($this->container['file_name'] === null) {
            return false;
        }
        if ($this->container['original_file_name'] === null) {
            return false;
        }
        if ($this->container['course_id'] === null) {
            return false;
        }
        if ($this->container['parent_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets visibility
     * @return int
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     * @param int $visibility either 1 or -1, a value to express whether the uploaded file is visible to all enrollment levels or not (1 is all, -1 not all)
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title of the file.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id The id of the user currently linking the file.
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets viewable_by
     * @return string
     */
    public function getViewableBy()
    {
        return $this->container['viewable_by'];
    }

    /**
     * Sets viewable_by
     * @param string $viewable_by either 'LearningCourseFile::VIEWABLE_IN_ANY_SESSION' which means the file is related to all sessions of its course, or 'LearningCourseFile::VIEWABLE_IN_SELECTED_SESSIONS_ONLY' to express that the file is only for certain sessions.
     * @return $this
     */
    public function setViewableBy($viewable_by)
    {
        $this->container['viewable_by'] = $viewable_by;

        return $this;
    }

    /**
     * Gets file_name
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     * @param string $file_name The name of the file to be uploaded
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets original_file_name
     * @return string
     */
    public function getOriginalFileName()
    {
        return $this->container['original_file_name'];
    }

    /**
     * Sets original_file_name
     * @param string $original_file_name The original file name of the file to be uploaded.
     * @return $this
     */
    public function setOriginalFileName($original_file_name)
    {
        $this->container['original_file_name'] = $original_file_name;

        return $this;
    }

    /**
     * Gets course_id
     * @return int
     */
    public function getCourseId()
    {
        return $this->container['course_id'];
    }

    /**
     * Sets course_id
     * @param int $course_id The id of the course.
     * @return $this
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

        return $this;
    }

    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id The id of the parent folder to hold the new file.
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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

