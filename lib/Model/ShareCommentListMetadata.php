<?php
/**
 * ShareCommentListMetadata
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
 * ShareCommentListMetadata Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShareCommentListMetadata implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShareCommentListMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'read_only' => 'bool',
        'is_related' => 'bool',
        'new_answers' => 'int',
        'have_last' => 'bool',
        'is_following' => 'bool',
        'answers' => 'int',
        'related_kind' => 'string',
        'is_new' => 'bool',
        'have_best' => 'bool',
        'created_at' => 'string',
        'views' => 'int'
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
        'read_only' => 'read_only',
        'is_related' => 'is_related',
        'new_answers' => 'new_answers',
        'have_last' => 'have_last',
        'is_following' => 'is_following',
        'answers' => 'answers',
        'related_kind' => 'related_kind',
        'is_new' => 'is_new',
        'have_best' => 'have_best',
        'created_at' => 'created_at',
        'views' => 'views'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'read_only' => 'setReadOnly',
        'is_related' => 'setIsRelated',
        'new_answers' => 'setNewAnswers',
        'have_last' => 'setHaveLast',
        'is_following' => 'setIsFollowing',
        'answers' => 'setAnswers',
        'related_kind' => 'setRelatedKind',
        'is_new' => 'setIsNew',
        'have_best' => 'setHaveBest',
        'created_at' => 'setCreatedAt',
        'views' => 'setViews'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'read_only' => 'getReadOnly',
        'is_related' => 'getIsRelated',
        'new_answers' => 'getNewAnswers',
        'have_last' => 'getHaveLast',
        'is_following' => 'getIsFollowing',
        'answers' => 'getAnswers',
        'related_kind' => 'getRelatedKind',
        'is_new' => 'getIsNew',
        'have_best' => 'getHaveBest',
        'created_at' => 'getCreatedAt',
        'views' => 'getViews'
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
        $this->container['read_only'] = isset($data['read_only']) ? $data['read_only'] : null;
        $this->container['is_related'] = isset($data['is_related']) ? $data['is_related'] : null;
        $this->container['new_answers'] = isset($data['new_answers']) ? $data['new_answers'] : null;
        $this->container['have_last'] = isset($data['have_last']) ? $data['have_last'] : null;
        $this->container['is_following'] = isset($data['is_following']) ? $data['is_following'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['related_kind'] = isset($data['related_kind']) ? $data['related_kind'] : null;
        $this->container['is_new'] = isset($data['is_new']) ? $data['is_new'] : null;
        $this->container['have_best'] = isset($data['have_best']) ? $data['have_best'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['read_only'] === null) {
            $invalid_properties[] = "'read_only' can't be null";
        }
        if ($this->container['is_related'] === null) {
            $invalid_properties[] = "'is_related' can't be null";
        }
        if ($this->container['new_answers'] === null) {
            $invalid_properties[] = "'new_answers' can't be null";
        }
        if ($this->container['have_last'] === null) {
            $invalid_properties[] = "'have_last' can't be null";
        }
        if ($this->container['is_following'] === null) {
            $invalid_properties[] = "'is_following' can't be null";
        }
        if ($this->container['answers'] === null) {
            $invalid_properties[] = "'answers' can't be null";
        }
        if ($this->container['related_kind'] === null) {
            $invalid_properties[] = "'related_kind' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalid_properties[] = "'is_new' can't be null";
        }
        if ($this->container['have_best'] === null) {
            $invalid_properties[] = "'have_best' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['views'] === null) {
            $invalid_properties[] = "'views' can't be null";
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

        if ($this->container['read_only'] === null) {
            return false;
        }
        if ($this->container['is_related'] === null) {
            return false;
        }
        if ($this->container['new_answers'] === null) {
            return false;
        }
        if ($this->container['have_last'] === null) {
            return false;
        }
        if ($this->container['is_following'] === null) {
            return false;
        }
        if ($this->container['answers'] === null) {
            return false;
        }
        if ($this->container['related_kind'] === null) {
            return false;
        }
        if ($this->container['is_new'] === null) {
            return false;
        }
        if ($this->container['have_best'] === null) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['views'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets read_only
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     * @param bool $read_only Can reply flag
     * @return $this
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets is_related
     * @return bool
     */
    public function getIsRelated()
    {
        return $this->container['is_related'];
    }

    /**
     * Sets is_related
     * @param bool $is_related Is this comment have relation to an asset or learning object
     * @return $this
     */
    public function setIsRelated($is_related)
    {
        $this->container['is_related'] = $is_related;

        return $this;
    }

    /**
     * Gets new_answers
     * @return int
     */
    public function getNewAnswers()
    {
        return $this->container['new_answers'];
    }

    /**
     * Sets new_answers
     * @param int $new_answers Total number of comment new replies
     * @return $this
     */
    public function setNewAnswers($new_answers)
    {
        $this->container['new_answers'] = $new_answers;

        return $this;
    }

    /**
     * Gets have_last
     * @return bool
     */
    public function getHaveLast()
    {
        return $this->container['have_last'];
    }

    /**
     * Sets have_last
     * @param bool $have_last If comment have last reply - true, otherwise - false
     * @return $this
     */
    public function setHaveLast($have_last)
    {
        $this->container['have_last'] = $have_last;

        return $this;
    }

    /**
     * Gets is_following
     * @return bool
     */
    public function getIsFollowing()
    {
        return $this->container['is_following'];
    }

    /**
     * Sets is_following
     * @param bool $is_following Question flag - is following, in this case null
     * @return $this
     */
    public function setIsFollowing($is_following)
    {
        $this->container['is_following'] = $is_following;

        return $this;
    }

    /**
     * Gets answers
     * @return int
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     * @param int $answers Total number of comment replies
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }

    /**
     * Gets related_kind
     * @return string
     */
    public function getRelatedKind()
    {
        return $this->container['related_kind'];
    }

    /**
     * Sets related_kind
     * @param string $related_kind Type of relation - coach_share or learning_object
     * @return $this
     */
    public function setRelatedKind($related_kind)
    {
        $this->container['related_kind'] = $related_kind;

        return $this;
    }

    /**
     * Gets is_new
     * @return bool
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     * @param bool $is_new Comment flag - is new
     * @return $this
     */
    public function setIsNew($is_new)
    {
        $this->container['is_new'] = $is_new;

        return $this;
    }

    /**
     * Gets have_best
     * @return bool
     */
    public function getHaveBest()
    {
        return $this->container['have_best'];
    }

    /**
     * Sets have_best
     * @param bool $have_best If comment have best reply - true, otherwise - false
     * @return $this
     */
    public function setHaveBest($have_best)
    {
        $this->container['have_best'] = $have_best;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at Comment date of creation
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets views
     * @return int
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     * @param int $views Comment views
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

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

