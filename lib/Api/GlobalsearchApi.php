<?php
/**
 * GlobalsearchApi
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
 * GlobalsearchApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GlobalsearchApi
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
     * @return GlobalsearchApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation globalsearchManagev1globalsearchsearch
     *
     * Elastic Search
     *
     * @param string $criteria Text to search (optional)
     * @param int $page_size Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are returned (optional)
     * @param string $type What type of assets are searched | EsAgentKnowledgeAsset | EsAgentCourse | EsAgentLo | EsAgentPlan | EsAgentQandA | all (optional)
     * @param int $from like pagination from which item to display (optional)
     * @param string $search_type Type of the search | suggestions | results (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ManageGlobalsearchSearchResponse
     */
    public function globalsearchManagev1globalsearchsearch($criteria = null, $page_size = null, $type = null, $from = null, $search_type = null)
    {
        list($response) = $this->globalsearchManagev1globalsearchsearchWithHttpInfo($criteria, $page_size, $type, $from, $search_type);
        return $response;
    }

    /**
     * Operation globalsearchManagev1globalsearchsearchWithHttpInfo
     *
     * Elastic Search
     *
     * @param string $criteria Text to search (optional)
     * @param int $page_size Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are returned (optional)
     * @param string $type What type of assets are searched | EsAgentKnowledgeAsset | EsAgentCourse | EsAgentLo | EsAgentPlan | EsAgentQandA | all (optional)
     * @param int $from like pagination from which item to display (optional)
     * @param string $search_type Type of the search | suggestions | results (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ManageGlobalsearchSearchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function globalsearchManagev1globalsearchsearchWithHttpInfo($criteria = null, $page_size = null, $type = null, $from = null, $search_type = null)
    {
        // parse inputs
        $resourcePath = "/manage/v1/globalsearch/search";
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
        if ($criteria !== null) {
            $queryParams['criteria'] = $this->apiClient->getSerializer()->toQueryValue($criteria);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = $this->apiClient->getSerializer()->toQueryValue($from);
        }
        // query params
        if ($search_type !== null) {
            $queryParams['search_type'] = $this->apiClient->getSerializer()->toQueryValue($search_type);
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
                '\Swagger\Client\Model\ManageGlobalsearchSearchResponse',
                '/manage/v1/globalsearch/search'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ManageGlobalsearchSearchResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ManageGlobalsearchSearchResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}