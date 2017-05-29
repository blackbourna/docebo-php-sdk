<?php
/**
 * ManageGlobalsearchSearchData
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
 * ManageGlobalsearchSearchData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageGlobalsearchSearchData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageGlobalsearchSearchData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'results' => '\Swagger\Client\Model\ManageGlobalsearchSearchResults[]',
        'recent_searches' => '\Swagger\Client\Model\ManageGlobalsearchSearchRecentSearches[]',
        'grand_total' => 'int',
        'next_from' => 'int',
        'end_of_results' => 'bool',
        'suggestions' => '\Swagger\Client\Model\ManageGlobalsearchSearchSuggestions[]'
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
        'results' => 'results',
        'recent_searches' => 'recent_searches',
        'grand_total' => 'grand_total',
        'next_from' => 'next_from',
        'end_of_results' => 'end_of_results',
        'suggestions' => 'suggestions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'results' => 'setResults',
        'recent_searches' => 'setRecentSearches',
        'grand_total' => 'setGrandTotal',
        'next_from' => 'setNextFrom',
        'end_of_results' => 'setEndOfResults',
        'suggestions' => 'setSuggestions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'results' => 'getResults',
        'recent_searches' => 'getRecentSearches',
        'grand_total' => 'getGrandTotal',
        'next_from' => 'getNextFrom',
        'end_of_results' => 'getEndOfResults',
        'suggestions' => 'getSuggestions'
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
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['recent_searches'] = isset($data['recent_searches']) ? $data['recent_searches'] : null;
        $this->container['grand_total'] = isset($data['grand_total']) ? $data['grand_total'] : null;
        $this->container['next_from'] = isset($data['next_from']) ? $data['next_from'] : null;
        $this->container['end_of_results'] = isset($data['end_of_results']) ? $data['end_of_results'] : null;
        $this->container['suggestions'] = isset($data['suggestions']) ? $data['suggestions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['results'] === null) {
            $invalid_properties[] = "'results' can't be null";
        }
        if ($this->container['recent_searches'] === null) {
            $invalid_properties[] = "'recent_searches' can't be null";
        }
        if ($this->container['grand_total'] === null) {
            $invalid_properties[] = "'grand_total' can't be null";
        }
        if ($this->container['next_from'] === null) {
            $invalid_properties[] = "'next_from' can't be null";
        }
        if ($this->container['end_of_results'] === null) {
            $invalid_properties[] = "'end_of_results' can't be null";
        }
        if ($this->container['suggestions'] === null) {
            $invalid_properties[] = "'suggestions' can't be null";
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

        if ($this->container['results'] === null) {
            return false;
        }
        if ($this->container['recent_searches'] === null) {
            return false;
        }
        if ($this->container['grand_total'] === null) {
            return false;
        }
        if ($this->container['next_from'] === null) {
            return false;
        }
        if ($this->container['end_of_results'] === null) {
            return false;
        }
        if ($this->container['suggestions'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets results
     * @return \Swagger\Client\Model\ManageGlobalsearchSearchResults[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     * @param \Swagger\Client\Model\ManageGlobalsearchSearchResults[] $results Array of searched results
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets recent_searches
     * @return \Swagger\Client\Model\ManageGlobalsearchSearchRecentSearches[]
     */
    public function getRecentSearches()
    {
        return $this->container['recent_searches'];
    }

    /**
     * Sets recent_searches
     * @param \Swagger\Client\Model\ManageGlobalsearchSearchRecentSearches[] $recent_searches 
     * @return $this
     */
    public function setRecentSearches($recent_searches)
    {
        $this->container['recent_searches'] = $recent_searches;

        return $this;
    }

    /**
     * Gets grand_total
     * @return int
     */
    public function getGrandTotal()
    {
        return $this->container['grand_total'];
    }

    /**
     * Sets grand_total
     * @param int $grand_total Total number of items FOUND (not returned, but FOUND on ES)
     * @return $this
     */
    public function setGrandTotal($grand_total)
    {
        $this->container['grand_total'] = $grand_total;

        return $this;
    }

    /**
     * Gets next_from
     * @return int
     */
    public function getNextFrom()
    {
        return $this->container['next_from'];
    }

    /**
     * Sets next_from
     * @param int $next_from Next index to start from, in case of pagination
     * @return $this
     */
    public function setNextFrom($next_from)
    {
        $this->container['next_from'] = $next_from;

        return $this;
    }

    /**
     * Gets end_of_results
     * @return bool
     */
    public function getEndOfResults()
    {
        return $this->container['end_of_results'];
    }

    /**
     * Sets end_of_results
     * @param bool $end_of_results True if the current page is the last page
     * @return $this
     */
    public function setEndOfResults($end_of_results)
    {
        $this->container['end_of_results'] = $end_of_results;

        return $this;
    }

    /**
     * Gets suggestions
     * @return \Swagger\Client\Model\ManageGlobalsearchSearchSuggestions[]
     */
    public function getSuggestions()
    {
        return $this->container['suggestions'];
    }

    /**
     * Sets suggestions
     * @param \Swagger\Client\Model\ManageGlobalsearchSearchSuggestions[] $suggestions 
     * @return $this
     */
    public function setSuggestions($suggestions)
    {
        $this->container['suggestions'] = $suggestions;

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

