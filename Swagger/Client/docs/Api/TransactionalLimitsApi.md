# Swagger\Client\TransactionalLimitsApi

All URIs are relative to *https://pay-dot-wearatar-dev.appspot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionalLimitsGet**](TransactionalLimitsApi.md#transactionallimitsget) | **GET** /transactional-limits | Retorna uma lista com os limites transacionais do usuario
[**transactionalLimitsTransactionalTypeGet**](TransactionalLimitsApi.md#transactionallimitstransactionaltypeget) | **GET** /transactional-limits/{transactionalType} | Retorna os limites transacionais do usuario para um determinado tipo

# **transactionalLimitsGet**
> \Swagger\Client\Model\TransactionalLimits transactionalLimitsGet()

Retorna uma lista com os limites transacionais do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionalLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->transactionalLimitsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalLimitsApi->transactionalLimitsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TransactionalLimits**](../Model/TransactionalLimits.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionalLimitsTransactionalTypeGet**
> \Swagger\Client\Model\TransactionalLimitsByType transactionalLimitsTransactionalTypeGet($transactional_type)

Retorna os limites transacionais do usuario para um determinado tipo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionalLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactional_type = "transactional_type_example"; // string | Tipo de limite transacional

try {
    $result = $apiInstance->transactionalLimitsTransactionalTypeGet($transactional_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalLimitsApi->transactionalLimitsTransactionalTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactional_type** | **string**| Tipo de limite transacional |

### Return type

[**\Swagger\Client\Model\TransactionalLimitsByType**](../Model/TransactionalLimitsByType.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

