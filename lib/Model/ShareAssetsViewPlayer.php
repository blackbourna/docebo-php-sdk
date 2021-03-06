<?php
/**
 * ShareAssetsViewPlayer
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
 * ShareAssetsViewPlayer Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShareAssetsViewPlayer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShareAssetsViewPlayer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'id_asset' => 'int',
        'content_type' => 'int',
        'config' => '\Swagger\Client\Model\ShareAssetsViewConfig',
        'content' => '\Swagger\Client\Model\ShareAssetsViewContent',
        'player_type' => 'string'
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
        'title' => 'title',
        'id_asset' => 'id_asset',
        'content_type' => 'content_type',
        'config' => 'config',
        'content' => 'content',
        'player_type' => 'player_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'id_asset' => 'setIdAsset',
        'content_type' => 'setContentType',
        'config' => 'setConfig',
        'content' => 'setContent',
        'player_type' => 'setPlayerType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'id_asset' => 'getIdAsset',
        'content_type' => 'getContentType',
        'config' => 'getConfig',
        'content' => 'getContent',
        'player_type' => 'getPlayerType'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['id_asset'] = isset($data['id_asset']) ? $data['id_asset'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['player_type'] = isset($data['player_type']) ? $data['player_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['id_asset'] === null) {
            $invalid_properties[] = "'id_asset' can't be null";
        }
        if ($this->container['content_type'] === null) {
            $invalid_properties[] = "'content_type' can't be null";
        }
        if ($this->container['config'] === null) {
            $invalid_properties[] = "'config' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
        if ($this->container['player_type'] === null) {
            $invalid_properties[] = "'player_type' can't be null";
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

        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['id_asset'] === null) {
            return false;
        }
        if ($this->container['content_type'] === null) {
            return false;
        }
        if ($this->container['config'] === null) {
            return false;
        }
        if ($this->container['content'] === null) {
            return false;
        }
        if ($this->container['player_type'] === null) {
            return false;
        }
        return true;
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
     * @param string $title Title of the asset
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets id_asset
     * @return int
     */
    public function getIdAsset()
    {
        return $this->container['id_asset'];
    }

    /**
     * Sets id_asset
     * @param int $id_asset ID of the asset
     * @return $this
     */
    public function setIdAsset($id_asset)
    {
        $this->container['id_asset'] = $id_asset;

        return $this;
    }

    /**
     * Gets content_type
     * @return int
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     * @param int $content_type Player content type
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets config
     * @return \Swagger\Client\Model\ShareAssetsViewConfig
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     * @param \Swagger\Client\Model\ShareAssetsViewConfig $config Player configuration
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets content
     * @return \Swagger\Client\Model\ShareAssetsViewContent
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param \Swagger\Client\Model\ShareAssetsViewContent $content Player content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets player_type
     * @return string
     */
    public function getPlayerType()
    {
        return $this->container['player_type'];
    }

    /**
     * Sets player_type
     * @param string $player_type Type of the player
     * @return $this
     */
    public function setPlayerType($player_type)
    {
        $this->container['player_type'] = $player_type;

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


