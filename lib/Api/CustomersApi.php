<?php
/**
 * CustomersApi
 * PHP version 5
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @link     https://squareup.com/developers
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */

/**
 * Square Connect API
 *
 * Client library for accessing the Square Connect APIs
 *
 * OpenAPI spec version: 2.0
 * Contact: developers@squareup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Api;

use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\Configuration;
use \SquareConnect\ObjectSerializer;

/**
 * CustomersApi Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @link     https://squareup.com/developers
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 */
class CustomersApi
{
    /**
     * API Client
     *
     * @var \SquareConnect\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SquareConnect\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SquareConnect\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SquareConnect\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SquareConnect\ApiClient $apiClient set the API client
     *
     * @return CustomersApi
     */
    public function setApiClient(\SquareConnect\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createCustomer
     *
     * CreateCustomer
     *
     * @param \SquareConnect\Model\CreateCustomerRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\CreateCustomerResponse
     */
    public function createCustomer($body)
    {
        list($response) = $this->createCustomerWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createCustomerWithHttpInfo
     *
     * CreateCustomer
     *
     * @param \SquareConnect\Model\CreateCustomerRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\CreateCustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCustomerWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createCustomer');
        }
        // parse inputs
        $resourcePath = "/v2/customers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                '\SquareConnect\Model\CreateCustomerResponse',
                '/v2/customers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\CreateCustomerResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\CreateCustomerResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createCustomerCard
     *
     * CreateCustomerCard
     *
     * @param string $customer_id The ID of the customer to link the card on file to. (required)
     * @param \SquareConnect\Model\CreateCustomerCardRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\CreateCustomerCardResponse
     */
    public function createCustomerCard($customer_id, $body)
    {
        list($response) = $this->createCustomerCardWithHttpInfo($customer_id, $body);
        return $response;
    }

    /**
     * Operation createCustomerCardWithHttpInfo
     *
     * CreateCustomerCard
     *
     * @param string $customer_id The ID of the customer to link the card on file to. (required)
     * @param \SquareConnect\Model\CreateCustomerCardRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\CreateCustomerCardResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCustomerCardWithHttpInfo($customer_id, $body)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling createCustomerCard');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createCustomerCard');
        }
        // parse inputs
        $resourcePath = "/v2/customers/{customer_id}/cards";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }
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
                '\SquareConnect\Model\CreateCustomerCardResponse',
                '/v2/customers/{customer_id}/cards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\CreateCustomerCardResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\CreateCustomerCardResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteCustomer
     *
     * DeleteCustomer
     *
     * @param string $customer_id The ID of the customer to delete. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\DeleteCustomerResponse
     */
    public function deleteCustomer($customer_id)
    {
        list($response) = $this->deleteCustomerWithHttpInfo($customer_id);
        return $response;
    }

    /**
     * Operation deleteCustomerWithHttpInfo
     *
     * DeleteCustomer
     *
     * @param string $customer_id The ID of the customer to delete. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\DeleteCustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCustomerWithHttpInfo($customer_id)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling deleteCustomer');
        }
        // parse inputs
        $resourcePath = "/v2/customers/{customer_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
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
                '\SquareConnect\Model\DeleteCustomerResponse',
                '/v2/customers/{customer_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\DeleteCustomerResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\DeleteCustomerResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteCustomerCard
     *
     * DeleteCustomerCard
     *
     * @param string $customer_id The ID of the customer that the card on file belongs to. (required)
     * @param string $card_id The ID of the card on file to delete. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\DeleteCustomerCardResponse
     */
    public function deleteCustomerCard($customer_id, $card_id)
    {
        list($response) = $this->deleteCustomerCardWithHttpInfo($customer_id, $card_id);
        return $response;
    }

    /**
     * Operation deleteCustomerCardWithHttpInfo
     *
     * DeleteCustomerCard
     *
     * @param string $customer_id The ID of the customer that the card on file belongs to. (required)
     * @param string $card_id The ID of the card on file to delete. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\DeleteCustomerCardResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCustomerCardWithHttpInfo($customer_id, $card_id)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling deleteCustomerCard');
        }
        // verify the required parameter 'card_id' is set
        if ($card_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $card_id when calling deleteCustomerCard');
        }
        // parse inputs
        $resourcePath = "/v2/customers/{customer_id}/cards/{card_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }
        // path params
        if ($card_id !== null) {
            $resourcePath = str_replace(
                "{" . "card_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($card_id),
                $resourcePath
            );
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
                '\SquareConnect\Model\DeleteCustomerCardResponse',
                '/v2/customers/{customer_id}/cards/{card_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\DeleteCustomerCardResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\DeleteCustomerCardResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listCustomers
     *
     * ListCustomers
     *
     * @param string $cursor A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. (optional)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\ListCustomersResponse
     */
    public function listCustomers($cursor = null)
    {
        list($response) = $this->listCustomersWithHttpInfo($cursor);
        return $response;
    }

    /**
     * Operation listCustomersWithHttpInfo
     *
     * ListCustomers
     *
     * @param string $cursor A pagination cursor returned by a previous call to this endpoint. Provide this to retrieve the next set of results for your original query.  See [Paginating results](#paginatingresults) for more information. (optional)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\ListCustomersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listCustomersWithHttpInfo($cursor = null)
    {
        // parse inputs
        $resourcePath = "/v2/customers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = $this->apiClient->getSerializer()->toQueryValue($cursor);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SquareConnect\Model\ListCustomersResponse',
                '/v2/customers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\ListCustomersResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\ListCustomersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveCustomer
     *
     * RetrieveCustomer
     *
     * @param string $customer_id The ID of the customer to retrieve. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\RetrieveCustomerResponse
     */
    public function retrieveCustomer($customer_id)
    {
        list($response) = $this->retrieveCustomerWithHttpInfo($customer_id);
        return $response;
    }

    /**
     * Operation retrieveCustomerWithHttpInfo
     *
     * RetrieveCustomer
     *
     * @param string $customer_id The ID of the customer to retrieve. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\RetrieveCustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveCustomerWithHttpInfo($customer_id)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling retrieveCustomer');
        }
        // parse inputs
        $resourcePath = "/v2/customers/{customer_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SquareConnect\Model\RetrieveCustomerResponse',
                '/v2/customers/{customer_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\RetrieveCustomerResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\RetrieveCustomerResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateCustomer
     *
     * UpdateCustomer
     *
     * @param string $customer_id The ID of the customer to update. (required)
     * @param \SquareConnect\Model\UpdateCustomerRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\UpdateCustomerResponse
     */
    public function updateCustomer($customer_id, $body)
    {
        list($response) = $this->updateCustomerWithHttpInfo($customer_id, $body);
        return $response;
    }

    /**
     * Operation updateCustomerWithHttpInfo
     *
     * UpdateCustomer
     *
     * @param string $customer_id The ID of the customer to update. (required)
     * @param \SquareConnect\Model\UpdateCustomerRequest $body An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\UpdateCustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCustomerWithHttpInfo($customer_id, $body)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling updateCustomer');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateCustomer');
        }
        // parse inputs
        $resourcePath = "/v2/customers/{customer_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }
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
                '\SquareConnect\Model\UpdateCustomerResponse',
                '/v2/customers/{customer_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\UpdateCustomerResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\UpdateCustomerResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
