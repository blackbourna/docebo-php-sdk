<?php
/**
 * LearnCatalogueViewItems
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
 * LearnCatalogueViewItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnCatalogueViewItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnCatalogueViewItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_id' => 'int',
        'item_category' => 'int',
        'price_status' => 'int',
        'item_type' => 'string',
        'item_can_enroll' => 'int',
        'item_thumbnail' => 'string',
        'is_user_enrolled' => 'int',
        'is_new' => 'int',
        'item_visibility' => 'int',
        'item_name' => 'string',
        'item_code' => 'string',
        'item_policy' => 'int',
        'is_opened' => 'int',
        'item_description' => 'string',
        'number_of_courses' => 'int',
        'item_price' => 'int',
        'shopify_product_meaningful_id' => 'string',
        'access_status' => 'int',
        'item_language' => 'string',
        'item_rating' => 'int'
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
        'item_id' => 'item_id',
        'item_category' => 'item_category',
        'price_status' => 'price_status',
        'item_type' => 'item_type',
        'item_can_enroll' => 'item_can_enroll',
        'item_thumbnail' => 'item_thumbnail',
        'is_user_enrolled' => 'is_user_enrolled',
        'is_new' => 'is_new',
        'item_visibility' => 'item_visibility',
        'item_name' => 'item_name',
        'item_code' => 'item_code',
        'item_policy' => 'item_policy',
        'is_opened' => 'is_opened',
        'item_description' => 'item_description',
        'number_of_courses' => 'number_of_courses',
        'item_price' => 'item_price',
        'shopify_product_meaningful_id' => 'shopify_product_meaningful_id',
        'access_status' => 'access_status',
        'item_language' => 'item_language',
        'item_rating' => 'item_rating'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
        'item_category' => 'setItemCategory',
        'price_status' => 'setPriceStatus',
        'item_type' => 'setItemType',
        'item_can_enroll' => 'setItemCanEnroll',
        'item_thumbnail' => 'setItemThumbnail',
        'is_user_enrolled' => 'setIsUserEnrolled',
        'is_new' => 'setIsNew',
        'item_visibility' => 'setItemVisibility',
        'item_name' => 'setItemName',
        'item_code' => 'setItemCode',
        'item_policy' => 'setItemPolicy',
        'is_opened' => 'setIsOpened',
        'item_description' => 'setItemDescription',
        'number_of_courses' => 'setNumberOfCourses',
        'item_price' => 'setItemPrice',
        'shopify_product_meaningful_id' => 'setShopifyProductMeaningfulId',
        'access_status' => 'setAccessStatus',
        'item_language' => 'setItemLanguage',
        'item_rating' => 'setItemRating'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
        'item_category' => 'getItemCategory',
        'price_status' => 'getPriceStatus',
        'item_type' => 'getItemType',
        'item_can_enroll' => 'getItemCanEnroll',
        'item_thumbnail' => 'getItemThumbnail',
        'is_user_enrolled' => 'getIsUserEnrolled',
        'is_new' => 'getIsNew',
        'item_visibility' => 'getItemVisibility',
        'item_name' => 'getItemName',
        'item_code' => 'getItemCode',
        'item_policy' => 'getItemPolicy',
        'is_opened' => 'getIsOpened',
        'item_description' => 'getItemDescription',
        'number_of_courses' => 'getNumberOfCourses',
        'item_price' => 'getItemPrice',
        'shopify_product_meaningful_id' => 'getShopifyProductMeaningfulId',
        'access_status' => 'getAccessStatus',
        'item_language' => 'getItemLanguage',
        'item_rating' => 'getItemRating'
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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_category'] = isset($data['item_category']) ? $data['item_category'] : null;
        $this->container['price_status'] = isset($data['price_status']) ? $data['price_status'] : null;
        $this->container['item_type'] = isset($data['item_type']) ? $data['item_type'] : null;
        $this->container['item_can_enroll'] = isset($data['item_can_enroll']) ? $data['item_can_enroll'] : null;
        $this->container['item_thumbnail'] = isset($data['item_thumbnail']) ? $data['item_thumbnail'] : null;
        $this->container['is_user_enrolled'] = isset($data['is_user_enrolled']) ? $data['is_user_enrolled'] : null;
        $this->container['is_new'] = isset($data['is_new']) ? $data['is_new'] : null;
        $this->container['item_visibility'] = isset($data['item_visibility']) ? $data['item_visibility'] : null;
        $this->container['item_name'] = isset($data['item_name']) ? $data['item_name'] : null;
        $this->container['item_code'] = isset($data['item_code']) ? $data['item_code'] : null;
        $this->container['item_policy'] = isset($data['item_policy']) ? $data['item_policy'] : null;
        $this->container['is_opened'] = isset($data['is_opened']) ? $data['is_opened'] : null;
        $this->container['item_description'] = isset($data['item_description']) ? $data['item_description'] : null;
        $this->container['number_of_courses'] = isset($data['number_of_courses']) ? $data['number_of_courses'] : null;
        $this->container['item_price'] = isset($data['item_price']) ? $data['item_price'] : null;
        $this->container['shopify_product_meaningful_id'] = isset($data['shopify_product_meaningful_id']) ? $data['shopify_product_meaningful_id'] : null;
        $this->container['access_status'] = isset($data['access_status']) ? $data['access_status'] : null;
        $this->container['item_language'] = isset($data['item_language']) ? $data['item_language'] : null;
        $this->container['item_rating'] = isset($data['item_rating']) ? $data['item_rating'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['item_id'] === null) {
            $invalid_properties[] = "'item_id' can't be null";
        }
        if ($this->container['item_category'] === null) {
            $invalid_properties[] = "'item_category' can't be null";
        }
        if ($this->container['price_status'] === null) {
            $invalid_properties[] = "'price_status' can't be null";
        }
        if ($this->container['item_type'] === null) {
            $invalid_properties[] = "'item_type' can't be null";
        }
        if ($this->container['item_can_enroll'] === null) {
            $invalid_properties[] = "'item_can_enroll' can't be null";
        }
        if ($this->container['item_thumbnail'] === null) {
            $invalid_properties[] = "'item_thumbnail' can't be null";
        }
        if ($this->container['is_user_enrolled'] === null) {
            $invalid_properties[] = "'is_user_enrolled' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalid_properties[] = "'is_new' can't be null";
        }
        if ($this->container['item_visibility'] === null) {
            $invalid_properties[] = "'item_visibility' can't be null";
        }
        if ($this->container['item_name'] === null) {
            $invalid_properties[] = "'item_name' can't be null";
        }
        if ($this->container['item_code'] === null) {
            $invalid_properties[] = "'item_code' can't be null";
        }
        if ($this->container['item_policy'] === null) {
            $invalid_properties[] = "'item_policy' can't be null";
        }
        if ($this->container['is_opened'] === null) {
            $invalid_properties[] = "'is_opened' can't be null";
        }
        if ($this->container['item_description'] === null) {
            $invalid_properties[] = "'item_description' can't be null";
        }
        if ($this->container['number_of_courses'] === null) {
            $invalid_properties[] = "'number_of_courses' can't be null";
        }
        if ($this->container['shopify_product_meaningful_id'] === null) {
            $invalid_properties[] = "'shopify_product_meaningful_id' can't be null";
        }
        if ($this->container['access_status'] === null) {
            $invalid_properties[] = "'access_status' can't be null";
        }
        if ($this->container['item_language'] === null) {
            $invalid_properties[] = "'item_language' can't be null";
        }
        if ($this->container['item_rating'] === null) {
            $invalid_properties[] = "'item_rating' can't be null";
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

        if ($this->container['item_id'] === null) {
            return false;
        }
        if ($this->container['item_category'] === null) {
            return false;
        }
        if ($this->container['price_status'] === null) {
            return false;
        }
        if ($this->container['item_type'] === null) {
            return false;
        }
        if ($this->container['item_can_enroll'] === null) {
            return false;
        }
        if ($this->container['item_thumbnail'] === null) {
            return false;
        }
        if ($this->container['is_user_enrolled'] === null) {
            return false;
        }
        if ($this->container['is_new'] === null) {
            return false;
        }
        if ($this->container['item_visibility'] === null) {
            return false;
        }
        if ($this->container['item_name'] === null) {
            return false;
        }
        if ($this->container['item_code'] === null) {
            return false;
        }
        if ($this->container['item_policy'] === null) {
            return false;
        }
        if ($this->container['is_opened'] === null) {
            return false;
        }
        if ($this->container['item_description'] === null) {
            return false;
        }
        if ($this->container['number_of_courses'] === null) {
            return false;
        }
        if ($this->container['shopify_product_meaningful_id'] === null) {
            return false;
        }
        if ($this->container['access_status'] === null) {
            return false;
        }
        if ($this->container['item_language'] === null) {
            return false;
        }
        if ($this->container['item_rating'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets item_id
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     * @param int $item_id ID of a Course or Learning plan
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_category
     * @return int
     */
    public function getItemCategory()
    {
        return $this->container['item_category'];
    }

    /**
     * Sets item_category
     * @param int $item_category Item category
     * @return $this
     */
    public function setItemCategory($item_category)
    {
        $this->container['item_category'] = $item_category;

        return $this;
    }

    /**
     * Gets price_status
     * @return int
     */
    public function getPriceStatus()
    {
        return $this->container['price_status'];
    }

    /**
     * Sets price_status
     * @param int $price_status Options: 1 - free, 2 - paid, NULL - n/a (for Learning plans)
     * @return $this
     */
    public function setPriceStatus($price_status)
    {
        $this->container['price_status'] = $price_status;

        return $this;
    }

    /**
     * Gets item_type
     * @return string
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     * @param string $item_type Item type (Course or Learning plan)
     * @return $this
     */
    public function setItemType($item_type)
    {
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets item_can_enroll
     * @return int
     */
    public function getItemCanEnroll()
    {
        return $this->container['item_can_enroll'];
    }

    /**
     * Sets item_can_enroll
     * @param int $item_can_enroll Item can enroll (0 - Only Admin can subscribe, 1 - Pending Admin Approval OR 2 - Free  )
     * @return $this
     */
    public function setItemCanEnroll($item_can_enroll)
    {
        $this->container['item_can_enroll'] = $item_can_enroll;

        return $this;
    }

    /**
     * Gets item_thumbnail
     * @return string
     */
    public function getItemThumbnail()
    {
        return $this->container['item_thumbnail'];
    }

    /**
     * Sets item_thumbnail
     * @param string $item_thumbnail Item thumbnail
     * @return $this
     */
    public function setItemThumbnail($item_thumbnail)
    {
        $this->container['item_thumbnail'] = $item_thumbnail;

        return $this;
    }

    /**
     * Gets is_user_enrolled
     * @return int
     */
    public function getIsUserEnrolled()
    {
        return $this->container['is_user_enrolled'];
    }

    /**
     * Sets is_user_enrolled
     * @param int $is_user_enrolled Check if logged user is enrolled to course: 0 - false, 1 - true, NULL - n/a (for Learning plans)
     * @return $this
     */
    public function setIsUserEnrolled($is_user_enrolled)
    {
        $this->container['is_user_enrolled'] = $is_user_enrolled;

        return $this;
    }

    /**
     * Gets is_new
     * @return int
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     * @param int $is_new Is new (1 or 0 is returned) - indicates if user has already &quot;played&quot; in this Course or Learning plan. Not available for Generic catalog
     * @return $this
     */
    public function setIsNew($is_new)
    {
        $this->container['is_new'] = $is_new;

        return $this;
    }

    /**
     * Gets item_visibility
     * @return int
     */
    public function getItemVisibility()
    {
        return $this->container['item_visibility'];
    }

    /**
     * Sets item_visibility
     * @param int $item_visibility Item visibility (0 - Everyone, and show on home page, 1 - Only for logged in users OR 2 - Only users subscribed to the course)
     * @return $this
     */
    public function setItemVisibility($item_visibility)
    {
        $this->container['item_visibility'] = $item_visibility;

        return $this;
    }

    /**
     * Gets item_name
     * @return string
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     * @param string $item_name Item name
     * @return $this
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets item_code
     * @return string
     */
    public function getItemCode()
    {
        return $this->container['item_code'];
    }

    /**
     * Sets item_code
     * @param string $item_code Item code
     * @return $this
     */
    public function setItemCode($item_code)
    {
        $this->container['item_code'] = $item_code;

        return $this;
    }

    /**
     * Gets item_policy
     * @return int
     */
    public function getItemPolicy()
    {
        return $this->container['item_policy'];
    }

    /**
     * Sets item_policy
     * @param int $item_policy Item policy (0 - Subscriptions are closed, 1 Subscriptions are open OR 2 Subscription is available during the following period)
     * @return $this
     */
    public function setItemPolicy($item_policy)
    {
        $this->container['item_policy'] = $item_policy;

        return $this;
    }

    /**
     * Gets is_opened
     * @return int
     */
    public function getIsOpened()
    {
        return $this->container['is_opened'];
    }

    /**
     * Sets is_opened
     * @param int $is_opened Is course opened for subsription: 0 - false, 1 - true, NULL - n/a (for Learning plans)
     * @return $this
     */
    public function setIsOpened($is_opened)
    {
        $this->container['is_opened'] = $is_opened;

        return $this;
    }

    /**
     * Gets item_description
     * @return string
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     * @param string $item_description Item description
     * @return $this
     */
    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets number_of_courses
     * @return int
     */
    public function getNumberOfCourses()
    {
        return $this->container['number_of_courses'];
    }

    /**
     * Sets number_of_courses
     * @param int $number_of_courses Number of courses (available only for Learning plans, otherwise NULL will be returned)
     * @return $this
     */
    public function setNumberOfCourses($number_of_courses)
    {
        $this->container['number_of_courses'] = $number_of_courses;

        return $this;
    }

    /**
     * Gets item_price
     * @return int
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     * @param int $item_price Item price - it is available only if &quot;ecommerce&quot; app is activated
     * @return $this
     */
    public function setItemPrice($item_price)
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets shopify_product_meaningful_id
     * @return string
     */
    public function getShopifyProductMeaningfulId()
    {
        return $this->container['shopify_product_meaningful_id'];
    }

    /**
     * Sets shopify_product_meaningful_id
     * @param string $shopify_product_meaningful_id Shopify product meaningful ID
     * @return $this
     */
    public function setShopifyProductMeaningfulId($shopify_product_meaningful_id)
    {
        $this->container['shopify_product_meaningful_id'] = $shopify_product_meaningful_id;

        return $this;
    }

    /**
     * Gets access_status
     * @return int
     */
    public function getAccessStatus()
    {
        return $this->container['access_status'];
    }

    /**
     * Sets access_status
     * @param int $access_status Options: 1 - enable, 2 - dissable, 3 - expired, NULL - n/a (for Learning plans)
     * @return $this
     */
    public function setAccessStatus($access_status)
    {
        $this->container['access_status'] = $access_status;

        return $this;
    }

    /**
     * Gets item_language
     * @return string
     */
    public function getItemLanguage()
    {
        return $this->container['item_language'];
    }

    /**
     * Sets item_language
     * @param string $item_language Item language (available only for Courses, otherwise NULL will be returned)
     * @return $this
     */
    public function setItemLanguage($item_language)
    {
        $this->container['item_language'] = $item_language;

        return $this;
    }

    /**
     * Gets item_rating
     * @return int
     */
    public function getItemRating()
    {
        return $this->container['item_rating'];
    }

    /**
     * Sets item_rating
     * @param int $item_rating Item rating (available only for Courses, otherwise NULL will be returned). Not available for Generic catalog
     * @return $this
     */
    public function setItemRating($item_rating)
    {
        $this->container['item_rating'] = $item_rating;

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

