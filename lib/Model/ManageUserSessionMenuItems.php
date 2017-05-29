<?php
/**
 * ManageUserSessionMenuItems
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
 * ManageUserSessionMenuItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageUserSessionMenuItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageUserSessionMenuItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'label' => 'string',
        'icon' => 'string',
        'is_new' => 'string',
        'route' => 'string',
        'url' => 'string',
        'target' => 'string'
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
        'count' => 'count',
        'label' => 'label',
        'icon' => 'icon',
        'is_new' => 'is_new',
        'route' => 'route',
        'url' => 'url',
        'target' => 'target'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'label' => 'setLabel',
        'icon' => 'setIcon',
        'is_new' => 'setIsNew',
        'route' => 'setRoute',
        'url' => 'setUrl',
        'target' => 'setTarget'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'label' => 'getLabel',
        'icon' => 'getIcon',
        'is_new' => 'getIsNew',
        'route' => 'getRoute',
        'url' => 'getUrl',
        'target' => 'getTarget'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['is_new'] = isset($data['is_new']) ? $data['is_new'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['count'] === null) {
            $invalid_properties[] = "'count' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalid_properties[] = "'label' can't be null";
        }
        if ($this->container['icon'] === null) {
            $invalid_properties[] = "'icon' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalid_properties[] = "'is_new' can't be null";
        }
        if ($this->container['route'] === null) {
            $invalid_properties[] = "'route' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ($this->container['target'] === null) {
            $invalid_properties[] = "'target' can't be null";
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

        if ($this->container['count'] === null) {
            return false;
        }
        if ($this->container['label'] === null) {
            return false;
        }
        if ($this->container['icon'] === null) {
            return false;
        }
        if ($this->container['is_new'] === null) {
            return false;
        }
        if ($this->container['route'] === null) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if ($this->container['target'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count If greater than 0, returns a number to be displayed in the red bullet. Default = 0 -&gt; do not display the red bullet
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label Localized menu title
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets icon
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     * @param string $icon CSS class for the icon to be displayed
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets is_new
     * @return string
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     * @param string $is_new If true, shows the &quot;New&quot; label for this item
     * @return $this
     */
    public function setIsNew($is_new)
    {
        $this->container['is_new'] = $is_new;

        return $this;
    }

    /**
     * Gets route
     * @return string
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     * @param string $route Route (e.g. &quot;['/path', '/subpath']&quot;) to navigate to
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url Absolute URL (e.g. &quot;http://www.google.com&quot;) to redirect to
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets target
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param string $target &quot;same_window&quot;|&quot;new_window&quot;. Only applicable if url is set. Determines whether the link should be opened in the same page or in a new page. Default = &quot;same_window&quot;
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

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

