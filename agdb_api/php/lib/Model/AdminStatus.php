<?php
/**
 * AdminStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Agnesoft\AgdbApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * agdb_server
 *
 * Agnesoft Graph Database Server
 *
 * The version of the OpenAPI document: 0.10.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Agnesoft\AgdbApi\Model;

use \ArrayAccess;
use \Agnesoft\AgdbApi\ObjectSerializer;

/**
 * AdminStatus Class Doc Comment
 *
 * @category Class
 * @package  Agnesoft\AgdbApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdminStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdminStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dbs' => 'int',
        'logged_in_users' => 'int',
        'size' => 'int',
        'uptime' => 'int',
        'users' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dbs' => 'int64',
        'logged_in_users' => 'int64',
        'size' => 'int64',
        'uptime' => 'int64',
        'users' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dbs' => false,
        'logged_in_users' => false,
        'size' => false,
        'uptime' => false,
        'users' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'dbs' => 'dbs',
        'logged_in_users' => 'logged_in_users',
        'size' => 'size',
        'uptime' => 'uptime',
        'users' => 'users'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dbs' => 'setDbs',
        'logged_in_users' => 'setLoggedInUsers',
        'size' => 'setSize',
        'uptime' => 'setUptime',
        'users' => 'setUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dbs' => 'getDbs',
        'logged_in_users' => 'getLoggedInUsers',
        'size' => 'getSize',
        'uptime' => 'getUptime',
        'users' => 'getUsers'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('dbs', $data ?? [], null);
        $this->setIfExists('logged_in_users', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('uptime', $data ?? [], null);
        $this->setIfExists('users', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dbs'] === null) {
            $invalidProperties[] = "'dbs' can't be null";
        }
        if (($this->container['dbs'] < 0)) {
            $invalidProperties[] = "invalid value for 'dbs', must be bigger than or equal to 0.";
        }

        if ($this->container['logged_in_users'] === null) {
            $invalidProperties[] = "'logged_in_users' can't be null";
        }
        if (($this->container['logged_in_users'] < 0)) {
            $invalidProperties[] = "invalid value for 'logged_in_users', must be bigger than or equal to 0.";
        }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if (($this->container['size'] < 0)) {
            $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
        }

        if ($this->container['uptime'] === null) {
            $invalidProperties[] = "'uptime' can't be null";
        }
        if (($this->container['uptime'] < 0)) {
            $invalidProperties[] = "invalid value for 'uptime', must be bigger than or equal to 0.";
        }

        if ($this->container['users'] === null) {
            $invalidProperties[] = "'users' can't be null";
        }
        if (($this->container['users'] < 0)) {
            $invalidProperties[] = "invalid value for 'users', must be bigger than or equal to 0.";
        }

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
     * Gets dbs
     *
     * @return int
     */
    public function getDbs()
    {
        return $this->container['dbs'];
    }

    /**
     * Sets dbs
     *
     * @param int $dbs dbs
     *
     * @return self
     */
    public function setDbs($dbs)
    {
        if (is_null($dbs)) {
            throw new \InvalidArgumentException('non-nullable dbs cannot be null');
        }

        if (($dbs < 0)) {
            throw new \InvalidArgumentException('invalid value for $dbs when calling AdminStatus., must be bigger than or equal to 0.');
        }

        $this->container['dbs'] = $dbs;

        return $this;
    }

    /**
     * Gets logged_in_users
     *
     * @return int
     */
    public function getLoggedInUsers()
    {
        return $this->container['logged_in_users'];
    }

    /**
     * Sets logged_in_users
     *
     * @param int $logged_in_users logged_in_users
     *
     * @return self
     */
    public function setLoggedInUsers($logged_in_users)
    {
        if (is_null($logged_in_users)) {
            throw new \InvalidArgumentException('non-nullable logged_in_users cannot be null');
        }

        if (($logged_in_users < 0)) {
            throw new \InvalidArgumentException('invalid value for $logged_in_users when calling AdminStatus., must be bigger than or equal to 0.');
        }

        $this->container['logged_in_users'] = $logged_in_users;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }

        if (($size < 0)) {
            throw new \InvalidArgumentException('invalid value for $size when calling AdminStatus., must be bigger than or equal to 0.');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets uptime
     *
     * @return int
     */
    public function getUptime()
    {
        return $this->container['uptime'];
    }

    /**
     * Sets uptime
     *
     * @param int $uptime uptime
     *
     * @return self
     */
    public function setUptime($uptime)
    {
        if (is_null($uptime)) {
            throw new \InvalidArgumentException('non-nullable uptime cannot be null');
        }

        if (($uptime < 0)) {
            throw new \InvalidArgumentException('invalid value for $uptime when calling AdminStatus., must be bigger than or equal to 0.');
        }

        $this->container['uptime'] = $uptime;

        return $this;
    }

    /**
     * Gets users
     *
     * @return int
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param int $users users
     *
     * @return self
     */
    public function setUsers($users)
    {
        if (is_null($users)) {
            throw new \InvalidArgumentException('non-nullable users cannot be null');
        }

        if (($users < 0)) {
            throw new \InvalidArgumentException('invalid value for $users when calling AdminStatus., must be bigger than or equal to 0.');
        }

        $this->container['users'] = $users;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
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


