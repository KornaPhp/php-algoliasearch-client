<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Search;

use Algolia\AlgoliaSearch\Model\AbstractModel;
use Algolia\AlgoliaSearch\Model\ModelInterface;

/**
 * MultipleBatchResponse Class Doc Comment.
 *
 * @category Class
 */
class MultipleBatchResponse extends AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'taskID' => 'array<string,int>',
        'objectIDs' => 'string[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'taskID' => 'int64',
        'objectIDs' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'taskID' => 'taskID',
        'objectIDs' => 'objectIDs',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'taskID' => 'setTaskID',
        'objectIDs' => 'setObjectIDs',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'taskID' => 'getTaskID',
        'objectIDs' => 'getObjectIDs',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     */
    public function __construct(?array $data = null)
    {
        if (isset($data['taskID'])) {
            $this->container['taskID'] = $data['taskID'];
        }
        if (isset($data['objectIDs'])) {
            $this->container['objectIDs'] = $data['objectIDs'];
        }
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function modelTypes()
    {
        return self::$modelTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function modelFormats()
    {
        return self::$modelFormats;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!isset($this->container['taskID']) || null === $this->container['taskID']) {
            $invalidProperties[] = "'taskID' can't be null";
        }
        if (!isset($this->container['objectIDs']) || null === $this->container['objectIDs']) {
            $invalidProperties[] = "'objectIDs' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets taskID.
     *
     * @return array<string,int>
     */
    public function getTaskID()
    {
        return $this->container['taskID'] ?? null;
    }

    /**
     * Sets taskID.
     *
     * @param array<string,int> $taskID Task IDs. One for each index.
     *
     * @return self
     */
    public function setTaskID($taskID)
    {
        $this->container['taskID'] = $taskID;

        return $this;
    }

    /**
     * Gets objectIDs.
     *
     * @return string[]
     */
    public function getObjectIDs()
    {
        return $this->container['objectIDs'] ?? null;
    }

    /**
     * Sets objectIDs.
     *
     * @param string[] $objectIDs unique record identifiers
     *
     * @return self
     */
    public function setObjectIDs($objectIDs)
    {
        $this->container['objectIDs'] = $objectIDs;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }
}
