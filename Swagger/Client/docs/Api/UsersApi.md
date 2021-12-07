# Swagger\Client\UsersApi

All URIs are relative to *https://pay-dot-wearatar-dev.appspot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payUsersGet**](UsersApi.md#payusersget) | **GET** /users | Busca um usuario no sistema pelo identificador
[**payUsersMeGet**](UsersApi.md#payusersmeget) | **GET** /users/me | Busca informacoes do usuario atualmente logado
[**payUsersMePostRelashionship**](UsersApi.md#payusersmepostrelashionship) | **POST** /users/me/relationship | Insere o usuario como relacionamento
[**payUsersMePut**](UsersApi.md#payusersmeput) | **PUT** /users/me | Atualiza informacoes do usuario atualmente logado
[**payUsersMeRelationships**](UsersApi.md#payusersmerelationships) | **GET** /users/me/relationship | Retorna os relacionamentos do usuario ordenados pela ultima iteracao
[**payUsersMeSubscriptionGet**](UsersApi.md#payusersmesubscriptionget) | **GET** /users/me/subscription | Retorna as informacoes do contrato ativo do usuario

# **payUsersGet**
> \Swagger\Client\Model\OtherUser payUsersGet($atar_api_key, $atar_id, $document)

Busca um usuario no sistema pelo identificador

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador do usuario a ser pesquisado
$document = "document_example"; // string | Documento do usuario a ser pesquisado

try {
    $result = $apiInstance->payUsersGet($atar_api_key, $atar_id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->payUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador do usuario a ser pesquisado | [optional]
 **document** | **string**| Documento do usuario a ser pesquisado | [optional]

### Return type

[**\Swagger\Client\Model\OtherUser**](../Model/OtherUser.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payUsersMeGet**
> \Swagger\Client\Model\User payUsersMeGet($atar_api_key, $atar_id)

Busca informacoes do usuario atualmente logado

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payUsersMeGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->payUsersMeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payUsersMePostRelashionship**
> payUsersMePostRelashionship($body, $atar_api_key, $atar_id)

Insere o usuario como relacionamento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OtherUser(); // \Swagger\Client\Model\OtherUser | ATAR id da relacao
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $apiInstance->payUsersMePostRelashionship($body, $atar_api_key, $atar_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->payUsersMePostRelashionship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OtherUser**](../Model/OtherUser.md)| ATAR id da relacao |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payUsersMePut**
> payUsersMePut($body, $atar_api_key, $atar_id)

Atualiza informacoes do usuario atualmente logado

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserMePut(); // \Swagger\Client\Model\UserMePut | Informacoes a serem atualizadas
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $apiInstance->payUsersMePut($body, $atar_api_key, $atar_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->payUsersMePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserMePut**](../Model/UserMePut.md)| Informacoes a serem atualizadas |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payUsersMeRelationships**
> \Swagger\Client\Model\OtherUser[] payUsersMeRelationships($atar_api_key, $atar_id)

Retorna os relacionamentos do usuario ordenados pela ultima iteracao

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payUsersMeRelationships($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->payUsersMeRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\OtherUser[]**](../Model/OtherUser.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payUsersMeSubscriptionGet**
> \Swagger\Client\Model\Plan payUsersMeSubscriptionGet($atar_api_key, $atar_id)

Retorna as informacoes do contrato ativo do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payUsersMeSubscriptionGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->payUsersMeSubscriptionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

