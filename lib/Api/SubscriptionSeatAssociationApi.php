<?php
/**
 * SubscriptionSeatAssociationApi
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
 * SubscriptionSeatAssociationApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionSeatAssociationApi
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
     * @return SubscriptionSeatAssociationApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociation
     *
     * Retrieves all subscription seat associations, filtered on input parameters
     *
     * @param int $record_id Filter returned seats by subscription record (optional)
     * @param string[] $record_name Search text in the record name. Default empty array. OR is performed across array items (optional)
     * @param string $sort_attr Sort by this field, default value - id. Options: date, status, id (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @param int $seat_status Can get the following values: 1: &amp;quot;in_use&amp;quot;, 2: &amp;quot;expired&amp;quot;, 3: &amp;quot;cancelled&amp;quot;. Default value-&amp;gt; all (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionseatassociationIndexResponse
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociation($record_id = null, $record_name = null, $sort_attr = null, $sort_dir = null, $page = null, $page_size = null, $get_total_count = null, $seat_status = null)
    {
        list($response) = $this->subscriptionSeatAssociationLearnv1subSeatAssociationWithHttpInfo($record_id, $record_name, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $seat_status);
        return $response;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationWithHttpInfo
     *
     * Retrieves all subscription seat associations, filtered on input parameters
     *
     * @param int $record_id Filter returned seats by subscription record (optional)
     * @param string[] $record_name Search text in the record name. Default empty array. OR is performed across array items (optional)
     * @param string $sort_attr Sort by this field, default value - id. Options: date, status, id (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @param int $seat_status Can get the following values: 1: &amp;quot;in_use&amp;quot;, 2: &amp;quot;expired&amp;quot;, 3: &amp;quot;cancelled&amp;quot;. Default value-&amp;gt; all (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionseatassociationIndexResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationWithHttpInfo($record_id = null, $record_name = null, $sort_attr = null, $sort_dir = null, $page = null, $page_size = null, $get_total_count = null, $seat_status = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_seat_association";
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
        if ($record_id !== null) {
            $queryParams['record_id'] = $this->apiClient->getSerializer()->toQueryValue($record_id);
        }
        // query params
        if (is_array($record_name)) {
            $record_name = $this->apiClient->getSerializer()->serializeCollection($record_name, 'brackets', true);
        }
        if ($record_name !== null) {
            $queryParams['record_name'] = $this->apiClient->getSerializer()->toQueryValue($record_name);
        }
        // query params
        if ($sort_attr !== null) {
            $queryParams['sort_attr'] = $this->apiClient->getSerializer()->toQueryValue($sort_attr);
        }
        // query params
        if ($sort_dir !== null) {
            $queryParams['sort_dir'] = $this->apiClient->getSerializer()->toQueryValue($sort_dir);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($get_total_count !== null) {
            $queryParams['get_total_count'] = $this->apiClient->getSerializer()->toQueryValue($get_total_count);
        }
        // query params
        if ($seat_status !== null) {
            $queryParams['seat_status'] = $this->apiClient->getSerializer()->toQueryValue($seat_status);
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
                '\Swagger\Client\Model\LearnSubscriptionseatassociationIndexResponse',
                '/learn/v1/sub_seat_association'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionseatassociationIndexResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionseatassociationIndexResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociation_0
     *
     * Creates a new subscription seat association
     *
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionseatassociationCreateResponse
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociation_0($body = null)
    {
        list($response) = $this->subscriptionSeatAssociationLearnv1subSeatAssociation_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociation_0WithHttpInfo
     *
     * Creates a new subscription seat association
     *
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationCreateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionseatassociationCreateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociation_0WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_seat_association";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LearnSubscriptionseatassociationCreateResponse',
                '/learn/v1/sub_seat_association'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionseatassociationCreateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionseatassociationCreateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociation_1
     *
     * Deletes one or more subscription seat associations
     *
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationDeleteSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionseatassociationDeleteResponse
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociation_1($body = null)
    {
        list($response) = $this->subscriptionSeatAssociationLearnv1subSeatAssociation_1WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociation_1WithHttpInfo
     *
     * Deletes one or more subscription seat associations
     *
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationDeleteSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionseatassociationDeleteResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociation_1WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_seat_association";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LearnSubscriptionseatassociationDeleteResponse',
                '/learn/v1/sub_seat_association'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionseatassociationDeleteResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionseatassociationDeleteResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationbatch
     *
     * Batch import for subscription seat association
     *
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationBatchSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionseatassociationBatchResponse
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationbatch($body = null)
    {
        list($response) = $this->subscriptionSeatAssociationLearnv1subSeatAssociationbatchWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationbatchWithHttpInfo
     *
     * Batch import for subscription seat association
     *
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationBatchSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionseatassociationBatchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationbatchWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_seat_association/batch";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LearnSubscriptionseatassociationBatchResponse',
                '/learn/v1/sub_seat_association/batch'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionseatassociationBatchResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionseatassociationBatchResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationmultiple
     *
     * Creates a new subscription seat association
     *
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleResponse
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationmultiple($body = null)
    {
        list($response) = $this->subscriptionSeatAssociationLearnv1subSeatAssociationmultipleWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationmultipleWithHttpInfo
     *
     * Creates a new subscription seat association
     *
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationmultipleWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/learn/v1/sub_seat_association/multiple";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleResponse',
                '/learn/v1/sub_seat_association/multiple'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationseatId
     *
     * View a subscription seat association
     *
     * @param int $seat_id ID of the seat association (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionseatassociationViewResponse
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationseatId($seat_id)
    {
        list($response) = $this->subscriptionSeatAssociationLearnv1subSeatAssociationseatIdWithHttpInfo($seat_id);
        return $response;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationseatIdWithHttpInfo
     *
     * View a subscription seat association
     *
     * @param int $seat_id ID of the seat association (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionseatassociationViewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationseatIdWithHttpInfo($seat_id)
    {
        // verify the required parameter 'seat_id' is set
        if ($seat_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $seat_id when calling subscriptionSeatAssociationLearnv1subSeatAssociationseatId');
        }
        // parse inputs
        $resourcePath = "/learn/v1/sub_seat_association/{seat_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($seat_id !== null) {
            $resourcePath = str_replace(
                "{" . "seat_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($seat_id),
                $resourcePath
            );
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
                '\Swagger\Client\Model\LearnSubscriptionseatassociationViewResponse',
                '/learn/v1/sub_seat_association/{seat_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionseatassociationViewResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionseatassociationViewResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0
     *
     * Update a subscription seat association
     *
     * @param int $seat_id ID of the seat association (required)
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionseatassociationUpdateResponse
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0($seat_id, $body = null)
    {
        list($response) = $this->subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0WithHttpInfo($seat_id, $body);
        return $response;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0WithHttpInfo
     *
     * Update a subscription seat association
     *
     * @param int $seat_id ID of the seat association (required)
     * @param \Swagger\Client\Model\LearnSubscriptionseatassociationUpdateSchema $body Raw Body (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionseatassociationUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0WithHttpInfo($seat_id, $body = null)
    {
        // verify the required parameter 'seat_id' is set
        if ($seat_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $seat_id when calling subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0');
        }
        // parse inputs
        $resourcePath = "/learn/v1/sub_seat_association/{seat_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($seat_id !== null) {
            $resourcePath = str_replace(
                "{" . "seat_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($seat_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\LearnSubscriptionseatassociationUpdateResponse',
                '/learn/v1/sub_seat_association/{seat_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionseatassociationUpdateResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionseatassociationUpdateResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId
     *
     * Retrieves all subscription seat associations, filtered on input parameters
     *
     * @param int $user_id User ID (required)
     * @param string $sort_attr Sort by this field, default value - id. Options: date, status, id (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\LearnSubscriptionseatassociationListSeatsByUserResponse
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId($user_id, $sort_attr = null, $sort_dir = null, $page = null, $page_size = null, $get_total_count = null)
    {
        list($response) = $this->subscriptionSeatAssociationLearnv1subSeatAssociationuseruserIdWithHttpInfo($user_id, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
        return $response;
    }

    /**
     * Operation subscriptionSeatAssociationLearnv1subSeatAssociationuseruserIdWithHttpInfo
     *
     * Retrieves all subscription seat associations, filtered on input parameters
     *
     * @param int $user_id User ID (required)
     * @param string $sort_attr Sort by this field, default value - id. Options: date, status, id (optional)
     * @param string $sort_dir Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc (optional)
     * @param int $page Page to return, default 1 (optional)
     * @param int $page_size Maximum number of results per page, default 200 (optional)
     * @param int $get_total_count If 1 the count of found items will be returned. Options: 0, 1 default 0 (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\LearnSubscriptionseatassociationListSeatsByUserResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionSeatAssociationLearnv1subSeatAssociationuseruserIdWithHttpInfo($user_id, $sort_attr = null, $sort_dir = null, $page = null, $page_size = null, $get_total_count = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId');
        }
        // parse inputs
        $resourcePath = "/learn/v1/sub_seat_association/user/{user_id}";
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
        if ($sort_attr !== null) {
            $queryParams['sort_attr'] = $this->apiClient->getSerializer()->toQueryValue($sort_attr);
        }
        // query params
        if ($sort_dir !== null) {
            $queryParams['sort_dir'] = $this->apiClient->getSerializer()->toQueryValue($sort_dir);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($get_total_count !== null) {
            $queryParams['get_total_count'] = $this->apiClient->getSerializer()->toQueryValue($get_total_count);
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "user_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id),
                $resourcePath
            );
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
                '\Swagger\Client\Model\LearnSubscriptionseatassociationListSeatsByUserResponse',
                '/learn/v1/sub_seat_association/user/{user_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\LearnSubscriptionseatassociationListSeatsByUserResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\LearnSubscriptionseatassociationListSeatsByUserResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}