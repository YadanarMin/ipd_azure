<?php
/**
 * UserProfileApi
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Forge\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Forge\Client\Api;

use \Autodesk\Forge\Client\ApiException;

/**
 * UserProfileApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Forge\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserProfileApi extends AbstractApi
{
    /**
     * Operation getUserProfile
     *
     * Returns the profile information of an authorizing end user.
     *
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\UserProfile
     */
    public function getUserProfile()
    {
        list($response) = $this->getUserProfileWithHttpInfo();
        return $response;
    }

    /**
     * Operation getUserProfileWithHttpInfo
     *
     * Returns the profile information of an authorizing end user.
     *
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Forge\Client\Model\UserProfile, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserProfileWithHttpInfo()
    {
         // parse inputs
        $resourcePath = "/userprofile/v1/users/@me";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/userprofile/v1/users/@me'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Forge\Client\Model\UserProfile', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\UserProfile', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }

    }
    
     public function getUsersTest($project_id)
    {
        list($response) = $this->getUsersTestWithHttpInfo($project_id);
        return $response;
    }
    
    public function getUsersTestWithHttpInfo($project_id)
    {

        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/bim360/admin/v1/projects/{projectId}/users/{userId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);//application/vnd.api+json
        $headerParams["Region"] = "US";
        //$headerParams['User-Id'] = "55ea4012-24d1-49f9-a1b6-4a1e1a1ca5ca";//"FKD9LPQD83XY";//
        $user_id = "55ea4012-24d1-49f9-a1b6-4a1e1a1ca5ca";
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "projectId" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        
        if ($user_id !== null) {
            $resourcePath = str_replace(
                "{" . "userId" . "}",
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/bim360/admin/v1/projects/{projectId}/users/{userId}'///bim360/admin/v1/projects/{project_id}/users
            );
            
            /*$resultList = array();
            foreach($response->results as $item){
                //if(!isset($item->id))continue;
                $id = $item->id;
                $name = $item->name;
                $email = $item->email;
                array_push($resultList,array("id"=>$id,"name"=>$name,"email"=>$email));
            }*/
            return json_decode(json_encode(array($response)),true);
            return [
                $this->apiClient->getSerializer()->deserialize($response, '', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation getProjectUsers
     *
     * 
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\Hub
     */
    public function getProjectUsers($project_id)
    {
        list($response) = $this->getProjectUsersWithHttpInfo($project_id);
        return $response;
    }

    /**
     * Operation getProjectUsersWithHttpInfo
     *
     * 
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Forge\Client\Model\Hub, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProjectUsersWithHttpInfo($project_id)
    {

        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/bim360/admin/v1/projects/{project_id}/users?sort=name&limit=200&offset=0";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);//application/vnd.api+json
        //$headerParams['User-Id'] = "55ea4012-24d1-49f9-a1b6-4a1e1a1ca5ca";//"FKD9LPQD83XY";//
        $headerParams["Region"] = "US";

        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/bim360/admin/v1/projects/{project_id}/users?sort=name&limit=200&offset=0'///bim360/admin/v1/projects/{project_id}/users
            );
            
            $resultList = array();
            foreach($response->results as $item){
                //if(!isset($item->id))continue;
                $id = $item->id;
                $name = $item->name;
                $email = $item->email;
                array_push($resultList,array("id"=>$id,"name"=>$name,"email"=>$email));
            }
            return json_decode(json_encode(array($resultList)),true);
            return [
                $this->apiClient->getSerializer()->deserialize($response, '', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    
    


    /**
     * Operation getFolderUsers
     *
     * 
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\Hub
     */
    public function getFolderUsers($project_id,$folder_id)
    {
        list($response) = $this->getFolderUsersWithHttpInfo($project_id,$folder_id);
        return $response;
    }

    /**
     * Operation getFolderUsersWithHttpInfo
     *
     */
    public function getFolderUsersWithHttpInfo($project_id,$folder_id)
    {

        // verify the required parameter 'project_id' is set
        if ($project_id === null || $folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/bim360/docs/v1/projects/{project_id}/folders/{folder_id}/permissions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);
        $headerParams["Region"] = "US";
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/bim360/docs/v1/projects/{project_id}/folders/{folder_id}/permissions'///bim360/admin/v1/projects/{project_id}/users
            );
            $userList = array();
            //print_r($response);
            foreach($response as $user){
                //print_r($user);
                $name = isset($user->name)? $user->name : "";
                $email =isset($user->email) ? $user->email : "";
                $userType = isset($user->userType) ? $user->userType : "";
                array_push($userList,array("name"=>$name,"email"=>$email,"userType"=>$userType));
            }
            
            return json_decode(json_encode(array($userList)),true);
            
            return [
                $this->apiClient->getSerializer()->deserialize($response, '', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    
     public function getUsers($hub_id,$offset)
    {
        list($response) = $this->getUsersWithHttpInfo($hub_id,$offset);
        return $response;
    }

    /**
     * Operation getUsersWithHttpInfo
     *
     * 
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Forge\Client\Model\Hub, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsersWithHttpInfo($account_id,$offset)
    {

        // verify the required parameter 'project_id' is set
        if ($account_id === null ) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/hq/v1/accounts/{account_id}/users?limit=100&offset=".$offset;
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);
        $headerParams["Region"] = "US";
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/hq/v1/accounts/{account_id}/users?limit=100&offset='.$offset///bim360/admin/v1/projects/{project_id}/users
            );
            $userList = array();
            //print_r($response);
            
            return json_decode(json_encode(array($response)),true);
            
            return [
                $this->apiClient->getSerializer()->deserialize($response, '', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                /*case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;*/
            }

            throw $e;
        }
    }
    
 
    
    public function AddPermission($project_id,$folder_id,$user_id)
    {
        list($response) = $this->addPermissionWithHttpInfo($project_id,$folder_id,$user_id);
        return $response;
    }

    public function addPermissionWithHttpInfo($project_id,$folder_id,$user_id)
    {

        // verify the required parameter 'project_id' is set
        if ($project_id === null ) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/bim360/docs/v1/projects/{project_id}/folders/{folder_id}/permissions:batch-create";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);//'application/vnd.api+json',
        $headerParams["Region"] = "US";
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
                $resourcePath
            );
        }
        
         //$headerParams['x-user-id'] = "FKD9LPQD83XY";//"55ea4012-24d1-49f9-a1b6-4a1e1a1ca5ca";
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        $httpBody = array(["subjectId"=>$user_id,"subjectType"=>"USER","actions"=>array("PUBLISH","VIEW", "DOWNLOAD", "COLLABORATE", "EDIT")]);//

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/bim360/docs/v1/projects/{project_id}/folders/{folder_id}/permissions:batch-create'///bim360/admin/v1/projects/{project_id}/users
            );
            $userList = array();
            //print_r($response);
            
            return json_decode(json_encode(array($response)),true);
            
            return [
                $this->apiClient->getSerializer()->deserialize($response, '', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                /*case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;*/
            }

            throw $e;
        }
    }
    
    public function DeletePermission($project_id,$folder_id,$user_id)
    {
        list($response) = $this->deletePermissionWithHttpInfo($project_id,$folder_id,$user_id);
        return $response;
    }

    public function deletePermissionWithHttpInfo($project_id,$folder_id,$user_id)
    {

        // verify the required parameter 'project_id' is set
        if ($project_id === null ) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/bim360/docs/v1/projects/{project_id}/folders/{folder_id}/permissions:batch-delete";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);
        $headerParams["Region"] = "US";
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
                $resourcePath
            );
        }
        
        $httpBody = array(["subjectId"=>$user_id,"subjectType"=>"USER"]);
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody;//; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/bim360/docs/v1/projects/{project_id}/folders/{folder_id}/permissions:batch-delete'///bim360/admin/v1/projects/{project_id}/users
            );

            //print_r($response);
            
            return json_decode(json_encode(array($response)),true);
            
            return [
                $this->apiClient->getSerializer()->deserialize($response, '', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                /*case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;*/
            }

            throw $e;
        }
    }
    
    
    public function AddUserToProject($project_id,$account_id,$user_id)
    {
        list($response) = $this->addUserToProjectWithHttpInfo($project_id,$account_id,$user_id);
        return $response;
    }

    public function addUserToProjectWithHttpInfo($project_id,$account_id,$user_id)
    {

        // verify the required parameter 'project_id' is set
        if ($project_id === null ) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/hq/v2/accounts/{account_id}/projects/{project_id}/users/import";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
        $headerParams["Region"] = "US";
        $headerParams['x-user-id'] = "55ea4012-24d1-49f9-a1b6-4a1e1a1ca5ca";//"FKD9LPQD83XY";//
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        
      
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $array = array("document_management"=>array("access_level"=>"user"));

        $httpBody = array(["user_id"=>$user_id,"services"=>$array,"company_id"=>"4520b883-ecec-4dbb-a5d6-4c42cf15d615","industry_roles"=>array()]);
        // for model (json/xml)
        //$httpBody = $aa;
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/hq/v2/accounts/{account_id}/projects/{project_id}/users/import'///bim360/admin/v1/projects/{project_id}/users
            );
            
            return json_decode(json_encode(array($response)),true);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    
    public function getFolderPermission($project_id,$account_id,$user_id)
    {
        list($response) = $this->getFolderPermissionWithHttpInfo($project_id,$account_id,$user_id);
        return $response;
    }

    public function getFolderPermissionWithHttpInfo($project_id,$folder_id,$user_id)
    {

        // verify the required parameter 'project_id' is set
        if ($project_id === null ) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/bim360/docs/v1/projects/{project_id}/folders/{folder_id}/permissions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);
        
        //$headerParams['x-user-id'] = "FKD9LPQD83XY";//"55ea4012-24d1-49f9-a1b6-4a1e1a1ca5ca";
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        
        // path params
        if ($folder_id !== null) {
            $resourcePath = str_replace(
                "{" . "folder_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($folder_id),
                $resourcePath
            );
        }
       
        // for model (json/xml)

        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Forge\Client\Model\UserProfile',
                '/bim360/docs/v1/projects/{project_id/folders}/{folder_id}/permissions'///bim360/admin/v1/projects/{project_id}/users
            );
            print_r($httpHeader);return;
            
            return json_decode(json_encode(array($response)),true);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
