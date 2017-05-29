<?php
/**
 * SkillPlanningCreateSchema
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
 * SkillPlanningCreateSchema Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillPlanningCreateSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillPlanningCreateSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_date' => '\DateTime',
        'branch_id' => 'int',
        'end_date' => '\DateTime',
        'translations' => '\Swagger\Client\Model\SkillPlanningCreateTranslations'
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
        'start_date' => 'start_date',
        'branch_id' => 'branch_id',
        'end_date' => 'end_date',
        'translations' => 'translations'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'branch_id' => 'setBranchId',
        'end_date' => 'setEndDate',
        'translations' => 'setTranslations'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'branch_id' => 'getBranchId',
        'end_date' => 'getEndDate',
        'translations' => 'getTranslations'
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
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['branch_id'] = isset($data['branch_id']) ? $data['branch_id'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['translations'] = isset($data['translations']) ? $data['translations'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['start_date'] === null) {
            $invalid_properties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalid_properties[] = "'end_date' can't be null";
        }
        if ($this->container['translations'] === null) {
            $invalid_properties[] = "'translations' can't be null";
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

        if ($this->container['start_date'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['translations'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date The start date of the planning period.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets branch_id
     * @return int
     */
    public function getBranchId()
    {
        return $this->container['branch_id'];
    }

    /**
     * Sets branch_id
     * @param int $branch_id If the branch isn't provided the root branch is set.
     * @return $this
     */
    public function setBranchId($branch_id)
    {
        $this->container['branch_id'] = $branch_id;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date The end date of the planning period.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets translations
     * @return \Swagger\Client\Model\SkillPlanningCreateTranslations
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     * @param \Swagger\Client\Model\SkillPlanningCreateTranslations $translations Array of translations,  the system default language translation is mandatory
     * @return $this
     */
    public function setTranslations($translations)
    {
        $this->container['translations'] = $translations;

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

