<?php

// This file is generated, manual changes will be lost - read more on https://github.com/algolia/api-clients-automation.

namespace Algolia\AlgoliaSearch\Api;

use Algolia\AlgoliaSearch\Algolia;
use Algolia\AlgoliaSearch\Configuration\AbtestingConfig;
use Algolia\AlgoliaSearch\ObjectSerializer;
use Algolia\AlgoliaSearch\RetryStrategy\ApiWrapper;
use Algolia\AlgoliaSearch\RetryStrategy\ApiWrapperInterface;
use Algolia\AlgoliaSearch\RetryStrategy\ClusterHosts;

/**
 * AbtestingClient Class Doc Comment
 *
 * @category Class
 * @package  Algolia\AlgoliaSearch
 */
class AbtestingClient
{
    /**
     * @var ApiWrapperInterface
     */
    protected $api;

    /**
     * @var AbtestingConfig
     */
    protected $config;

    /**
     * @param AbtestingConfig $config
     * @param ApiWrapperInterface $apiWrapper
     */
    public function __construct(
        ApiWrapperInterface $apiWrapper,
        AbtestingConfig $config
    ) {
        $this->config = $config;
        $this->api = $apiWrapper;
    }

    /**
     * Instantiate the client with basic credentials and region
     *
     * @param string $appId  Application ID
     * @param string $apiKey Algolia API Key
     * @param string $region Region
     */
    public static function create($appId = null, $apiKey = null, $region = null)
    {
        $allowedRegions = self::getAllowedRegions();
        $config = AbtestingConfig::create(
            $appId,
            $apiKey,
            $region,
            $allowedRegions
        );

        return static::createWithConfig($config);
    }

    /**
     * Returns the allowed regions for the config
     */
    public static function getAllowedRegions()
    {
        return ['de', 'us'];
    }

    /**
     * Instantiate the client with configuration
     *
     * @param AbtestingConfig $config Configuration
     */
    public static function createWithConfig(AbtestingConfig $config)
    {
        $config = clone $config;

        $apiWrapper = new ApiWrapper(
            Algolia::getHttpClient(),
            $config,
            self::getClusterHosts($config)
        );

        return new static($apiWrapper, $config);
    }

    /**
     * Gets the cluster hosts depending on the config
     *
     * @param AbtestingConfig $config
     *
     * @return ClusterHosts
     */
    public static function getClusterHosts(AbtestingConfig $config)
    {
        if ($hosts = $config->getHosts()) {
            // If a list of hosts was passed, we ignore the cache
            $clusterHosts = ClusterHosts::create($hosts);
        } else {
            $url =
                $config->getRegion() !== null && $config->getRegion() !== ''
                    ? str_replace(
                        '{region}',
                        $config->getRegion(),
                        'analytics.{region}.algolia.com'
                    )
                    : 'analytics.algolia.com';
            $clusterHosts = ClusterHosts::create($url);
        }

        return $clusterHosts;
    }

    /**
     * @return AbtestingConfig
     */
    public function getClientConfig()
    {
        return $this->config;
    }

