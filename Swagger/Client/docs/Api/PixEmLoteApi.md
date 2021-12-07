# Swagger\Client\PixEmLoteApi

All URIs are relative to *https://pay-dot-wearatar-dev.appspot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pixBatchDelete**](PixEmLoteApi.md#pixbatchdelete) | **DELETE** /pix/batch/{key} | Exlcui um lote e seus itens
[**pixBatchGet**](PixEmLoteApi.md#pixbatchget) | **GET** /pix/batch | retorna os lotes cadastrados
[**pixBatchGetCursor**](PixEmLoteApi.md#pixbatchgetcursor) | **GET** /pix/batch/{cursor} | retorna os lotes cadastrados
[**pixBatchItemDelete**](PixEmLoteApi.md#pixbatchitemdelete) | **DELETE** /pix/batch/{batchId}/items/{itemId} | Exclui um item do lote
[**pixBatchItemGet**](PixEmLoteApi.md#pixbatchitemget) | **GET** /pix/batch/{batchId}/items | retorna os itens do lote cadastrados
[**pixBatchItemGetCursor**](PixEmLoteApi.md#pixbatchitemgetcursor) | **GET** /pix/batch/{batchId}/items/{cursor} | retorna os itens do lote cadastrados
[**pixBatchItemPost**](PixEmLoteApi.md#pixbatchitempost) | **POST** /pix/batch/{batchId}/items | Insere itens em um lote
[**pixBatchPost**](PixEmLoteApi.md#pixbatchpost) | **POST** /pix/batch | Realiza o cadastro de um lote
[**pixBatchStartProcessPost**](PixEmLoteApi.md#pixbatchstartprocesspost) | **POST** /pix/batch/{batchId}/start-process | Inicia o processamento dos itens do lote

# **pixBatchDelete**
> pixBatchDelete($atar_api_key, $key)

Exlcui um lote e seus itens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$key = "key_example"; // string | Id do lote

try {
    $apiInstance->pixBatchDelete($atar_api_key, $key);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **key** | **string**| Id do lote |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixBatchGet**
> \Swagger\Client\Model\PixBatchResponseGet pixBatchGet($atar_api_key)

retorna os lotes cadastrados

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API

try {
    $result = $apiInstance->pixBatchGet($atar_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |

### Return type

[**\Swagger\Client\Model\PixBatchResponseGet**](../Model/PixBatchResponseGet.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixBatchGetCursor**
> \Swagger\Client\Model\PixBatchResponseGet pixBatchGetCursor($atar_api_key, $cursor)

retorna os lotes cadastrados

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$cursor = "cursor_example"; // string | Id do pagaento

try {
    $result = $apiInstance->pixBatchGetCursor($atar_api_key, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchGetCursor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **cursor** | **string**| Id do pagaento |

### Return type

[**\Swagger\Client\Model\PixBatchResponseGet**](../Model/PixBatchResponseGet.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixBatchItemDelete**
> pixBatchItemDelete($atar_api_key, $batch_id, $item_id)

Exclui um item do lote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$batch_id = "batch_id_example"; // string | Key do lote
$item_id = "item_id_example"; // string | Key do item

try {
    $apiInstance->pixBatchItemDelete($atar_api_key, $batch_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchItemDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **batch_id** | **string**| Key do lote |
 **item_id** | **string**| Key do item |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixBatchItemGet**
> \Swagger\Client\Model\InlineResponse200 pixBatchItemGet($atar_api_key, $atar_idempotency_key, $batch_id)

retorna os itens do lote cadastrados

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_idempotency_key = "atar_idempotency_key_example"; // string | Chave de idempotência da requisicão no formato UUID4 gerado pelo cliente. Garante que requisicões não serão processadas em duplicidade se informada a mesma chave de idempotência.
$batch_id = "batch_id_example"; // string | Key do lote

try {
    $result = $apiInstance->pixBatchItemGet($atar_api_key, $atar_idempotency_key, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchItemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_idempotency_key** | **string**| Chave de idempotência da requisicão no formato UUID4 gerado pelo cliente. Garante que requisicões não serão processadas em duplicidade se informada a mesma chave de idempotência. |
 **batch_id** | **string**| Key do lote |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixBatchItemGetCursor**
> \Swagger\Client\Model\InlineResponse200 pixBatchItemGetCursor($atar_api_key, $batch_id, $cursor)

retorna os itens do lote cadastrados

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$batch_id = "batch_id_example"; // string | Key do lote
$cursor = "cursor_example"; // string | Key do lote

try {
    $result = $apiInstance->pixBatchItemGetCursor($atar_api_key, $batch_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchItemGetCursor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **batch_id** | **string**| Key do lote |
 **cursor** | **string**| Key do lote |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixBatchItemPost**
> \Swagger\Client\Model\InlineResponse2001 pixBatchItemPost($atar_api_key, $atar_idempotency_key, $batch_id, $body)

Insere itens em um lote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_idempotency_key = "atar_idempotency_key_example"; // string | Chave de idempotência da requisicão no formato UUID4 gerado pelo cliente. Garante que requisicões não serão processadas em duplicidade se informada a mesma chave de idempotência.
$batch_id = "batch_id_example"; // string | Key do lote
$body = array(new \Swagger\Client\Model\PixPaymentRequest()); // \Swagger\Client\Model\PixPaymentRequest[] | Dados do item do lote

try {
    $result = $apiInstance->pixBatchItemPost($atar_api_key, $atar_idempotency_key, $batch_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchItemPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_idempotency_key** | **string**| Chave de idempotência da requisicão no formato UUID4 gerado pelo cliente. Garante que requisicões não serão processadas em duplicidade se informada a mesma chave de idempotência. |
 **batch_id** | **string**| Key do lote |
 **body** | [**\Swagger\Client\Model\PixPaymentRequest[]**](../Model/PixPaymentRequest.md)| Dados do item do lote | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixBatchPost**
> \Swagger\Client\Model\PixBatchResponse pixBatchPost($body, $atar_api_key)

Realiza o cadastro de um lote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PixBatch(); // \Swagger\Client\Model\PixBatch | Dados para realizar o cadastro
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API

try {
    $result = $apiInstance->pixBatchPost($body, $atar_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PixBatch**](../Model/PixBatch.md)| Dados para realizar o cadastro |
 **atar_api_key** | **string**| Chave de acesso da API |

### Return type

[**\Swagger\Client\Model\PixBatchResponse**](../Model/PixBatchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixBatchStartProcessPost**
> \Swagger\Client\Model\InlineResponse2002 pixBatchStartProcessPost($atar_api_key, $batch_id)

Inicia o processamento dos itens do lote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixEmLoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$batch_id = "batch_id_example"; // string | Key do lote

try {
    $result = $apiInstance->pixBatchStartProcessPost($atar_api_key, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixEmLoteApi->pixBatchStartProcessPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **batch_id** | **string**| Key do lote |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

