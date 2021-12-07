# Swagger\Client\UtilsApi

All URIs are relative to *https://pay-dot-wearatar-dev.appspot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payAppVersionPost**](UtilsApi.md#payappversionpost) | **POST** /utils/app/version | Retorna se uma versao do app especifica possui atualizacoes e ou obsoleta
[**payCboPost**](UtilsApi.md#paycbopost) | **POST** /utils/cbo | Retorna lista de CBOs disponiveis no ATAR pay
[**payCitizenshipPost**](UtilsApi.md#paycitizenshippost) | **POST** /utils/citizenship | Retorna lista de nacionalidades disponiveis no ATAR pay
[**payCountriesPost**](UtilsApi.md#paycountriespost) | **POST** /utils/countries | Retorna lista de paises disponiveis no ATAR pay
[**payZipcodePost**](UtilsApi.md#payzipcodepost) | **POST** /utils/zipcode/{zipcode} | Retorna detalhes do endereco via pesquisa por CEP

# **payAppVersionPost**
> \Swagger\Client\Model\AppVersion payAppVersionPost($body, $atar_api_key)

Retorna se uma versao do app especifica possui atualizacoes e ou obsoleta

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AppVersionRequest(); // \Swagger\Client\Model\AppVersionRequest | API key do desenvolvedor e versao do app atual
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API

try {
    $result = $apiInstance->payAppVersionPost($body, $atar_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->payAppVersionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AppVersionRequest**](../Model/AppVersionRequest.md)| API key do desenvolvedor e versao do app atual |
 **atar_api_key** | **string**| Chave de acesso da API |

### Return type

[**\Swagger\Client\Model\AppVersion**](../Model/AppVersion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCboPost**
> \Swagger\Client\Model\KeyValue[] payCboPost($body, $atar_api_key)

Retorna lista de CBOs disponiveis no ATAR pay

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiKey(); // \Swagger\Client\Model\ApiKey | API key do desenvolvedor
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API

try {
    $result = $apiInstance->payCboPost($body, $atar_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->payCboPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiKey**](../Model/ApiKey.md)| API key do desenvolvedor |
 **atar_api_key** | **string**| Chave de acesso da API |

### Return type

[**\Swagger\Client\Model\KeyValue[]**](../Model/KeyValue.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCitizenshipPost**
> \Swagger\Client\Model\KeyValue[] payCitizenshipPost($body, $atar_api_key)

Retorna lista de nacionalidades disponiveis no ATAR pay

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiKey(); // \Swagger\Client\Model\ApiKey | API key do desenvolvedor
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API

try {
    $result = $apiInstance->payCitizenshipPost($body, $atar_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->payCitizenshipPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiKey**](../Model/ApiKey.md)| API key do desenvolvedor |
 **atar_api_key** | **string**| Chave de acesso da API |

### Return type

[**\Swagger\Client\Model\KeyValue[]**](../Model/KeyValue.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCountriesPost**
> \Swagger\Client\Model\KeyValue[] payCountriesPost($body, $atar_api_key)

Retorna lista de paises disponiveis no ATAR pay

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiKey(); // \Swagger\Client\Model\ApiKey | API key do desenvolvedor
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API

try {
    $result = $apiInstance->payCountriesPost($body, $atar_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->payCountriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiKey**](../Model/ApiKey.md)| API key do desenvolvedor |
 **atar_api_key** | **string**| Chave de acesso da API |

### Return type

[**\Swagger\Client\Model\KeyValue[]**](../Model/KeyValue.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payZipcodePost**
> \Swagger\Client\Model\Zipcode payZipcodePost($body, $atar_api_key, $zipcode)

Retorna detalhes do endereco via pesquisa por CEP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UtilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiKey(); // \Swagger\Client\Model\ApiKey | API key do desenvolvedor
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$zipcode = "zipcode_example"; // string | CEP a ser pesquisado

try {
    $result = $apiInstance->payZipcodePost($body, $atar_api_key, $zipcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilsApi->payZipcodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiKey**](../Model/ApiKey.md)| API key do desenvolvedor |
 **atar_api_key** | **string**| Chave de acesso da API |
 **zipcode** | **string**| CEP a ser pesquisado |

### Return type

[**\Swagger\Client\Model\Zipcode**](../Model/Zipcode.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

