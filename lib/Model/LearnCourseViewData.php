<?php
/**
 * LearnCourseViewData
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
 * LearnCourseViewData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnCourseViewData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnCourseViewData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'instructors' => '\Swagger\Client\Model\LearnCourseViewInstructors[]',
        'chapter_sequence' => '\Swagger\Client\Model\LearnCourseViewChapterSequence[]',
        'final_score' => 'double',
        'has_overview' => 'bool',
        'demo_file' => 'string',
        'background_image' => '\Swagger\Client\Model\LearnCourseViewBackgroundImage',
        'id' => 'int',
        'deadline' => 'string',
        'status' => 'string',
        'level' => 'string',
        'current_rating' => 'float',
        'last_played_object' => 'int',
        'completion_date' => 'string',
        'name' => 'string',
        'available_seats' => '\Swagger\Client\Model\LearnCourseViewAvailableSeats[]',
        'thumbnail' => 'string',
        'lang_code' => 'string',
        'slug_name' => 'string',
        'has_autoplay' => 'bool',
        'can_rate' => 'bool',
        'type' => 'string',
        'can_self_unenroll' => 'bool',
        'on_sale' => 'bool',
        'deeplink' => 'string',
        'show_toc' => 'bool',
        'shopify_product_meaningful_id' => 'string',
        'description' => 'string',
        'learningplans' => '\Swagger\Client\Model\LearnCourseViewLearningplans[]',
        'certificate_url' => 'string',
        'permissions' => '\Swagger\Client\Model\LearnCourseViewPermissions[]'
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
        'instructors' => 'instructors',
        'chapter_sequence' => 'chapter_sequence',
        'final_score' => 'final_score',
        'has_overview' => 'has_overview',
        'demo_file' => 'demo_file',
        'background_image' => 'background_image',
        'id' => 'id',
        'deadline' => 'deadline',
        'status' => 'status',
        'level' => 'level',
        'current_rating' => 'current_rating',
        'last_played_object' => 'last_played_object',
        'completion_date' => 'completion_date',
        'name' => 'name',
        'available_seats' => 'available_seats',
        'thumbnail' => 'thumbnail',
        'lang_code' => 'lang_code',
        'slug_name' => 'slug_name',
        'has_autoplay' => 'has_autoplay',
        'can_rate' => 'can_rate',
        'type' => 'type',
        'can_self_unenroll' => 'can_self_unenroll',
        'on_sale' => 'on_sale',
        'deeplink' => 'deeplink',
        'show_toc' => 'show_toc',
        'shopify_product_meaningful_id' => 'shopify_product_meaningful_id',
        'description' => 'description',
        'learningplans' => 'learningplans',
        'certificate_url' => 'certificate_url',
        'permissions' => 'permissions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'instructors' => 'setInstructors',
        'chapter_sequence' => 'setChapterSequence',
        'final_score' => 'setFinalScore',
        'has_overview' => 'setHasOverview',
        'demo_file' => 'setDemoFile',
        'background_image' => 'setBackgroundImage',
        'id' => 'setId',
        'deadline' => 'setDeadline',
        'status' => 'setStatus',
        'level' => 'setLevel',
        'current_rating' => 'setCurrentRating',
        'last_played_object' => 'setLastPlayedObject',
        'completion_date' => 'setCompletionDate',
        'name' => 'setName',
        'available_seats' => 'setAvailableSeats',
        'thumbnail' => 'setThumbnail',
        'lang_code' => 'setLangCode',
        'slug_name' => 'setSlugName',
        'has_autoplay' => 'setHasAutoplay',
        'can_rate' => 'setCanRate',
        'type' => 'setType',
        'can_self_unenroll' => 'setCanSelfUnenroll',
        'on_sale' => 'setOnSale',
        'deeplink' => 'setDeeplink',
        'show_toc' => 'setShowToc',
        'shopify_product_meaningful_id' => 'setShopifyProductMeaningfulId',
        'description' => 'setDescription',
        'learningplans' => 'setLearningplans',
        'certificate_url' => 'setCertificateUrl',
        'permissions' => 'setPermissions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'instructors' => 'getInstructors',
        'chapter_sequence' => 'getChapterSequence',
        'final_score' => 'getFinalScore',
        'has_overview' => 'getHasOverview',
        'demo_file' => 'getDemoFile',
        'background_image' => 'getBackgroundImage',
        'id' => 'getId',
        'deadline' => 'getDeadline',
        'status' => 'getStatus',
        'level' => 'getLevel',
        'current_rating' => 'getCurrentRating',
        'last_played_object' => 'getLastPlayedObject',
        'completion_date' => 'getCompletionDate',
        'name' => 'getName',
        'available_seats' => 'getAvailableSeats',
        'thumbnail' => 'getThumbnail',
        'lang_code' => 'getLangCode',
        'slug_name' => 'getSlugName',
        'has_autoplay' => 'getHasAutoplay',
        'can_rate' => 'getCanRate',
        'type' => 'getType',
        'can_self_unenroll' => 'getCanSelfUnenroll',
        'on_sale' => 'getOnSale',
        'deeplink' => 'getDeeplink',
        'show_toc' => 'getShowToc',
        'shopify_product_meaningful_id' => 'getShopifyProductMeaningfulId',
        'description' => 'getDescription',
        'learningplans' => 'getLearningplans',
        'certificate_url' => 'getCertificateUrl',
        'permissions' => 'getPermissions'
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
        $this->container['instructors'] = isset($data['instructors']) ? $data['instructors'] : null;
        $this->container['chapter_sequence'] = isset($data['chapter_sequence']) ? $data['chapter_sequence'] : null;
        $this->container['final_score'] = isset($data['final_score']) ? $data['final_score'] : null;
        $this->container['has_overview'] = isset($data['has_overview']) ? $data['has_overview'] : null;
        $this->container['demo_file'] = isset($data['demo_file']) ? $data['demo_file'] : null;
        $this->container['background_image'] = isset($data['background_image']) ? $data['background_image'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['current_rating'] = isset($data['current_rating']) ? $data['current_rating'] : null;
        $this->container['last_played_object'] = isset($data['last_played_object']) ? $data['last_played_object'] : null;
        $this->container['completion_date'] = isset($data['completion_date']) ? $data['completion_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['available_seats'] = isset($data['available_seats']) ? $data['available_seats'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['lang_code'] = isset($data['lang_code']) ? $data['lang_code'] : null;
        $this->container['slug_name'] = isset($data['slug_name']) ? $data['slug_name'] : null;
        $this->container['has_autoplay'] = isset($data['has_autoplay']) ? $data['has_autoplay'] : null;
        $this->container['can_rate'] = isset($data['can_rate']) ? $data['can_rate'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['can_self_unenroll'] = isset($data['can_self_unenroll']) ? $data['can_self_unenroll'] : null;
        $this->container['on_sale'] = isset($data['on_sale']) ? $data['on_sale'] : null;
        $this->container['deeplink'] = isset($data['deeplink']) ? $data['deeplink'] : null;
        $this->container['show_toc'] = isset($data['show_toc']) ? $data['show_toc'] : null;
        $this->container['shopify_product_meaningful_id'] = isset($data['shopify_product_meaningful_id']) ? $data['shopify_product_meaningful_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['learningplans'] = isset($data['learningplans']) ? $data['learningplans'] : null;
        $this->container['certificate_url'] = isset($data['certificate_url']) ? $data['certificate_url'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['instructors'] === null) {
            $invalid_properties[] = "'instructors' can't be null";
        }
        if ($this->container['has_overview'] === null) {
            $invalid_properties[] = "'has_overview' can't be null";
        }
        if ($this->container['background_image'] === null) {
            $invalid_properties[] = "'background_image' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["subscribed", "in_progress", "completed"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'subscribed', 'in_progress', 'completed'.";
        }

        if ($this->container['current_rating'] === null) {
            $invalid_properties[] = "'current_rating' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['lang_code'] === null) {
            $invalid_properties[] = "'lang_code' can't be null";
        }
        if ($this->container['slug_name'] === null) {
            $invalid_properties[] = "'slug_name' can't be null";
        }
        if ($this->container['has_autoplay'] === null) {
            $invalid_properties[] = "'has_autoplay' can't be null";
        }
        if ($this->container['can_rate'] === null) {
            $invalid_properties[] = "'can_rate' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['can_self_unenroll'] === null) {
            $invalid_properties[] = "'can_self_unenroll' can't be null";
        }
        if ($this->container['on_sale'] === null) {
            $invalid_properties[] = "'on_sale' can't be null";
        }
        if ($this->container['show_toc'] === null) {
            $invalid_properties[] = "'show_toc' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['certificate_url'] === null) {
            $invalid_properties[] = "'certificate_url' can't be null";
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

        if ($this->container['instructors'] === null) {
            return false;
        }
        if ($this->container['has_overview'] === null) {
            return false;
        }
        if ($this->container['background_image'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["subscribed", "in_progress", "completed"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['current_rating'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['lang_code'] === null) {
            return false;
        }
        if ($this->container['slug_name'] === null) {
            return false;
        }
        if ($this->container['has_autoplay'] === null) {
            return false;
        }
        if ($this->container['can_rate'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['can_self_unenroll'] === null) {
            return false;
        }
        if ($this->container['on_sale'] === null) {
            return false;
        }
        if ($this->container['show_toc'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['certificate_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets instructors
     * @return \Swagger\Client\Model\LearnCourseViewInstructors[]
     */
    public function getInstructors()
    {
        return $this->container['instructors'];
    }

    /**
     * Sets instructors
     * @param \Swagger\Client\Model\LearnCourseViewInstructors[] $instructors The instructors inside the course
     * @return $this
     */
    public function setInstructors($instructors)
    {
        $this->container['instructors'] = $instructors;

        return $this;
    }

    /**
     * Gets chapter_sequence
     * @return \Swagger\Client\Model\LearnCourseViewChapterSequence[]
     */
    public function getChapterSequence()
    {
        return $this->container['chapter_sequence'];
    }

    /**
     * Sets chapter_sequence
     * @param \Swagger\Client\Model\LearnCourseViewChapterSequence[] $chapter_sequence Flat, single level, array of LO IDs in the course, in the correct playable order (respecting prerequisites requirements and LO order from the Training Materials management area of the course)
     * @return $this
     */
    public function setChapterSequence($chapter_sequence)
    {
        $this->container['chapter_sequence'] = $chapter_sequence;

        return $this;
    }

    /**
     * Gets final_score
     * @return double
     */
    public function getFinalScore()
    {
        return $this->container['final_score'];
    }

    /**
     * Sets final_score
     * @param double $final_score The final score calculated for the user
     * @return $this
     */
    public function setFinalScore($final_score)
    {
        $this->container['final_score'] = $final_score;

        return $this;
    }

    /**
     * Gets has_overview
     * @return bool
     */
    public function getHasOverview()
    {
        return $this->container['has_overview'];
    }

    /**
     * Sets has_overview
     * @param bool $has_overview Determinate if the course can show the overview page
     * @return $this
     */
    public function setHasOverview($has_overview)
    {
        $this->container['has_overview'] = $has_overview;

        return $this;
    }

    /**
     * Gets demo_file
     * @return string
     */
    public function getDemoFile()
    {
        return $this->container['demo_file'];
    }

    /**
     * Sets demo_file
     * @param string $demo_file Optional demo_file of the course
     * @return $this
     */
    public function setDemoFile($demo_file)
    {
        $this->container['demo_file'] = $demo_file;

        return $this;
    }

    /**
     * Gets background_image
     * @return \Swagger\Client\Model\LearnCourseViewBackgroundImage
     */
    public function getBackgroundImage()
    {
        return $this->container['background_image'];
    }

    /**
     * Sets background_image
     * @param \Swagger\Client\Model\LearnCourseViewBackgroundImage $background_image The course background image information
     * @return $this
     */
    public function setBackgroundImage($background_image)
    {
        $this->container['background_image'] = $background_image;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the course
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets deadline
     * @return string
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
     * Sets deadline
     * @param string $deadline The maximum date (in MYSQL format UTC) by which this course should be completed. It can be the course deadline or the enrollment one
     * @return $this
     */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;

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
     * @param string $status Enrollment status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('subscribed', 'in_progress', 'completed');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'subscribed', 'in_progress', 'completed'");
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
     * @param string $level The enrollment level of the current user. Possible values = &quot;student&quot;, &quot;tutor&quot;, &quot;instructor&quot;, &quot;coach&quot;
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets current_rating
     * @return float
     */
    public function getCurrentRating()
    {
        return $this->container['current_rating'];
    }

    /**
     * Sets current_rating
     * @param float $current_rating The current average rating for the course
     * @return $this
     */
    public function setCurrentRating($current_rating)
    {
        $this->container['current_rating'] = $current_rating;

        return $this;
    }

    /**
     * Gets last_played_object
     * @return int
     */
    public function getLastPlayedObject()
    {
        return $this->container['last_played_object'];
    }

    /**
     * Sets last_played_object
     * @param int $last_played_object The date when the course was completed
     * @return $this
     */
    public function setLastPlayedObject($last_played_object)
    {
        $this->container['last_played_object'] = $last_played_object;

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
     * @param string $completion_date The date when the course was completed
     * @return $this
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Course name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets available_seats
     * @return \Swagger\Client\Model\LearnCourseViewAvailableSeats[]
     */
    public function getAvailableSeats()
    {
        return $this->container['available_seats'];
    }

    /**
     * Sets available_seats
     * @param \Swagger\Client\Model\LearnCourseViewAvailableSeats[] $available_seats Available seats for the course, if course have session, data is splitted by session id
     * @return $this
     */
    public function setAvailableSeats($available_seats)
    {
        $this->container['available_seats'] = $available_seats;

        return $this;
    }

    /**
     * Gets thumbnail
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param string $thumbnail Thumbnail of the course
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets lang_code
     * @return string
     */
    public function getLangCode()
    {
        return $this->container['lang_code'];
    }

    /**
     * Sets lang_code
     * @param string $lang_code The language of the course, e.g. &quot;en&quot;, &quot;bg&quot;
     * @return $this
     */
    public function setLangCode($lang_code)
    {
        $this->container['lang_code'] = $lang_code;

        return $this;
    }

    /**
     * Gets slug_name
     * @return string
     */
    public function getSlugName()
    {
        return $this->container['slug_name'];
    }

    /**
     * Sets slug_name
     * @param string $slug_name Course slug name
     * @return $this
     */
    public function setSlugName($slug_name)
    {
        $this->container['slug_name'] = $slug_name;

        return $this;
    }

    /**
     * Gets has_autoplay
     * @return bool
     */
    public function getHasAutoplay()
    {
        return $this->container['has_autoplay'];
    }

    /**
     * Sets has_autoplay
     * @param bool $has_autoplay Whether or not next chapter should be automatically played after the previous is completed
     * @return $this
     */
    public function setHasAutoplay($has_autoplay)
    {
        $this->container['has_autoplay'] = $has_autoplay;

        return $this;
    }

    /**
     * Gets can_rate
     * @return bool
     */
    public function getCanRate()
    {
        return $this->container['can_rate'];
    }

    /**
     * Sets can_rate
     * @param bool $can_rate If the logged user can rate the course
     * @return $this
     */
    public function setCanRate($can_rate)
    {
        $this->container['can_rate'] = $can_rate;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Course type, possible values: elearning, classroom, webinar
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets can_self_unenroll
     * @return bool
     */
    public function getCanSelfUnenroll()
    {
        return $this->container['can_self_unenroll'];
    }

    /**
     * Sets can_self_unenroll
     * @param bool $can_self_unenroll Whether or not the current user can self-unenroll from the course
     * @return $this
     */
    public function setCanSelfUnenroll($can_self_unenroll)
    {
        $this->container['can_self_unenroll'] = $can_self_unenroll;

        return $this;
    }

    /**
     * Gets on_sale
     * @return bool
     */
    public function getOnSale()
    {
        return $this->container['on_sale'];
    }

    /**
     * Sets on_sale
     * @param bool $on_sale Whether this course is on sale (through the ecommerce functionality)
     * @return $this
     */
    public function setOnSale($on_sale)
    {
        $this->container['on_sale'] = $on_sale;

        return $this;
    }

    /**
     * Gets deeplink
     * @return string
     */
    public function getDeeplink()
    {
        return $this->container['deeplink'];
    }

    /**
     * Sets deeplink
     * @param string $deeplink The URL signature part (i.e. hash=&lt;signature&gt;) to append to the deeplink for this course/chapter. Only available if course has deeplinking enabled.
     * @return $this
     */
    public function setDeeplink($deeplink)
    {
        $this->container['deeplink'] = $deeplink;

        return $this;
    }

    /**
     * Gets show_toc
     * @return bool
     */
    public function getShowToc()
    {
        return $this->container['show_toc'];
    }

    /**
     * Sets show_toc
     * @param bool $show_toc Determinate if the course player should display or not the Table of Content (course navigation)
     * @return $this
     */
    public function setShowToc($show_toc)
    {
        $this->container['show_toc'] = $show_toc;

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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Course description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets learningplans
     * @return \Swagger\Client\Model\LearnCourseViewLearningplans[]
     */
    public function getLearningplans()
    {
        return $this->container['learningplans'];
    }

    /**
     * Sets learningplans
     * @param \Swagger\Client\Model\LearnCourseViewLearningplans[] $learningplans Ids of Learning Plans that the course is part of
     * @return $this
     */
    public function setLearningplans($learningplans)
    {
        $this->container['learningplans'] = $learningplans;

        return $this;
    }

    /**
     * Gets certificate_url
     * @return string
     */
    public function getCertificateUrl()
    {
        return $this->container['certificate_url'];
    }

    /**
     * Sets certificate_url
     * @param string $certificate_url The current S3 PDF certificate URL (if any)
     * @return $this
     */
    public function setCertificateUrl($certificate_url)
    {
        $this->container['certificate_url'] = $certificate_url;

        return $this;
    }

    /**
     * Gets permissions
     * @return \Swagger\Client\Model\LearnCourseViewPermissions[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     * @param \Swagger\Client\Model\LearnCourseViewPermissions[] $permissions An array of permission records for the user in this course
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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


