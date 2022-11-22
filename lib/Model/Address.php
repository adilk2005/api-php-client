<?php
/**
 * Address
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Onfido API
 *
 * The Onfido API is used to submit check requests.
 *
 * The version of the OpenAPI document: 3.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Onfido\Model;

use \ArrayAccess;
use \Onfido\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'flat_number' => 'string',
        'building_number' => 'string',
        'building_name' => 'string',
        'street' => 'string',
        'sub_street' => 'string',
        'town' => 'string',
        'state' => 'string',
        'postcode' => 'string',
        'country' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'line3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'flat_number' => null,
        'building_number' => null,
        'building_name' => null,
        'street' => null,
        'sub_street' => null,
        'town' => null,
        'state' => null,
        'postcode' => null,
        'country' => null,
        'line1' => null,
        'line2' => null,
        'line3' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'flat_number' => 'flat_number',
        'building_number' => 'building_number',
        'building_name' => 'building_name',
        'street' => 'street',
        'sub_street' => 'sub_street',
        'town' => 'town',
        'state' => 'state',
        'postcode' => 'postcode',
        'country' => 'country',
        'line1' => 'line1',
        'line2' => 'line2',
        'line3' => 'line3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flat_number' => 'setFlatNumber',
        'building_number' => 'setBuildingNumber',
        'building_name' => 'setBuildingName',
        'street' => 'setStreet',
        'sub_street' => 'setSubStreet',
        'town' => 'setTown',
        'state' => 'setState',
        'postcode' => 'setPostcode',
        'country' => 'setCountry',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'line3' => 'setLine3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flat_number' => 'getFlatNumber',
        'building_number' => 'getBuildingNumber',
        'building_name' => 'getBuildingName',
        'street' => 'getStreet',
        'sub_street' => 'getSubStreet',
        'town' => 'getTown',
        'state' => 'getState',
        'postcode' => 'getPostcode',
        'country' => 'getCountry',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'line3' => 'getLine3'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['flat_number'] = $data['flat_number'] ?? null;
        $this->container['building_number'] = $data['building_number'] ?? null;
        $this->container['building_name'] = $data['building_name'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['sub_street'] = $data['sub_street'] ?? null;
        $this->container['town'] = $data['town'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['postcode'] = $data['postcode'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['line1'] = $data['line1'] ?? null;
        $this->container['line2'] = $data['line2'] ?? null;
        $this->container['line3'] = $data['line3'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets flat_number
     *
     * @return string|null
     */
    public function getFlatNumber()
    {
        return $this->container['flat_number'];
    }

    /**
     * Sets flat_number
     *
     * @param string|null $flat_number The flat number of this address
     *
     * @return self
     */
    public function setFlatNumber($flat_number)
    {
        $this->container['flat_number'] = $flat_number;

        return $this;
    }

    /**
     * Gets building_number
     *
     * @return string|null
     */
    public function getBuildingNumber()
    {
        return $this->container['building_number'];
    }

    /**
     * Sets building_number
     *
     * @param string|null $building_number The building number of this address
     *
     * @return self
     */
    public function setBuildingNumber($building_number)
    {
        $this->container['building_number'] = $building_number;

        return $this;
    }

    /**
     * Gets building_name
     *
     * @return string|null
     */
    public function getBuildingName()
    {
        return $this->container['building_name'];
    }

    /**
     * Sets building_name
     *
     * @param string|null $building_name The building name of this address
     *
     * @return self
     */
    public function setBuildingName($building_name)
    {
        $this->container['building_name'] = $building_name;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street The street of the applicant’s address
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets sub_street
     *
     * @return string|null
     */
    public function getSubStreet()
    {
        return $this->container['sub_street'];
    }

    /**
     * Sets sub_street
     *
     * @param string|null $sub_street The sub-street of the applicant’s address
     *
     * @return self
     */
    public function setSubStreet($sub_street)
    {
        $this->container['sub_street'] = $sub_street;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string|null
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string|null $town The town of the applicant’s address
     *
     * @return self
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The address state. US states must use the USPS abbreviation (see also ISO 3166-2:US), for example AK, CA, or TX.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode The postcode or ZIP of the applicant’s address
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The 3 character ISO country code of this address. For example, GBR is the country code for the United Kingdom
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string|null
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string|null $line1 Line 1 of the applicant's address
     *
     * @return self
     */
    public function setLine1($line1)
    {
        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 Line 2 of the applicant's address
     *
     * @return self
     */
    public function setLine2($line2)
    {
        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets line3
     *
     * @return string|null
     */
    public function getLine3()
    {
        return $this->container['line3'];
    }

    /**
     * Sets line3
     *
     * @param string|null $line3 Line 3 of the applicant's address
     *
     * @return self
     */
    public function setLine3($line3)
    {
        $this->container['line3'] = $line3;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet(mixed $offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize() : mixed 
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