    /**
     * Create a test.
     *
     * @param array $addABTestsRequest addABTestsRequest (required)
     * - $addABTestsRequest['name'] => (string) A/B test name. (required)
     * - $addABTestsRequest['variant'] => (array) List of 2 variants for the A/B test. (required)
     * - $addABTestsRequest['endAt'] => (string) End date for the A/B test expressed as YYYY-MM-DDThh:mm:ssZ. (required)
     *
     * @see \Algolia\AlgoliaSearch\Model\Abtesting\AddABTestsRequest
     *
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\Abtesting\ABTestResponse
     */
    public function addABTests($addABTestsRequest, $requestOptions = [])
    {
        // verify the required parameter 'addABTestsRequest' is set
        if ($addABTestsRequest === null) {
            throw new \InvalidArgumentException(
                'Parameter `addABTestsRequest` is required when calling `addABTests`.'
            );
        }

        $resourcePath = '/2/abtests';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        if (isset($addABTestsRequest)) {
            $httpBody = $addABTestsRequest;
        }

        return $this->sendRequest(
            'POST',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    /**
     * Send requests to the Algolia REST API.
     *
     * @param string $path The path of the API endpoint to target, anything after the /1 needs to be specified. (required)
     * @param array $parameters Query parameters to be applied to the current query. (optional)
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|object
     */
    public function del($path, $parameters = null, $requestOptions = [])
    {
        // verify the required parameter 'path' is set
        if ($path === null) {
            throw new \InvalidArgumentException(
                'Parameter `path` is required when calling `del`.'
            );
        }

        $resourcePath = '/1{path}';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        if ($parameters !== null) {
            $queryParameters = $parameters;
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace('{path}', $path, $resourcePath);
        }

        return $this->sendRequest(
            'DELETE',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    /**
     * Delete a test.
     *
     * @param int $id The A/B test ID. (required)
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\Abtesting\ABTestResponse
     */
    public function deleteABTest($id, $requestOptions = [])
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException(
                'Parameter `id` is required when calling `deleteABTest`.'
            );
        }

        $resourcePath = '/2/abtests/{id}';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{id}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        return $this->sendRequest(
            'DELETE',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    /**
     * Send requests to the Algolia REST API.
     *
     * @param string $path The path of the API endpoint to target, anything after the /1 needs to be specified. (required)
     * @param array $parameters Query parameters to be applied to the current query. (optional)
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|object
     */
    public function get($path, $parameters = null, $requestOptions = [])
    {
        // verify the required parameter 'path' is set
        if ($path === null) {
            throw new \InvalidArgumentException(
                'Parameter `path` is required when calling `get`.'
            );
        }

        $resourcePath = '/1{path}';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        if ($parameters !== null) {
            $queryParameters = $parameters;
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace('{path}', $path, $resourcePath);
        }

        return $this->sendRequest(
            'GET',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    /**
     * Get a test.
     *
     * @param int $id The A/B test ID. (required)
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\Abtesting\ABTest
     */
    public function getABTest($id, $requestOptions = [])
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException(
                'Parameter `id` is required when calling `getABTest`.'
            );
        }

        $resourcePath = '/2/abtests/{id}';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{id}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        return $this->sendRequest(
            'GET',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    /**
     * List all tests.
     *
     * @param int $offset Position of the starting record. Used for paging. 0 is the first record. (optional, default to 0)
     * @param int $limit Number of records to return. Limit is the size of the page. (optional, default to 10)
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\Abtesting\ListABTestsResponse
     */
    public function listABTests(
        $offset = null,
        $limit = null,
        $requestOptions = []
    ) {
        $resourcePath = '/2/abtests';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        if ($offset !== null) {
            $queryParameters['offset'] = $offset;
        }

        if ($limit !== null) {
            $queryParameters['limit'] = $limit;
        }

        return $this->sendRequest(
            'GET',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    /**
     * Send requests to the Algolia REST API.
     *
     * @param string $path The path of the API endpoint to target, anything after the /1 needs to be specified. (required)
     * @param array $parameters Query parameters to be applied to the current query. (optional)
     * @param array $body The parameters to send with the custom request. (optional)
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|object
     */
    public function post(
        $path,
        $parameters = null,
        $body = null,
        $requestOptions = []
    ) {
        // verify the required parameter 'path' is set
        if ($path === null) {
            throw new \InvalidArgumentException(
                'Parameter `path` is required when calling `post`.'
            );
        }

        $resourcePath = '/1{path}';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        if ($parameters !== null) {
            $queryParameters = $parameters;
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace('{path}', $path, $resourcePath);
        }

        if (isset($body)) {
            $httpBody = $body;
        }

        return $this->sendRequest(
            'POST',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    /**
     * Send requests to the Algolia REST API.
     *
     * @param string $path The path of the API endpoint to target, anything after the /1 needs to be specified. (required)
     * @param array $parameters Query parameters to be applied to the current query. (optional)
     * @param array $body The parameters to send with the custom request. (optional)
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|object
     */
    public function put(
        $path,
        $parameters = null,
        $body = null,
        $requestOptions = []
    ) {
        // verify the required parameter 'path' is set
        if ($path === null) {
            throw new \InvalidArgumentException(
                'Parameter `path` is required when calling `put`.'
            );
        }

        $resourcePath = '/1{path}';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        if ($parameters !== null) {
            $queryParameters = $parameters;
        }

        // path params
        if ($path !== null) {
            $resourcePath = str_replace('{path}', $path, $resourcePath);
        }

        if (isset($body)) {
            $httpBody = $body;
        }

        return $this->sendRequest(
            'PUT',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    /**
     * Stop a test.
     *
     * @param int $id The A/B test ID. (required)
     * @param array $requestOptions the requestOptions to send along with the query, they will be merged with the transporter requestOptions
     *
     * @return array<string, mixed>|\Algolia\AlgoliaSearch\Model\Abtesting\ABTestResponse
     */
    public function stopABTest($id, $requestOptions = [])
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException(
                'Parameter `id` is required when calling `stopABTest`.'
            );
        }

        $resourcePath = '/2/abtests/{id}/stop';
        $queryParameters = [];
        $headers = [];
        $httpBody = [];

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{id}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        return $this->sendRequest(
            'POST',
            $resourcePath,
            $headers,
            $queryParameters,
            $httpBody,
            $requestOptions
        );
    }

    private function sendRequest(
        $method,
        $resourcePath,
        $headers,
        $queryParameters,
        $httpBody,
        $requestOptions,
        $useReadTransporter = false
    ) {
        if (!isset($requestOptions['headers'])) {
            $requestOptions['headers'] = [];
        }
        if (!isset($requestOptions['queryParameters'])) {
            $requestOptions['queryParameters'] = [];
        }

        $requestOptions['headers'] = array_merge(
            $headers,
            $requestOptions['headers']
        );
        $requestOptions['queryParameters'] = array_merge(
            $queryParameters,
            $requestOptions['queryParameters']
        );
        $query = \GuzzleHttp\Psr7\Query::build(
            $requestOptions['queryParameters']
        );

        return $this->api->sendRequest(
            $method,
            $resourcePath . ($query ? "?{$query}" : ''),
            $httpBody,
            $requestOptions,
            $useReadTransporter
        );
    }
}
