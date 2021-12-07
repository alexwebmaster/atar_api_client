# Swagger\Client\SQSApi

All URIs are relative to *https://pay-dot-wearatar-dev.appspot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sqsAuthorizerConductorPurchasePost**](SQSApi.md#sqsauthorizerconductorpurchasepost) | **POST** /sqs/authorizer/conductor-purchase | Notifica compra negada na conductor

# **sqsAuthorizerConductorPurchasePost**
> \Swagger\Client\Model\PurchaseDeniedResponse sqsAuthorizerConductorPurchasePost($body)

Notifica compra negada na conductor

Recebe informacoes da compra negada e envia para a fila de processamento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SQSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PurchaseDenied(); // \Swagger\Client\Model\PurchaseDenied | Dados da compra negada da conductor

try {
    $result = $apiInstance->sqsAuthorizerConductorPurchasePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SQSApi->sqsAuthorizerConductorPurchasePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PurchaseDenied**](../Model/PurchaseDenied.md)| Dados da compra negada da conductor | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseDeniedResponse**](../Model/PurchaseDeniedResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

