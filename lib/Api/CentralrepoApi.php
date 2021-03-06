<?php
/**
 * CentralrepoApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
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

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * CentralrepoApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CentralrepoApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return CentralrepoApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation centralrepoManagev1centralrepogetCategories
     *
     * Create user
     *
     * @param int $node_id ID of the currently selected category, if not set, the root is selected (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageCentralrepoGetCategoriesResponse
     */
    public function centralrepoManagev1centralrepogetCategories($node_id = null)
    {
        list($response) = $this->centralrepoManagev1centralrepogetCategoriesWithHttpInfo($node_id);
        return $response;
    }

    /**
     * Operation centralrepoManagev1centralrepogetCategoriesWithHttpInfo
     *
     * Create user
     *
     * @param int $node_id ID of the currently selected category, if not set, the root is selected (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageCentralrepoGetCategoriesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function centralrepoManagev1centralrepogetCategoriesWithHttpInfo($node_id = null)
    {
        // parse inputs
        $resourcePath = "/manage/v1/centralrepo/get_categories";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($node_id !== null) {
            $queryParams['node_id'] = $this->apiClient->getSerializer()->toQueryValue($node_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageCentralrepoGetCategoriesResponse',
                '/manage/v1/centralrepo/get_categories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageCentralrepoGetCategoriesResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageCentralrepoGetCategoriesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation centralrepoManagev1centralrepogetImportedObjects
     *
     * Get a list of already imported objects for a specific CSP or all CSP's.
     *
     * @param int $provider_id Internal ID for the desired CSP. If left blank, all objects linked to a CSP will be returned (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageCentralrepoGetImportedObjectsResponse
     */
    public function centralrepoManagev1centralrepogetImportedObjects($provider_id = null)
    {
        list($response) = $this->centralrepoManagev1centralrepogetImportedObjectsWithHttpInfo($provider_id);
        return $response;
    }

    /**
     * Operation centralrepoManagev1centralrepogetImportedObjectsWithHttpInfo
     *
     * Get a list of already imported objects for a specific CSP or all CSP's.
     *
     * @param int $provider_id Internal ID for the desired CSP. If left blank, all objects linked to a CSP will be returned (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageCentralrepoGetImportedObjectsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function centralrepoManagev1centralrepogetImportedObjectsWithHttpInfo($provider_id = null)
    {
        // parse inputs
        $resourcePath = "/manage/v1/centralrepo/get_imported_objects";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($provider_id !== null) {
            $queryParams['provider_id'] = $this->apiClient->getSerializer()->toQueryValue($provider_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ManageCentralrepoGetImportedObjectsResponse',
                '/manage/v1/centralrepo/get_imported_objects'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageCentralrepoGetImportedObjectsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageCentralrepoGetImportedObjectsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
