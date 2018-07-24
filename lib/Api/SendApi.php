<?php
/**
 * SendApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bitcoin API
 *
 * Blockchain Facilities
 *
 * OpenAPI spec version: 2.0.0
 * Contact: contato@astarlabs.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AStar\Client\Api;

use \AStar\Client\ApiClient;
use \AStar\Client\ApiException;
use \AStar\Client\Configuration;
use \AStar\Client\ObjectSerializer;

/**
 * SendApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendApi
{
    /**
     * API Client
     *
     * @var \AStar\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \AStar\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\AStar\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \AStar\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \AStar\Client\ApiClient $apiClient set the API client
     *
     * @return SendApi
     */
    public function setApiClient(\AStar\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation sendFile
     *
     * Send file hash to bitcoin blockchain
     *
     * @param string $token a signed JWT token with the company privatekey. (required)
     * @param int $account API ID for Account where the blockchainNetworks must be spend. (required)
     * @param string $user API user name. (required)
     * @param string $pass API user password. (required)
     * @param string $base64 base64 encoded file. (required)
     * @param string $blockchainNetwork the blockchainNetwork name - bitcoin/litecoin. (required)
     * @param int $test if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. (required)
     * @param bool $isForce force to register param
     * @throws \AStar\Client\ApiException on non-2xx response
     * @return \AStar\Client\Model\SingleResult
     */
    public function sendFile($token, $account, $user, $pass, $base64, $blockchainNetwork, $test, $isForce)
    {
        list($response) = $this->sendFileWithHttpInfo($token, $account, $user, $pass, $base64, $blockchainNetwork, $test, $isForce);
        return $response;
    }

    /**
     * Operation sendFileWithHttpInfo
     * Update to v2.0.0
     * 
     *
     * @param string $token a signed JWT token with the company privatekey. (required)
     * @param int $account API ID for Account where the coins must be spend. (required)
     * @param string $user API user name. (required)
     * @param string $pass API user password. (required)
     * @param string $base64 base64 encoded file. (required)
     * @param string $blockchainNetwork the blockchainNetwork name - bitcoin/litecoin. (required)
     * @param int $test if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. (required)
     * @param bool $isForce re-register file if isForce is true
     * @throws \AStar\Client\ApiException on non-2xx response
     * @return array of \AStar\Client\Model\SingleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendFileWithHttpInfo($token, $account, $user, $pass, $base64, $blockchainNetwork, $test, $isForce)
    {
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling sendFile');
        }
        // verify the required parameter 'account' is set
        if ($account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account when calling sendFile');
        }
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling sendFile');
        }
        // verify the required parameter 'pass' is set
        if ($pass === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pass when calling sendFile');
        }
        // verify the required parameter 'base64' is set
        if ($base64 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $base64 when calling sendFile');
        }
        // verify the required parameter 'blockchainNetwork' is set
        if ($blockchainNetwork === null) {
            throw new \InvalidArgumentException('Missing the required parameter $blockchainNetwork when calling sendFile');
        }
        // verify the required parameter 'test' is set
        if ($test === null) {
            throw new \InvalidArgumentException('Missing the required parameter $test when calling sendFile');
        }


        // parse inputs
        $resourcePath = "/send/opreturn/base64";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // form params
        if ($token !== null) {
            $formParams['token'] = $this->apiClient->getSerializer()->toFormValue($token);
        }
        // form params
        if ($account !== null) {
            $formParams['account'] = $this->apiClient->getSerializer()->toFormValue($account);
        }
        // form params
        if ($user !== null) {
            $formParams['user'] = $this->apiClient->getSerializer()->toFormValue($user);
        }
        // form params
        if ($pass !== null) {
            $formParams['pass'] = $this->apiClient->getSerializer()->toFormValue($pass);
        }
        // form params
        if ($base64 !== null) {
            $formParams['base64'] = $this->apiClient->getSerializer()->toFormValue($base64);
        }
        // form params
        if ($blockchainNetwork !== null) {
            $formParams['blockchainNetwork'] = $this->apiClient->getSerializer()->toFormValue($blockchainNetwork);
        }
        // form params
        if ($test !== null) {
            $formParams['test'] = $this->apiClient->getSerializer()->toFormValue($test);
        }

        if($isForce !== null) {
            $formParams["force"] = $this->apiClient->getSerializer()->toFormValue($isForce === null ? false : $isForce);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AStar\Client\Model\SingleResult',
                '/send/opreturn/base64'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AStar\Client\Model\SingleResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AStar\Client\Model\SingleResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendHash
     * Update to v.2.0.0
     *
     * @param string $token a signed JWT token with the company privatekey. (required)
     * @param int $account API ID for Account where the blockchainNetworks must be spend. (required)
     * @param string $user API user name. (required)
     * @param string $pass API user password. (required)
     * @param string $hash hash to send. (required)
     * @param string $blockchainNetwork the blockchainNetwork name - bitcoin/litecoin. (required)
     * @param int $test if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. (required)
     * @param bool $isForce re-register file if isForce is true
     * @throws \AStar\Client\ApiException on non-2xx response
     * @return \AStar\Client\Model\SingleResult
     */
    public function sendHash($token, $account, $user, $pass, $hash, $blockchainNetwork, $test, $isForce)
    {
        list($response) = $this->sendHashWithHttpInfo($token, $account, $user, $pass, $hash, $blockchainNetwork, $test, $isForce);
        return $response;
    }

    /**
     * Operation sendHashWithHttpInfo
     * Update to v2.0.0
     *
     * @param string $token a signed JWT token with the company privatekey. (required)
     * @param int $account API ID for Account where the blockchainNetworks must be spend. (required)
     * @param string $user API user name. (required)
     * @param string $pass API user password. (required)
     * @param string $hash hash to send. (required)
     * @param string $blockchainNetwork the blockchainNetwork name - bitcoin/litecoin. (required)
     * @param int $test if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. (required)
     * @param bool $isForce for force register
     * @throws \AStar\Client\ApiException on non-2xx response
     * @return array of \AStar\Client\Model\SingleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendHashWithHttpInfo($token, $account, $user, $pass, $hash, $blockchainNetwork, $test, $isForce)
    {
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling sendHash');
        }
        // verify the required parameter 'account' is set
        if ($account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account when calling sendHash');
        }
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling sendHash');
        }
        // verify the required parameter 'pass' is set
        if ($pass === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pass when calling sendHash');
        }
        // verify the required parameter 'hash' is set
        if ($hash === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hash when calling sendHash');
        }
        // verify the required parameter 'blockchainNetwork' is set
        if ($blockchainNetwork === null) {
            throw new \InvalidArgumentException('Missing the required parameter $blockchainNetwork when calling sendHash');
        }
        // verify the required parameter 'test' is set
        if ($test === null) {
            throw new \InvalidArgumentException('Missing the required parameter $test when calling sendHash');
        }

        // parse inputs
        $resourcePath = "/send/opreturn/hash";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // form params
        if ($token !== null) {
            $formParams['token'] = $this->apiClient->getSerializer()->toFormValue($token);
        }
        // form params
        if ($account !== null) {
            $formParams['account'] = $this->apiClient->getSerializer()->toFormValue($account);
        }
        // form params
        if ($user !== null) {
            $formParams['user'] = $this->apiClient->getSerializer()->toFormValue($user);
        }
        // form params
        if ($pass !== null) {
            $formParams['pass'] = $this->apiClient->getSerializer()->toFormValue($pass);
        }
        // form params
        if ($hash !== null) {
            $formParams['hash'] = $this->apiClient->getSerializer()->toFormValue($hash);
        }
        // form params
        if ($blockchainNetwork !== null) {
            $formParams['blockchainNetwork'] = $this->apiClient->getSerializer()->toFormValue($blockchainNetwork);
        }
        // form params
        if ($test !== null) {
            $formParams['test'] = $this->apiClient->getSerializer()->toFormValue($test);
        }
        //form params
        if($isForce !== null) {
            $formParams["force"] = $this->apiClient->getSerializer()->toFormValue($isForce === null ? false : $isForce);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AStar\Client\Model\SingleResult',
                '/send/opreturn/hash'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AStar\Client\Model\SingleResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AStar\Client\Model\SingleResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendPayAddress
     *
     * Send a value for address
     *
     * @param string $token a signed JWT token with the company privatekey. (required)
     * @param int $account API ID for Account where the blockchainNetwors must be spend. (required)
     * @param string $user API user name. (required)
     * @param string $pass API user password. (required)
     * @param string $address Address to send the amount. (required)
     * @param float $amount Amount to send (required)
     * @param string $blockchainNetwork the blockchainNetwork name - bitcoin/litecoin. (required)
     * @param int $test if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. (required)
     * @throws \AStar\Client\ApiException on non-2xx response
     * @return \AStar\Client\Model\SingleResult
     */
    public function sendPayAddress($token, $account, $user, $pass, $address, $amount, $blockchainNetwork, $test)
    {
        list($response) = $this->sendPayAddressWithHttpInfo($token, $account, $user, $pass, $address, $amount, $blockchainNetwork, $test);
        return $response;
    }

    /**
     * Operation sendPayAddressWithHttpInfo
     *
     * Send a value for address
     *
     * @param string $token a signed JWT token with the company privatekey. (required)
     * @param int $account API ID for Account where the blockchainNetwors must be spend. (required)
     * @param string $user API user name. (required)
     * @param string $pass API user password. (required)
     * @param string $address Address to send the amount. (required)
     * @param float $amount Amount to send (required)
     * @param string $blockchainNetwork the blockchainNetwork name - bitcoin/litecoin. (required)
     * @param int $test if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. (required)
     * @throws \AStar\Client\ApiException on non-2xx response
     * @return array of \AStar\Client\Model\SingleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendPayAddressWithHttpInfo($token, $account, $user, $pass, $address, $amount, $blockchainNetwork, $test)
    {
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling sendPayAddress');
        }
        // verify the required parameter 'account' is set
        if ($account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account when calling sendPayAddress');
        }
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling sendPayAddress');
        }
        // verify the required parameter 'pass' is set
        if ($pass === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pass when calling sendPayAddress');
        }
        // verify the required parameter 'address' is set
        if ($address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address when calling sendPayAddress');
        }
        // verify the required parameter 'amount' is set
        if ($amount === null) {
            throw new \InvalidArgumentException('Missing the required parameter $amount when calling sendPayAddress');
        }
        // verify the required parameter 'blockchainNetwork' is set
        if ($blockchainNetwork === null) {
            throw new \InvalidArgumentException('Missing the required parameter $blockchainNetwork when calling sendPayAddress');
        }
        // verify the required parameter 'test' is set
        if ($test === null) {
            throw new \InvalidArgumentException('Missing the required parameter $test when calling sendPayAddress');
        }
        // parse inputs
        $resourcePath = "/send/payaddress";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // form params
        if ($token !== null) {
            $formParams['token'] = $this->apiClient->getSerializer()->toFormValue($token);
        }
        // form params
        if ($account !== null) {
            $formParams['account'] = $this->apiClient->getSerializer()->toFormValue($account);
        }
        // form params
        if ($user !== null) {
            $formParams['user'] = $this->apiClient->getSerializer()->toFormValue($user);
        }
        // form params
        if ($pass !== null) {
            $formParams['pass'] = $this->apiClient->getSerializer()->toFormValue($pass);
        }
        // form params
        if ($address !== null) {
            $formParams['address'] = $this->apiClient->getSerializer()->toFormValue($address);
        }
        // form params
        if ($amount !== null) {
            $formParams['amount'] = $this->apiClient->getSerializer()->toFormValue($amount);
        }
        // form params
        if ($blockchainNetwork !== null) {
            $formParams['blockchainNetwork'] = $this->apiClient->getSerializer()->toFormValue($blockchainNetwork);
        }
        // form params
        if ($test !== null) {
            $formParams['test'] = $this->apiClient->getSerializer()->toFormValue($test);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AStar\Client\Model\SingleResult',
                '/send/payaddress'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AStar\Client\Model\SingleResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AStar\Client\Model\SingleResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendString
     * Update v2.0.0
     *
     * @param string $token a signed JWT token with the company privatekey. (required)
     * @param int $account API ID for Account where the blockchainNetworks must be spend. (required)
     * @param string $user API user name. (required)
     * @param string $pass API user password. (required)
     * @param string $string string to send. (required)
     * @param string $blockchainNetwork the blockchainNetwork name - bitcoin/litecoin. (required)
     * @param int $test if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. (required)
     * @param bool $isForce force to register
     * @throws \AStar\Client\ApiException on non-2xx response
     * @return \AStar\Client\Model\SingleResult
     */
    public function sendString($token, $account, $user, $pass, $string, $blockchainNetwork, $test, $isForce)
    {
        list($response) = $this->sendStringWithHttpInfo($token, $account, $user, $pass, $string, $blockchainNetwork, $test, $isForce);
        return $response;
    }

    /**
     * Operation sendStringWithHttpInfo
     *
     * Send string to bitcoin blockchain
     *
     * @param string $token a signed JWT token with the company privatekey. (required)
     * @param int $account API ID for Account where the blockchainNetworks must be spend. (required)
     * @param string $user API user name. (required)
     * @param string $pass API user password. (required)
     * @param string $string string to send. (required)
     * @param string $blockchainNetwork the blockchainNetwork name - bitcoin/litecoin. (required)
     * @param int $test if test &#x3D; 1 so use testnet else test &#x3D; 0 for mainnet. (required)
     * @param bool $isforce force register
     * @throws \AStar\Client\ApiException on non-2xx response
     * @return array of \AStar\Client\Model\SingleResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendStringWithHttpInfo($token, $account, $user, $pass, $string, $blockchainNetwork, $test, $isForce)
    {
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling sendString');
        }
        // verify the required parameter 'account' is set
        if ($account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account when calling sendString');
        }
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling sendString');
        }
        // verify the required parameter 'pass' is set
        if ($pass === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pass when calling sendString');
        }
        // verify the required parameter 'string' is set
        if ($string === null) {
            throw new \InvalidArgumentException('Missing the required parameter $string when calling sendString');
        }
        // verify the required parameter 'blockchainNetwork' is set
        if ($blockchainNetwork === null) {
            throw new \InvalidArgumentException('Missing the required parameter $blockchainNetwork when calling sendString');
        }
        // verify the required parameter 'test' is set
        if ($test === null) {
            throw new \InvalidArgumentException('Missing the required parameter $test when calling sendString');
        }
        // parse inputs
        $resourcePath = "/send/opreturn/string";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // form params
        if ($token !== null) {
            $formParams['token'] = $this->apiClient->getSerializer()->toFormValue($token);
        }
        // form params
        if ($account !== null) {
            $formParams['account'] = $this->apiClient->getSerializer()->toFormValue($account);
        }
        // form params
        if ($user !== null) {
            $formParams['user'] = $this->apiClient->getSerializer()->toFormValue($user);
        }
        // form params
        if ($pass !== null) {
            $formParams['pass'] = $this->apiClient->getSerializer()->toFormValue($pass);
        }
        // form params
        if ($string !== null) {
            $formParams['string'] = $this->apiClient->getSerializer()->toFormValue($string);
        }
        // form params
        if ($blockchainNetwork !== null) {
            $formParams['blockchainNetwork'] = $this->apiClient->getSerializer()->toFormValue($blockchainNetwork);
        }
        // form params
        if ($test !== null) {
            $formParams['test'] = $this->apiClient->getSerializer()->toFormValue($test);
        }
        //form params
        if($isForce !== null) {
            $formParams["force"] = $this->apiClient->getSerializer()->toFormValue($isForce === null ? false : $isForce);
        }
        
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AStar\Client\Model\SingleResult',
                '/send/opreturn/string'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\AStar\Client\Model\SingleResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AStar\Client\Model\SingleResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
