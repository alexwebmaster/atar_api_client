# Swagger\Client\PixApi

All URIs are relative to *https://pay-dot-wearatar-dev.appspot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payPixOptionsGet**](PixApi.md#paypixoptionsget) | **GET** /pix/options | Retorna as opções disponíveis para Pix e as tarifas e limites envolvidos
[**pixClaimsDelete**](PixApi.md#pixclaimsdelete) | **DELETE** /pix/keys/{key}/claims | Cancela o pedido de portabilidade ou reivindicação
[**pixClaimsPost**](PixApi.md#pixclaimspost) | **POST** /pix/keys/claims | Realiza o pedido de portabilidade ou reivindicação
[**pixClaimsPut**](PixApi.md#pixclaimsput) | **PUT** /pix/keys/{key}/claims | Realiza o pedido de portabilidade ou reivindicação
[**pixDetailDetailIdGet**](PixApi.md#pixdetaildetailidget) | **GET** /pix/detail/{detailId} | Busca por detalhes de uma transação Pix
[**pixKeyDelete**](PixApi.md#pixkeydelete) | **DELETE** /pix/keys/{key} | Exclui uma chave Pix
[**pixKeyGet**](PixApi.md#pixkeyget) | **GET** /pix/keys/{key} | Retornar a chave consultada
[**pixKeyPut**](PixApi.md#pixkeyput) | **PUT** /pix/keys/{key} | Favorita uma chave Pix
[**pixKeyShareGet**](PixApi.md#pixkeyshareget) | **GET** /pix/qrcode/{emv}/share | Retorna o arquivo PDF e mensagem para compartilhamento
[**pixKeysGet**](PixApi.md#pixkeysget) | **GET** /pix/keys | Retornar uma lista com as chaves cadastradas
[**pixKeysPost**](PixApi.md#pixkeyspost) | **POST** /pix/keys | Realiza o cadastro
[**pixPaymentPost**](PixApi.md#pixpaymentpost) | **POST** /pix/payment | Realiza um pagamento
[**pixQrCodeGet**](PixApi.md#pixqrcodeget) | **GET** /pix/qrcode/{emv} | Consulta os dados do QR Code
[**pixQrCodePost**](PixApi.md#pixqrcodepost) | **POST** /pix/qrcode | Gera um Pix com QR Code dinâmico ou estático
[**pixReceipt**](PixApi.md#pixreceipt) | **GET** /pix/{pixId}/receipt | retorna em base64 o pdf de recibo pix
[**pixRefundPost**](PixApi.md#pixrefundpost) | **POST** /pix/refund/{pixId} | Realiza a devolução de um recebimento

# **payPixOptionsGet**
> \Swagger\Client\Model\PixOptions payPixOptionsGet($atar_api_key, $atar_id)

Retorna as opções disponíveis para Pix e as tarifas e limites envolvidos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payPixOptionsGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->payPixOptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\PixOptions**](../Model/PixOptions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixClaimsDelete**
> pixClaimsDelete($atar_api_key, $atar_id, $key)

Cancela o pedido de portabilidade ou reivindicação

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$key = "key_example"; // string | Chave pix

try {
    $apiInstance->pixClaimsDelete($atar_api_key, $atar_id, $key);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixClaimsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **key** | **string**| Chave pix |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixClaimsPost**
> \Swagger\Client\Model\PixKey pixClaimsPost($body, $atar_api_key, $atar_id)

Realiza o pedido de portabilidade ou reivindicação

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PixClaimRequest(); // \Swagger\Client\Model\PixClaimRequest | Dados da chave para cadastro
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->pixClaimsPost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixClaimsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PixClaimRequest**](../Model/PixClaimRequest.md)| Dados da chave para cadastro |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\PixKey**](../Model/PixKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixClaimsPut**
> \Swagger\Client\Model\PixKey pixClaimsPut($body, $atar_api_key, $atar_id, $key)

Realiza o pedido de portabilidade ou reivindicação

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PixClaimRequest(); // \Swagger\Client\Model\PixClaimRequest | Dados da chave para cadastro
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$key = "key_example"; // string | Chave pix

try {
    $result = $apiInstance->pixClaimsPut($body, $atar_api_key, $atar_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixClaimsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PixClaimRequest**](../Model/PixClaimRequest.md)| Dados da chave para cadastro |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **key** | **string**| Chave pix |

### Return type

[**\Swagger\Client\Model\PixKey**](../Model/PixKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixDetailDetailIdGet**
> \Swagger\Client\Model\PixPaymentData pixDetailDetailIdGet($authorization, $atar_api_key, $atar_id, $detail_id)

Busca por detalhes de uma transação Pix

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Basic do usuario a realizar a operacao. Exemplo: Basic dXN1YXJpbzpzZW5oYQ==
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso a API, informado pela AtarB2B
$atar_id = "atar_id_example"; // string | Código de identificação do profile (retorna na hora de criar a entidade)
$detail_id = "detail_id_example"; // string | ID do pix (Obtido no /statement da PJ)

try {
    $result = $apiInstance->pixDetailDetailIdGet($authorization, $atar_api_key, $atar_id, $detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixDetailDetailIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic do usuario a realizar a operacao. Exemplo: Basic dXN1YXJpbzpzZW5oYQ&#x3D;&#x3D; |
 **atar_api_key** | **string**| Chave de acesso a API, informado pela AtarB2B |
 **atar_id** | **string**| Código de identificação do profile (retorna na hora de criar a entidade) |
 **detail_id** | **string**| ID do pix (Obtido no /statement da PJ) |

### Return type

[**\Swagger\Client\Model\PixPaymentData**](../Model/PixPaymentData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixKeyDelete**
> pixKeyDelete($atar_api_key, $atar_id, $key)

Exclui uma chave Pix

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$key = "key_example"; // string | Chave pix

try {
    $apiInstance->pixKeyDelete($atar_api_key, $atar_id, $key);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixKeyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **key** | **string**| Chave pix |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixKeyGet**
> \Swagger\Client\Model\PixKey pixKeyGet($atar_api_key, $atar_id, $key)

Retornar a chave consultada

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$key = "key_example"; // string | Chave pix

try {
    $result = $apiInstance->pixKeyGet($atar_api_key, $atar_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixKeyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **key** | **string**| Chave pix |

### Return type

[**\Swagger\Client\Model\PixKey**](../Model/PixKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixKeyPut**
> \Swagger\Client\Model\PixKey pixKeyPut($body, $atar_api_key, $atar_id, $key)

Favorita uma chave Pix

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PixKey(); // \Swagger\Client\Model\PixKey | Dados da chave para cadastro
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$key = "key_example"; // string | Chave pix

try {
    $result = $apiInstance->pixKeyPut($body, $atar_api_key, $atar_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixKeyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PixKey**](../Model/PixKey.md)| Dados da chave para cadastro |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **key** | **string**| Chave pix |

### Return type

[**\Swagger\Client\Model\PixKey**](../Model/PixKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixKeyShareGet**
> \Swagger\Client\Model\PixKeyShare pixKeyShareGet($atar_api_key, $atar_id, $emv)

Retorna o arquivo PDF e mensagem para compartilhamento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$emv = "emv_example"; // string | Chave pix

try {
    $result = $apiInstance->pixKeyShareGet($atar_api_key, $atar_id, $emv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixKeyShareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **emv** | **string**| Chave pix |

### Return type

[**\Swagger\Client\Model\PixKeyShare**](../Model/PixKeyShare.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixKeysGet**
> \Swagger\Client\Model\PixKey[] pixKeysGet($atar_api_key, $atar_id)

Retornar uma lista com as chaves cadastradas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->pixKeysGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixKeysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\PixKey[]**](../Model/PixKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixKeysPost**
> \Swagger\Client\Model\PixKey pixKeysPost($body, $atar_api_key, $atar_id)

Realiza o cadastro

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PixKeyRequest(); // \Swagger\Client\Model\PixKeyRequest | Dados da chave para cadastro
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->pixKeysPost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixKeysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PixKeyRequest**](../Model/PixKeyRequest.md)| Dados da chave para cadastro |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\PixKey**](../Model/PixKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixPaymentPost**
> \Swagger\Client\Model\PixPaymentData pixPaymentPost($body, $atar_api_key, $atar_id, $atar_idempotency_key)

Realiza um pagamento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PixPaymentRequest(); // \Swagger\Client\Model\PixPaymentRequest | Dados para realizar o pagamento
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$atar_idempotency_key = "atar_idempotency_key_example"; // string | Chave de idempotência da requisicão no formato UUID4 gerado pelo cliente. Garante que requisicões não serão processadas em duplicidade se informada a mesma chave de idempotência.

try {
    $result = $apiInstance->pixPaymentPost($body, $atar_api_key, $atar_id, $atar_idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixPaymentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PixPaymentRequest**](../Model/PixPaymentRequest.md)| Dados para realizar o pagamento |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **atar_idempotency_key** | **string**| Chave de idempotência da requisicão no formato UUID4 gerado pelo cliente. Garante que requisicões não serão processadas em duplicidade se informada a mesma chave de idempotência. |

### Return type

[**\Swagger\Client\Model\PixPaymentData**](../Model/PixPaymentData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixQrCodeGet**
> \Swagger\Client\Model\PixPaymentData pixQrCodeGet($atar_api_key, $atar_id, $emv)

Consulta os dados do QR Code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$emv = "emv_example"; // string | Código do QR Code

try {
    $result = $apiInstance->pixQrCodeGet($atar_api_key, $atar_id, $emv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixQrCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **emv** | **string**| Código do QR Code |

### Return type

[**\Swagger\Client\Model\PixPaymentData**](../Model/PixPaymentData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixQrCodePost**
> \Swagger\Client\Model\PixQRCode pixQrCodePost($body, $atar_api_key, $atar_id)

Gera um Pix com QR Code dinâmico ou estático

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PixQRCodeRequest(); // \Swagger\Client\Model\PixQRCodeRequest | Dados para gerar o QR Code dinâmico ou estático
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->pixQrCodePost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixQrCodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PixQRCodeRequest**](../Model/PixQRCodeRequest.md)| Dados para gerar o QR Code dinâmico ou estático |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\PixQRCode**](../Model/PixQRCode.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixReceipt**
> \Swagger\Client\Model\PixReceipt pixReceipt($atar_api_key, $pix_id)

retorna em base64 o pdf de recibo pix

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$pix_id = "pix_id_example"; // string | ID do Pix

try {
    $result = $apiInstance->pixReceipt($atar_api_key, $pix_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **pix_id** | **string**| ID do Pix |

### Return type

[**\Swagger\Client\Model\PixReceipt**](../Model/PixReceipt.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pixRefundPost**
> \Swagger\Client\Model\PixPaymentData pixRefundPost($body, $atar_api_key, $atar_id, $pix_id)

Realiza a devolução de um recebimento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PixRefundRequest(); // \Swagger\Client\Model\PixRefundRequest | Dados para realizar o pagamento
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$pix_id = "pix_id_example"; // string | Id do pagaento

try {
    $result = $apiInstance->pixRefundPost($body, $atar_api_key, $atar_id, $pix_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixApi->pixRefundPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PixRefundRequest**](../Model/PixRefundRequest.md)| Dados para realizar o pagamento |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **pix_id** | **string**| Id do pagaento |

### Return type

[**\Swagger\Client\Model\PixPaymentData**](../Model/PixPaymentData.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

