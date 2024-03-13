<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Insights;

/**
 * ObjectDataAfterSearch Class Doc Comment.
 *
 * @category Class
 */
class ObjectDataAfterSearch extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'queryID' => 'string',
        'price' => '\Algolia\AlgoliaSearch\Model\Insights\Price',
        'quantity' => 'int',
        'discount' => '\Algolia\AlgoliaSearch\Model\Insights\Discount',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'queryID' => null,
        'price' => null,
        'quantity' => 'int32',
        'discount' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'queryID' => 'queryID',
        'price' => 'price',
        'quantity' => 'quantity',
        'discount' => 'discount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'queryID' => 'setQueryID',
        'price' => 'setPrice',
        'quantity' => 'setQuantity',
        'discount' => 'setDiscount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'queryID' => 'getQueryID',
        'price' => 'getPrice',
        'quantity' => 'getQuantity',
        'discount' => 'getDiscount',
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
    public function __construct(array $data = null)
    {
        if (isset($data['queryID'])) {
            $this->container['queryID'] = $data['queryID'];
        }
        if (isset($data['price'])) {
            $this->container['price'] = $data['price'];
        }
        if (isset($data['quantity'])) {
            $this->container['quantity'] = $data['quantity'];
        }
        if (isset($data['discount'])) {
            $this->container['discount'] = $data['discount'];
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

        if (isset($this->container['queryID']) && (mb_strlen($this->container['queryID']) > 32)) {
            $invalidProperties[] = "invalid value for 'queryID', the character length must be smaller than or equal to 32.";
        }

        if (isset($this->container['queryID']) && (mb_strlen($this->container['queryID']) < 32)) {
            $invalidProperties[] = "invalid value for 'queryID', the character length must be bigger than or equal to 32.";
        }

        if (isset($this->container['queryID']) && !preg_match('/[0-9a-f]{32}/', $this->container['queryID'])) {
            $invalidProperties[] = "invalid value for 'queryID', must be conform to the pattern /[0-9a-f]{32}/.";
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
     * Gets queryID.
     *
     * @return null|string
     */
    public function getQueryID()
    {
        return $this->container['queryID'] ?? null;
    }

    /**
     * Sets queryID.
     *
     * @param null|string $queryID unique identifier for a search query, used to track purchase events with multiple records that originate from different searches
     *
     * @return self
     */
    public function setQueryID($queryID)
    {
        if (!is_null($queryID) && (mb_strlen($queryID) > 32)) {
            throw new \InvalidArgumentException('invalid length for $queryID when calling ObjectDataAfterSearch., must be smaller than or equal to 32.');
        }
        if (!is_null($queryID) && (mb_strlen($queryID) < 32)) {
            throw new \InvalidArgumentException('invalid length for $queryID when calling ObjectDataAfterSearch., must be bigger than or equal to 32.');
        }
        if (!is_null($queryID) && (!preg_match('/[0-9a-f]{32}/', $queryID))) {
            throw new \InvalidArgumentException("invalid value for {$queryID} when calling ObjectDataAfterSearch., must conform to the pattern /[0-9a-f]{32}/.");
        }

        $this->container['queryID'] = $queryID;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Insights\Price
     */
    public function getPrice()
    {
        return $this->container['price'] ?? null;
    }

    /**
     * Sets price.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Insights\Price $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->container['quantity'] ?? null;
    }

    /**
     * Sets quantity.
     *
     * @param null|int $quantity Quantity of a product that has been purchased or added to the cart. The total purchase value is the sum of `quantity` multiplied with the `price` for each purchased item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets discount.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Insights\Discount
     */
    public function getDiscount()
    {
        return $this->container['discount'] ?? null;
    }

    /**
     * Sets discount.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Insights\Discount $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
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
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}
