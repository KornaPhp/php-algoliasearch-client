<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Insights;

use Algolia\AlgoliaSearch\Model\AbstractModel;
use Algolia\AlgoliaSearch\Model\ModelInterface;

/**
 * PurchasedObjectIDs Class Doc Comment.
 *
 * @category Class
 *
 * @description Use this event to track when users make a purchase unrelated to a previous Algolia request. For example, if you don&#39;t use Algolia to build your category pages, use this event.  To track purchase events related to Algolia requests, use the \&quot;Purchased object IDs after search\&quot; event.
 */
class PurchasedObjectIDs extends AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'eventName' => 'string',
        'eventType' => '\Algolia\AlgoliaSearch\Model\Insights\ConversionEvent',
        'eventSubtype' => '\Algolia\AlgoliaSearch\Model\Insights\PurchaseEvent',
        'index' => 'string',
        'objectIDs' => 'string[]',
        'userToken' => 'string',
        'authenticatedUserToken' => 'string',
        'currency' => 'string',
        'objectData' => '\Algolia\AlgoliaSearch\Model\Insights\ObjectData[]',
        'timestamp' => 'int',
        'value' => '\Algolia\AlgoliaSearch\Model\Insights\Value',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'eventName' => null,
        'eventType' => null,
        'eventSubtype' => null,
        'index' => null,
        'objectIDs' => null,
        'userToken' => null,
        'authenticatedUserToken' => null,
        'currency' => null,
        'objectData' => null,
        'timestamp' => 'int64',
        'value' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'eventName' => 'eventName',
        'eventType' => 'eventType',
        'eventSubtype' => 'eventSubtype',
        'index' => 'index',
        'objectIDs' => 'objectIDs',
        'userToken' => 'userToken',
        'authenticatedUserToken' => 'authenticatedUserToken',
        'currency' => 'currency',
        'objectData' => 'objectData',
        'timestamp' => 'timestamp',
        'value' => 'value',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'eventName' => 'setEventName',
        'eventType' => 'setEventType',
        'eventSubtype' => 'setEventSubtype',
        'index' => 'setIndex',
        'objectIDs' => 'setObjectIDs',
        'userToken' => 'setUserToken',
        'authenticatedUserToken' => 'setAuthenticatedUserToken',
        'currency' => 'setCurrency',
        'objectData' => 'setObjectData',
        'timestamp' => 'setTimestamp',
        'value' => 'setValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'eventName' => 'getEventName',
        'eventType' => 'getEventType',
        'eventSubtype' => 'getEventSubtype',
        'index' => 'getIndex',
        'objectIDs' => 'getObjectIDs',
        'userToken' => 'getUserToken',
        'authenticatedUserToken' => 'getAuthenticatedUserToken',
        'currency' => 'getCurrency',
        'objectData' => 'getObjectData',
        'timestamp' => 'getTimestamp',
        'value' => 'getValue',
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
        if (isset($data['eventName'])) {
            $this->container['eventName'] = $data['eventName'];
        }
        if (isset($data['eventType'])) {
            $this->container['eventType'] = $data['eventType'];
        }
        if (isset($data['eventSubtype'])) {
            $this->container['eventSubtype'] = $data['eventSubtype'];
        }
        if (isset($data['index'])) {
            $this->container['index'] = $data['index'];
        }
        if (isset($data['objectIDs'])) {
            $this->container['objectIDs'] = $data['objectIDs'];
        }
        if (isset($data['userToken'])) {
            $this->container['userToken'] = $data['userToken'];
        }
        if (isset($data['authenticatedUserToken'])) {
            $this->container['authenticatedUserToken'] = $data['authenticatedUserToken'];
        }
        if (isset($data['currency'])) {
            $this->container['currency'] = $data['currency'];
        }
        if (isset($data['objectData'])) {
            $this->container['objectData'] = $data['objectData'];
        }
        if (isset($data['timestamp'])) {
            $this->container['timestamp'] = $data['timestamp'];
        }
        if (isset($data['value'])) {
            $this->container['value'] = $data['value'];
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

        if (!isset($this->container['eventName']) || null === $this->container['eventName']) {
            $invalidProperties[] = "'eventName' can't be null";
        }
        if (mb_strlen($this->container['eventName']) > 64) {
            $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 64.";
        }

        if (mb_strlen($this->container['eventName']) < 1) {
            $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/[\\x20-\\x7E]{1,64}/', $this->container['eventName'])) {
            $invalidProperties[] = "invalid value for 'eventName', must be conform to the pattern /[\\x20-\\x7E]{1,64}/.";
        }

        if (!isset($this->container['eventType']) || null === $this->container['eventType']) {
            $invalidProperties[] = "'eventType' can't be null";
        }
        if (!isset($this->container['eventSubtype']) || null === $this->container['eventSubtype']) {
            $invalidProperties[] = "'eventSubtype' can't be null";
        }
        if (!isset($this->container['index']) || null === $this->container['index']) {
            $invalidProperties[] = "'index' can't be null";
        }
        if (!isset($this->container['objectIDs']) || null === $this->container['objectIDs']) {
            $invalidProperties[] = "'objectIDs' can't be null";
        }
        if (count($this->container['objectIDs']) > 20) {
            $invalidProperties[] = "invalid value for 'objectIDs', number of items must be less than or equal to 20.";
        }

        if (count($this->container['objectIDs']) < 1) {
            $invalidProperties[] = "invalid value for 'objectIDs', number of items must be greater than or equal to 1.";
        }

        if (!isset($this->container['userToken']) || null === $this->container['userToken']) {
            $invalidProperties[] = "'userToken' can't be null";
        }
        if (mb_strlen($this->container['userToken']) > 129) {
            $invalidProperties[] = "invalid value for 'userToken', the character length must be smaller than or equal to 129.";
        }

        if (mb_strlen($this->container['userToken']) < 1) {
            $invalidProperties[] = "invalid value for 'userToken', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match('/[a-zA-Z0-9_=\\/+-]{1,129}/', $this->container['userToken'])) {
            $invalidProperties[] = "invalid value for 'userToken', must be conform to the pattern /[a-zA-Z0-9_=\\/+-]{1,129}/.";
        }

        if (isset($this->container['authenticatedUserToken']) && (mb_strlen($this->container['authenticatedUserToken']) > 129)) {
            $invalidProperties[] = "invalid value for 'authenticatedUserToken', the character length must be smaller than or equal to 129.";
        }

        if (isset($this->container['authenticatedUserToken']) && (mb_strlen($this->container['authenticatedUserToken']) < 1)) {
            $invalidProperties[] = "invalid value for 'authenticatedUserToken', the character length must be bigger than or equal to 1.";
        }

        if (isset($this->container['authenticatedUserToken']) && !preg_match('/[a-zA-Z0-9_=\\/+-]{1,129}/', $this->container['authenticatedUserToken'])) {
            $invalidProperties[] = "invalid value for 'authenticatedUserToken', must be conform to the pattern /[a-zA-Z0-9_=\\/+-]{1,129}/.";
        }

        if (isset($this->container['objectData']) && (count($this->container['objectData']) > 20)) {
            $invalidProperties[] = "invalid value for 'objectData', number of items must be less than or equal to 20.";
        }

        if (isset($this->container['objectData']) && (count($this->container['objectData']) < 1)) {
            $invalidProperties[] = "invalid value for 'objectData', number of items must be greater than or equal to 1.";
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
     * Gets eventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['eventName'] ?? null;
    }

    /**
     * Sets eventName.
     *
     * @param string $eventName Event name, up to 64 ASCII characters.  Consider naming events consistently—for example, by adopting Segment's [object-action](https://segment.com/academy/collecting-data/naming-conventions-for-clean-data/#the-object-action-framework) framework.
     *
     * @return self
     */
    public function setEventName($eventName)
    {
        if (mb_strlen($eventName) > 64) {
            throw new \InvalidArgumentException('invalid length for $eventName when calling PurchasedObjectIDs., must be smaller than or equal to 64.');
        }
        if (mb_strlen($eventName) < 1) {
            throw new \InvalidArgumentException('invalid length for $eventName when calling PurchasedObjectIDs., must be bigger than or equal to 1.');
        }
        if (!preg_match('/[\\x20-\\x7E]{1,64}/', $eventName)) {
            throw new \InvalidArgumentException("invalid value for {$eventName} when calling PurchasedObjectIDs., must conform to the pattern /[\\x20-\\x7E]{1,64}/.");
        }

        $this->container['eventName'] = $eventName;

        return $this;
    }

    /**
     * Gets eventType.
     *
     * @return ConversionEvent
     */
    public function getEventType()
    {
        return $this->container['eventType'] ?? null;
    }

    /**
     * Sets eventType.
     *
     * @param ConversionEvent $eventType eventType
     *
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

        return $this;
    }

    /**
     * Gets eventSubtype.
     *
     * @return PurchaseEvent
     */
    public function getEventSubtype()
    {
        return $this->container['eventSubtype'] ?? null;
    }

    /**
     * Sets eventSubtype.
     *
     * @param PurchaseEvent $eventSubtype eventSubtype
     *
     * @return self
     */
    public function setEventSubtype($eventSubtype)
    {
        $this->container['eventSubtype'] = $eventSubtype;

        return $this;
    }

    /**
     * Gets index.
     *
     * @return string
     */
    public function getIndex()
    {
        return $this->container['index'] ?? null;
    }

    /**
     * Sets index.
     *
     * @param string $index index name (case-sensitive) to which the event's items belong
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

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
     * @param string[] $objectIDs object IDs of the records that are part of the event
     *
     * @return self
     */
    public function setObjectIDs($objectIDs)
    {
        if (count($objectIDs) > 20) {
            throw new \InvalidArgumentException('invalid value for $objectIDs when calling PurchasedObjectIDs., number of items must be less than or equal to 20.');
        }
        if (count($objectIDs) < 1) {
            throw new \InvalidArgumentException('invalid length for $objectIDs when calling PurchasedObjectIDs., number of items must be greater than or equal to 1.');
        }
        $this->container['objectIDs'] = $objectIDs;

        return $this;
    }

    /**
     * Gets userToken.
     *
     * @return string
     */
    public function getUserToken()
    {
        return $this->container['userToken'] ?? null;
    }

    /**
     * Sets userToken.
     *
     * @param string $userToken Anonymous or pseudonymous user identifier.  Don't use personally identifiable information in user tokens. For more information, see [User token](https://www.algolia.com/doc/guides/sending-events/concepts/usertoken/).
     *
     * @return self
     */
    public function setUserToken($userToken)
    {
        if (mb_strlen($userToken) > 129) {
            throw new \InvalidArgumentException('invalid length for $userToken when calling PurchasedObjectIDs., must be smaller than or equal to 129.');
        }
        if (mb_strlen($userToken) < 1) {
            throw new \InvalidArgumentException('invalid length for $userToken when calling PurchasedObjectIDs., must be bigger than or equal to 1.');
        }
        if (!preg_match('/[a-zA-Z0-9_=\\/+-]{1,129}/', $userToken)) {
            throw new \InvalidArgumentException("invalid value for {$userToken} when calling PurchasedObjectIDs., must conform to the pattern /[a-zA-Z0-9_=\\/+-]{1,129}/.");
        }

        $this->container['userToken'] = $userToken;

        return $this;
    }

    /**
     * Gets authenticatedUserToken.
     *
     * @return null|string
     */
    public function getAuthenticatedUserToken()
    {
        return $this->container['authenticatedUserToken'] ?? null;
    }

    /**
     * Sets authenticatedUserToken.
     *
     * @param null|string $authenticatedUserToken Identifier for authenticated users.  When the user signs in, you can get an identifier from your system and send it as `authenticatedUserToken`. This lets you keep using the `userToken` from before the user signed in, while providing a reliable way to identify users across sessions. Don't use personally identifiable information in user tokens. For more information, see [User token](https://www.algolia.com/doc/guides/sending-events/concepts/usertoken/).
     *
     * @return self
     */
    public function setAuthenticatedUserToken($authenticatedUserToken)
    {
        if (!is_null($authenticatedUserToken) && (mb_strlen($authenticatedUserToken) > 129)) {
            throw new \InvalidArgumentException('invalid length for $authenticatedUserToken when calling PurchasedObjectIDs., must be smaller than or equal to 129.');
        }
        if (!is_null($authenticatedUserToken) && (mb_strlen($authenticatedUserToken) < 1)) {
            throw new \InvalidArgumentException('invalid length for $authenticatedUserToken when calling PurchasedObjectIDs., must be bigger than or equal to 1.');
        }
        if (!is_null($authenticatedUserToken) && (!preg_match('/[a-zA-Z0-9_=\\/+-]{1,129}/', $authenticatedUserToken))) {
            throw new \InvalidArgumentException("invalid value for {$authenticatedUserToken} when calling PurchasedObjectIDs., must conform to the pattern /[a-zA-Z0-9_=\\/+-]{1,129}/.");
        }

        $this->container['authenticatedUserToken'] = $authenticatedUserToken;

        return $this;
    }

    /**
     * Gets currency.
     *
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->container['currency'] ?? null;
    }

    /**
     * Sets currency.
     *
     * @param null|string $currency Three-letter [currency code](https://www.iso.org/iso-4217-currency-codes.html).
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets objectData.
     *
     * @return null|\Algolia\AlgoliaSearch\Model\Insights\ObjectData[]
     */
    public function getObjectData()
    {
        return $this->container['objectData'] ?? null;
    }

    /**
     * Sets objectData.
     *
     * @param null|\Algolia\AlgoliaSearch\Model\Insights\ObjectData[] $objectData Extra information about the records involved in a purchase or add-to-cart event.  If specified, it must have the same length as `objectIDs`.
     *
     * @return self
     */
    public function setObjectData($objectData)
    {
        if (!is_null($objectData) && (count($objectData) > 20)) {
            throw new \InvalidArgumentException('invalid value for $objectData when calling PurchasedObjectIDs., number of items must be less than or equal to 20.');
        }
        if (!is_null($objectData) && (count($objectData) < 1)) {
            throw new \InvalidArgumentException('invalid length for $objectData when calling PurchasedObjectIDs., number of items must be greater than or equal to 1.');
        }
        $this->container['objectData'] = $objectData;

        return $this;
    }

    /**
     * Gets timestamp.
     *
     * @return null|int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'] ?? null;
    }

    /**
     * Sets timestamp.
     *
     * @param null|int $timestamp Timestamp of the event, measured in milliseconds since the Unix epoch. By default, the Insights API uses the time it receives an event as its timestamp.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets value.
     *
     * @return null|Value
     */
    public function getValue()
    {
        return $this->container['value'] ?? null;
    }

    /**
     * Sets value.
     *
     * @param null|Value $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
