# Swagger\Client\DevicesApi

All URIs are relative to *https://pay-dot-wearatar-dev.appspot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payDeviceCashinPost**](DevicesApi.md#paydevicecashinpost) | **POST** /devices/{deviceId}/cashin | Recarrega o device do usuario desejado
[**payDeviceCashoutPost**](DevicesApi.md#paydevicecashoutpost) | **POST** /devices/{deviceId}/cashout | Descarrega o device do usuario desejado
[**payDevicesCancelPost**](DevicesApi.md#paydevicescancelpost) | **POST** /devices/cancel | Cancela um dispositivo para o usuario
[**payDevicesEnablePost**](DevicesApi.md#paydevicesenablepost) | **POST** /devices/enable | Ativa um dispositivo para o usuario
[**payDevicesFeesGet**](DevicesApi.md#paydevicesfeesget) | **GET** /devices/{deviceId}/fees | Retorna as taxas do device
[**payDevicesGet**](DevicesApi.md#paydevicesget) | **GET** /devices | Recupera dispositivos do usuario
[**payDevicesIdGet**](DevicesApi.md#paydevicesidget) | **GET** /devices/{deviceId} | Recupera um dispositivo do usuario
[**payDevicesLockPut**](DevicesApi.md#paydeviceslockput) | **PUT** /devices/lock | Bloqueia temporariamente o dispositivo
[**payDevicesNewExternalPost**](DevicesApi.md#paydevicesnewexternalpost) | **POST** /devices/new-external-device | Cria um dispositivo externo para o usuario
[**payDevicesNewPost**](DevicesApi.md#paydevicesnewpost) | **POST** /devices/new | Cria um dispositivo para o usuario
[**payDevicesPinPut**](DevicesApi.md#paydevicespinput) | **PUT** /devices/{deviceId}/pin | Altera a senha do dispositivo
[**payDevicesReplacePost**](DevicesApi.md#paydevicesreplacepost) | **POST** /devices/replace | Troca um dispositivo para o usuario
[**payDevicesUnlockPut**](DevicesApi.md#paydevicesunlockput) | **PUT** /devices/unlock | Desbloqueia o dispositivo
[**payDevicesVirtualCardDelete**](DevicesApi.md#paydevicesvirtualcarddelete) | **DELETE** /devices/virtual-card/{deviceId} | Retorna o cartão virtual pelo id
[**payDevicesVirtualCardGet**](DevicesApi.md#paydevicesvirtualcardget) | **GET** /devices/virtual-card/{deviceId} | Retorna o cartão virtual pelo id
[**payDevicesVirtualCardPost**](DevicesApi.md#paydevicesvirtualcardpost) | **POST** /devices/virtual-card | Gera um novo cartão virtual
[**payDevicesVirtualCardsGet**](DevicesApi.md#paydevicesvirtualcardsget) | **GET** /devices/virtual-card | Recupera os cartões virtuais do usuario

# **payDeviceCashinPost**
> \Swagger\Client\Model\DeviceBalance payDeviceCashinPost($body, $atar_api_key, $atar_id, $device_id)

Recarrega o device do usuario desejado

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceTransactionRequest(); // \Swagger\Client\Model\DeviceTransactionRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$device_id = "device_id_example"; // string | ID do dispositivo

try {
    $result = $apiInstance->payDeviceCashinPost($body, $atar_api_key, $atar_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDeviceCashinPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceTransactionRequest**](../Model/DeviceTransactionRequest.md)|  |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **device_id** | **string**| ID do dispositivo |

### Return type

[**\Swagger\Client\Model\DeviceBalance**](../Model/DeviceBalance.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDeviceCashoutPost**
> \Swagger\Client\Model\DeviceBalance payDeviceCashoutPost($body, $atar_api_key, $atar_id, $device_id)

Descarrega o device do usuario desejado

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceTransactionRequest(); // \Swagger\Client\Model\DeviceTransactionRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$device_id = "device_id_example"; // string | ID do dispositivo

try {
    $result = $apiInstance->payDeviceCashoutPost($body, $atar_api_key, $atar_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDeviceCashoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceTransactionRequest**](../Model/DeviceTransactionRequest.md)|  |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **device_id** | **string**| ID do dispositivo |

### Return type

[**\Swagger\Client\Model\DeviceBalance**](../Model/DeviceBalance.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesCancelPost**
> payDevicesCancelPost($body, $atar_api_key, $atar_id)

Cancela um dispositivo para o usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceId(); // \Swagger\Client\Model\DeviceId | Id do dispositivo
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $apiInstance->payDevicesCancelPost($body, $atar_api_key, $atar_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceId**](../Model/DeviceId.md)| Id do dispositivo |
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

# **payDevicesEnablePost**
> \Swagger\Client\Model\Device payDevicesEnablePost($body, $atar_api_key, $atar_id)

Ativa um dispositivo para o usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceRequest(); // \Swagger\Client\Model\DeviceRequest | Codigo de ativacao e PIN do dispositivo a ser ativado
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payDevicesEnablePost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesEnablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceRequest**](../Model/DeviceRequest.md)| Codigo de ativacao e PIN do dispositivo a ser ativado |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesFeesGet**
> \Swagger\Client\Model\CashinLimits payDevicesFeesGet($atar_api_key, $atar_id, $device_id)

Retorna as taxas do device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$device_id = "device_id_example"; // string | ID do dispositivo

try {
    $result = $apiInstance->payDevicesFeesGet($atar_api_key, $atar_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesFeesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **device_id** | **string**| ID do dispositivo |

### Return type

[**\Swagger\Client\Model\CashinLimits**](../Model/CashinLimits.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesGet**
> \Swagger\Client\Model\Device[] payDevicesGet($atar_api_key, $atar_id)

Recupera dispositivos do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payDevicesGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Device[]**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesIdGet**
> \Swagger\Client\Model\Device payDevicesIdGet($atar_api_key, $atar_id, $device_id)

Recupera um dispositivo do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$device_id = "device_id_example"; // string | ID do dispositivo

try {
    $result = $apiInstance->payDevicesIdGet($atar_api_key, $atar_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **device_id** | **string**| ID do dispositivo |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesLockPut**
> payDevicesLockPut($body, $atar_api_key, $atar_id)

Bloqueia temporariamente o dispositivo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceId(); // \Swagger\Client\Model\DeviceId | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $apiInstance->payDevicesLockPut($body, $atar_api_key, $atar_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesLockPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceId**](../Model/DeviceId.md)|  |
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

# **payDevicesNewExternalPost**
> \Swagger\Client\Model\DeviceCreated payDevicesNewExternalPost($body, $atar_api_key)

Cria um dispositivo externo para o usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceNewExternalRequest(); // \Swagger\Client\Model\DeviceNewExternalRequest | Part number do dispositivo, informações de endereço, id do cartão e emissora
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API

try {
    $result = $apiInstance->payDevicesNewExternalPost($body, $atar_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesNewExternalPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceNewExternalRequest**](../Model/DeviceNewExternalRequest.md)| Part number do dispositivo, informações de endereço, id do cartão e emissora |
 **atar_api_key** | **string**| Chave de acesso da API |

### Return type

[**\Swagger\Client\Model\DeviceCreated**](../Model/DeviceCreated.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesNewPost**
> \Swagger\Client\Model\DeviceCreated payDevicesNewPost($body, $atar_api_key)

Cria um dispositivo para o usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceNewRequest(); // \Swagger\Client\Model\DeviceNewRequest | Part number do dispositivo e informações de endereço
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API

try {
    $result = $apiInstance->payDevicesNewPost($body, $atar_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesNewPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceNewRequest**](../Model/DeviceNewRequest.md)| Part number do dispositivo e informações de endereço |
 **atar_api_key** | **string**| Chave de acesso da API |

### Return type

[**\Swagger\Client\Model\DeviceCreated**](../Model/DeviceCreated.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesPinPut**
> payDevicesPinPut($body, $atar_api_key, $atar_id, $device_id)

Altera a senha do dispositivo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PIN(); // \Swagger\Client\Model\PIN | Novo PIN
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$device_id = "device_id_example"; // string | ID do dispositivo

try {
    $apiInstance->payDevicesPinPut($body, $atar_api_key, $atar_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesPinPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PIN**](../Model/PIN.md)| Novo PIN |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **device_id** | **string**| ID do dispositivo |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesReplacePost**
> \Swagger\Client\Model\Device payDevicesReplacePost($body, $atar_api_key, $atar_id)

Troca um dispositivo para o usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceReplaceRequest(); // \Swagger\Client\Model\DeviceReplaceRequest | Codigo ativacao antigo, Codigo de ativacao e PIN do dispositivo a ser ativado
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payDevicesReplacePost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceReplaceRequest**](../Model/DeviceReplaceRequest.md)| Codigo ativacao antigo, Codigo de ativacao e PIN do dispositivo a ser ativado |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesUnlockPut**
> payDevicesUnlockPut($body, $atar_api_key, $atar_id)

Desbloqueia o dispositivo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeviceId(); // \Swagger\Client\Model\DeviceId | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $apiInstance->payDevicesUnlockPut($body, $atar_api_key, $atar_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesUnlockPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeviceId**](../Model/DeviceId.md)|  |
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

# **payDevicesVirtualCardDelete**
> payDevicesVirtualCardDelete($atar_api_key, $atar_id, $device_id)

Retorna o cartão virtual pelo id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$device_id = "device_id_example"; // string | ID do dispositivo

try {
    $apiInstance->payDevicesVirtualCardDelete($atar_api_key, $atar_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesVirtualCardDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **device_id** | **string**| ID do dispositivo |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesVirtualCardGet**
> \Swagger\Client\Model\Device payDevicesVirtualCardGet($atar_api_key, $atar_id, $device_id)

Retorna o cartão virtual pelo id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$device_id = "device_id_example"; // string | ID do dispositivo

try {
    $result = $apiInstance->payDevicesVirtualCardGet($atar_api_key, $atar_id, $device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesVirtualCardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **device_id** | **string**| ID do dispositivo |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesVirtualCardPost**
> \Swagger\Client\Model\Device payDevicesVirtualCardPost($atar_api_key, $atar_id)

Gera um novo cartão virtual

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payDevicesVirtualCardPost($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesVirtualCardPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payDevicesVirtualCardsGet**
> \Swagger\Client\Model\Device[] payDevicesVirtualCardsGet($atar_api_key, $atar_id)

Recupera os cartões virtuais do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payDevicesVirtualCardsGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->payDevicesVirtualCardsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Device[]**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

