<?php
/**
 * LearnEnrollmentBatchImportItems
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
 * LearnEnrollmentBatchImportItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnEnrollmentBatchImportItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnEnrollmentBatchImportItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subscription_code' => 'string',
        'active_until' => 'string',
        'username' => 'string',
        'status' => 'string',
        'level' => 'string',
        'course_code' => 'string',
        'enrollment_date' => 'string',
        'completion_date' => 'string',
        'score' => 'string'
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
        'subscription_code' => 'subscription_code',
        'active_until' => 'active_until',
        'username' => 'username',
        'status' => 'status',
        'level' => 'level',
        'course_code' => 'course_code',
        'enrollment_date' => 'enrollment_date',
        'completion_date' => 'completion_date',
        'score' => 'score'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'subscription_code' => 'setSubscriptionCode',
        'active_until' => 'setActiveUntil',
        'username' => 'setUsername',
        'status' => 'setStatus',
        'level' => 'setLevel',
        'course_code' => 'setCourseCode',
        'enrollment_date' => 'setEnrollmentDate',
        'completion_date' => 'setCompletionDate',
        'score' => 'setScore'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'subscription_code' => 'getSubscriptionCode',
        'active_until' => 'getActiveUntil',
        'username' => 'getUsername',
        'status' => 'getStatus',
        'level' => 'getLevel',
        'course_code' => 'getCourseCode',
        'enrollment_date' => 'getEnrollmentDate',
        'completion_date' => 'getCompletionDate',
        'score' => 'getScore'
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

    const STATUS_SUBSCRIBED = 'subscribed';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_COMPLETED = 'completed';
    const STATUS_WAITING = 'waiting';
    const LEVEL_STUDENT = 'student';
    const LEVEL_TUTOR = 'tutor';
    const LEVEL_INSTRUCTOR = 'instructor';
    const LEVEL_COACH = 'coach';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUBSCRIBED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
            self::STATUS_WAITING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_STUDENT,
            self::LEVEL_TUTOR,
            self::LEVEL_INSTRUCTOR,
            self::LEVEL_COACH,
        ];
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
        $this->container['subscription_code'] = isset($data['subscription_code']) ? $data['subscription_code'] : null;
        $this->container['active_until'] = isset($data['active_until']) ? $data['active_until'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['course_code'] = isset($data['course_code']) ? $data['course_code'] : null;
        $this->container['enrollment_date'] = isset($data['enrollment_date']) ? $data['enrollment_date'] : null;
        $this->container['completion_date'] = isset($data['completion_date']) ? $data['completion_date'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['active_until'] === null) {
            $invalid_properties[] = "'active_until' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["subscribed", "in_progress", "completed", "waiting"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'subscribed', 'in_progress', 'completed', 'waiting'.";
        }

        $allowed_values = ["student", "tutor", "instructor", "coach"];
        if (!in_array($this->container['level'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'level', must be one of 'student', 'tutor', 'instructor', 'coach'.";
        }

        if ($this->container['course_code'] === null) {
            $invalid_properties[] = "'course_code' can't be null";
        }
        if ($this->container['enrollment_date'] === null) {
            $invalid_properties[] = "'enrollment_date' can't be null";
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

        if ($this->container['active_until'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["subscribed", "in_progress", "completed", "waiting"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["student", "tutor", "instructor", "coach"];
        if (!in_array($this->container['level'], $allowed_values)) {
            return false;
        }
        if ($this->container['course_code'] === null) {
            return false;
        }
        if ($this->container['enrollment_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets subscription_code
     * @return string
     */
    public function getSubscriptionCode()
    {
        return $this->container['subscription_code'];
    }

    /**
     * Sets subscription_code
     * @param string $subscription_code 
     * @return $this
     */
    public function setSubscriptionCode($subscription_code)
    {
        $this->container['subscription_code'] = $subscription_code;

        return $this;
    }

    /**
     * Gets active_until
     * @return string
     */
    public function getActiveUntil()
    {
        return $this->container['active_until'];
    }

    /**
     * Sets active_until
     * @param string $active_until 
     * @return $this
     */
    public function setActiveUntil($active_until)
    {
        $this->container['active_until'] = $active_until;

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
     * @param string $username 
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('subscribed', 'in_progress', 'completed', 'waiting');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'subscribed', 'in_progress', 'completed', 'waiting'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets level
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param string $level 
     * @return $this
     */
    public function setLevel($level)
    {
        $allowed_values = array('student', 'tutor', 'instructor', 'coach');
        if (!is_null($level) && (!in_array($level, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'level', must be one of 'student', 'tutor', 'instructor', 'coach'");
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets course_code
     * @return string
     */
    public function getCourseCode()
    {
        return $this->container['course_code'];
    }

    /**
     * Sets course_code
     * @param string $course_code The code of the course
     * @return $this
     */
    public function setCourseCode($course_code)
    {
        $this->container['course_code'] = $course_code;

        return $this;
    }

    /**
     * Gets enrollment_date
     * @return string
     */
    public function getEnrollmentDate()
    {
        return $this->container['enrollment_date'];
    }

    /**
     * Sets enrollment_date
     * @param string $enrollment_date 
     * @return $this
     */
    public function setEnrollmentDate($enrollment_date)
    {
        $this->container['enrollment_date'] = $enrollment_date;

        return $this;
    }

    /**
     * Gets completion_date
     * @return string
     */
    public function getCompletionDate()
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date
     * @param string $completion_date 
     * @return $this
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

        return $this;
    }

    /**
     * Gets score
     * @return string
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param string $score 
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

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

