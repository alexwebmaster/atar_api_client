# Swagger\Client\PayApi

All URIs are relative to *https://pay-dot-wearatar-dev.appspot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payBalanceGet**](PayApi.md#paybalanceget) | **GET** /balance | Recupera o saldo do usuario
[**payBoletoFeesGet**](PayApi.md#payboletofeesget) | **GET** /cashin/boleto/fees | Recupera taxas de cash-in do usuario
[**payBoletoGet**](PayApi.md#payboletoget) | **GET** /cashin/boleto/{cashinId} | Recupera boleto do cash-in requisitado
[**payBoletoPost**](PayApi.md#payboletopost) | **POST** /cashin/boleto | Gera boleto de cash-in
[**payCashinOptionsGet**](PayApi.md#paycashinoptionsget) | **GET** /cashin/options | retorna as opções disponíveis para cashin, e as tarifas/limites, envolvidos
[**payCashinTedReceiptPost**](PayApi.md#paycashintedreceiptpost) | **POST** /cashin/ted/start-receipt-chat/{bankId} | Inicia chat via intercom para envio do comprovante
[**payCashoutBoletoDetailsGet**](PayApi.md#paycashoutboletodetailsget) | **GET** /cashout/boleto/details/{number} | Realiza a consulta dos dados de um boleto
[**payCashoutBoletoPost**](PayApi.md#paycashoutboletopost) | **POST** /cashout/boleto | Realiza o pagamento de um boleto
[**payCashoutPhoneRechargeOptionsGet**](PayApi.md#paycashoutphonerechargeoptionsget) | **GET** /cashout/phone-recharge/options | Get saved cellphone numbers and options for top up
[**payCashoutPhoneRechargePost**](PayApi.md#paycashoutphonerechargepost) | **POST** /cashout/phone-recharge | Recharge a prepaid phone number.
[**payCashoutPhoneRechargeValuesGet**](PayApi.md#paycashoutphonerechargevaluesget) | **GET** /cashout/phone-recharge/values | Get carrier and recharge values by cellphone number
[**payCheckoutDelete**](PayApi.md#paycheckoutdelete) | **DELETE** /checkouts/{checkoutId} | Nega o checkout
[**payCheckoutGet**](PayApi.md#paycheckoutget) | **GET** /checkouts/{checkoutId} | Consulta os detalhes do checkout
[**payCheckoutPut**](PayApi.md#paycheckoutput) | **PUT** /checkouts/{checkoutId} | Confirma o checkout e realiza o pagamento
[**payExternalTransferPost**](PayApi.md#payexternaltransferpost) | **POST** /transfer/external | Realiza uma transferencia bancaria (TED)
[**payHistoryRecentsGet**](PayApi.md#payhistoryrecentsget) | **GET** /history/recents | Historico de eventos recentes do usuario a partir ou antes de determinada data
[**payInternalTransferPost**](PayApi.md#payinternaltransferpost) | **POST** /transfer/internal | Realiza uma transferencia entre usuarios
[**payNotificationsEmailPost**](PayApi.md#paynotificationsemailpost) | **POST** /notifications/email | Envia notificacoes por e-mail
[**payNotificationsPushDelete**](PayApi.md#paynotificationspushdelete) | **DELETE** /notifications/push/{deviceUUID} | Deleta token do banco de dados e para o envio de push notification
[**payNotificationsPushPost**](PayApi.md#paynotificationspushpost) | **PUT** /notifications/push | Salva token para envio de push notification
[**payPurchasesGet**](PayApi.md#paypurchasesget) | **GET** /purchases/{purchase} | Recupera uma compra do usuario
[**payPurchasesPut**](PayApi.md#paypurchasesput) | **PUT** /purchases/{purchase} | Atualiza uma compra do usuario
[**paySubscriptionGet**](PayApi.md#paysubscriptionget) | **GET** /subscription | Recupera o plano ativo no momento
[**paySubscriptionPost**](PayApi.md#paysubscriptionpost) | **POST** /subscription | Recupera detalhes do plano atrelado ao dispositivo informado
[**payTransferOptionsGet**](PayApi.md#paytransferoptionsget) | **GET** /transfer/options | Retorna as opções disponíveis para transferencia e as tarifas e limites envolvidos

# **payBalanceGet**
> \Swagger\Client\Model\Balance payBalanceGet($atar_api_key, $atar_id)

Recupera o saldo do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payBalanceGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payBalanceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Balance**](../Model/Balance.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payBoletoFeesGet**
> \Swagger\Client\Model\CashinLimits payBoletoFeesGet($atar_api_key, $atar_id)

Recupera taxas de cash-in do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payBoletoFeesGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payBoletoFeesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\CashinLimits**](../Model/CashinLimits.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payBoletoGet**
> \Swagger\Client\Model\Boleto payBoletoGet($atar_api_key, $atar_id, $cashin_id)

Recupera boleto do cash-in requisitado

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$cashin_id = "cashin_id_example"; // string | ID do cash-in requisitado

try {
    $result = $apiInstance->payBoletoGet($atar_api_key, $atar_id, $cashin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payBoletoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **cashin_id** | **string**| ID do cash-in requisitado |

### Return type

[**\Swagger\Client\Model\Boleto**](../Model/Boleto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payBoletoPost**
> \Swagger\Client\Model\Boleto payBoletoPost($body, $atar_api_key, $atar_id)

Gera boleto de cash-in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CashinRequest(); // \Swagger\Client\Model\CashinRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payBoletoPost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payBoletoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CashinRequest**](../Model/CashinRequest.md)|  |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Boleto**](../Model/Boleto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCashinOptionsGet**
> \Swagger\Client\Model\CashinOptions payCashinOptionsGet($atar_api_key, $atar_id)

retorna as opções disponíveis para cashin, e as tarifas/limites, envolvidos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payCashinOptionsGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCashinOptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\CashinOptions**](../Model/CashinOptions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCashinTedReceiptPost**
> payCashinTedReceiptPost($atar_api_key, $atar_id, $bank_id)

Inicia chat via intercom para envio do comprovante

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$bank_id = "bank_id_example"; // string | Id do banco

try {
    $apiInstance->payCashinTedReceiptPost($atar_api_key, $atar_id, $bank_id);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCashinTedReceiptPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **bank_id** | **string**| Id do banco |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCashoutBoletoDetailsGet**
> \Swagger\Client\Model\Boleto payCashoutBoletoDetailsGet($atar_api_key, $atar_id, $number)

Realiza a consulta dos dados de um boleto

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$number = "number_example"; // string | Codigo de barras ou linha digitavel

try {
    $result = $apiInstance->payCashoutBoletoDetailsGet($atar_api_key, $atar_id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCashoutBoletoDetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **number** | **string**| Codigo de barras ou linha digitavel |

### Return type

[**\Swagger\Client\Model\Boleto**](../Model/Boleto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCashoutBoletoPost**
> \Swagger\Client\Model\Boleto payCashoutBoletoPost($body, $atar_api_key, $atar_id)

Realiza o pagamento de um boleto

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CashoutBoletoRequest(); // \Swagger\Client\Model\CashoutBoletoRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payCashoutBoletoPost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCashoutBoletoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CashoutBoletoRequest**](../Model/CashoutBoletoRequest.md)|  |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Boleto**](../Model/Boleto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCashoutPhoneRechargeOptionsGet**
> \Swagger\Client\Model\RechargeOptions payCashoutPhoneRechargeOptionsGet($atar_api_key, $atar_id)

Get saved cellphone numbers and options for top up

Retorna os telefones salvos e opções para recarga

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payCashoutPhoneRechargeOptionsGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCashoutPhoneRechargeOptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\RechargeOptions**](../Model/RechargeOptions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCashoutPhoneRechargePost**
> \Swagger\Client\Model\PhoneRechargeResponse payCashoutPhoneRechargePost($body, $atar_api_key, $atar_id)

Recharge a prepaid phone number.

Recarrega um número pré-pago.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PhoneRechargeRequest(); // \Swagger\Client\Model\PhoneRechargeRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payCashoutPhoneRechargePost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCashoutPhoneRechargePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PhoneRechargeRequest**](../Model/PhoneRechargeRequest.md)|  |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\PhoneRechargeResponse**](../Model/PhoneRechargeResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCashoutPhoneRechargeValuesGet**
> \Swagger\Client\Model\PhoneRechargeValuesResponse payCashoutPhoneRechargeValuesGet($atar_api_key, $atar_id, $country_code, $number)

Get carrier and recharge values by cellphone number

Consulta operadora e valores de recarga por número de celular.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$country_code = "country_code_example"; // string | DDI - código do país, apenas números. Ex: Brasil = 55; USA = 1
$number = "number_example"; // string | Número do celular pré-pago com DDD, apenas números. Ex: 11999991234

try {
    $result = $apiInstance->payCashoutPhoneRechargeValuesGet($atar_api_key, $atar_id, $country_code, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCashoutPhoneRechargeValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **country_code** | **string**| DDI - código do país, apenas números. Ex: Brasil &#x3D; 55; USA &#x3D; 1 |
 **number** | **string**| Número do celular pré-pago com DDD, apenas números. Ex: 11999991234 |

### Return type

[**\Swagger\Client\Model\PhoneRechargeValuesResponse**](../Model/PhoneRechargeValuesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCheckoutDelete**
> payCheckoutDelete($atar_api_key, $atar_id, $checkout_id)

Nega o checkout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$checkout_id = "checkout_id_example"; // string | ID do checkout

try {
    $apiInstance->payCheckoutDelete($atar_api_key, $atar_id, $checkout_id);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCheckoutDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **checkout_id** | **string**| ID do checkout |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCheckoutGet**
> \Swagger\Client\Model\Checkout payCheckoutGet($atar_api_key, $atar_id, $checkout_id)

Consulta os detalhes do checkout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$checkout_id = "checkout_id_example"; // string | ID do checkout

try {
    $result = $apiInstance->payCheckoutGet($atar_api_key, $atar_id, $checkout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCheckoutGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **checkout_id** | **string**| ID do checkout |

### Return type

[**\Swagger\Client\Model\Checkout**](../Model/Checkout.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payCheckoutPut**
> payCheckoutPut($body, $atar_api_key, $atar_id, $checkout_id)

Confirma o checkout e realiza o pagamento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CheckoutRequest(); // \Swagger\Client\Model\CheckoutRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$checkout_id = "checkout_id_example"; // string | ID do checkout

try {
    $apiInstance->payCheckoutPut($body, $atar_api_key, $atar_id, $checkout_id);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payCheckoutPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CheckoutRequest**](../Model/CheckoutRequest.md)|  |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **checkout_id** | **string**| ID do checkout |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payExternalTransferPost**
> \Swagger\Client\Model\TransferResponse payExternalTransferPost($body, $atar_api_key, $atar_id)

Realiza uma transferencia bancaria (TED)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExternalTransferRequest(); // \Swagger\Client\Model\ExternalTransferRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payExternalTransferPost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payExternalTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalTransferRequest**](../Model/ExternalTransferRequest.md)|  |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\TransferResponse**](../Model/TransferResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payHistoryRecentsGet**
> \Swagger\Client\Model\Resume payHistoryRecentsGet($atar_api_key, $atar_id, $page, $before, $after, $page_size)

Historico de eventos recentes do usuario a partir ou antes de determinada data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$page = "page_example"; // string | Cursor da pagina desejada. Caso nao seja informado, retorna os ultimos 50 resultados
$before = 789; // int | Recuperar eventos antes dessa data (requerido se after nao informado)
$after = 789; // int | Recuperar eventos depois dessa data (requerido se before nao informado)
$page_size = 56; // int | Quantidade de resultados por pagina. Caso nao seja informado, o padrao de 50 e estabelecido

try {
    $result = $apiInstance->payHistoryRecentsGet($atar_api_key, $atar_id, $page, $before, $after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payHistoryRecentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **page** | **string**| Cursor da pagina desejada. Caso nao seja informado, retorna os ultimos 50 resultados | [optional]
 **before** | **int**| Recuperar eventos antes dessa data (requerido se after nao informado) | [optional]
 **after** | **int**| Recuperar eventos depois dessa data (requerido se before nao informado) | [optional]
 **page_size** | **int**| Quantidade de resultados por pagina. Caso nao seja informado, o padrao de 50 e estabelecido | [optional]

### Return type

[**\Swagger\Client\Model\Resume**](../Model/Resume.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payInternalTransferPost**
> \Swagger\Client\Model\TransferResponse payInternalTransferPost($body, $atar_api_key, $atar_id)

Realiza uma transferencia entre usuarios

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TransferRequest(); // \Swagger\Client\Model\TransferRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payInternalTransferPost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payInternalTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TransferRequest**](../Model/TransferRequest.md)|  |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\TransferResponse**](../Model/TransferResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payNotificationsEmailPost**
> payNotificationsEmailPost($body, $atar_api_key, $atar_id)

Envia notificacoes por e-mail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EmailRequest(); // \Swagger\Client\Model\EmailRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $apiInstance->payNotificationsEmailPost($body, $atar_api_key, $atar_id);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payNotificationsEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EmailRequest**](../Model/EmailRequest.md)|  |
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

# **payNotificationsPushDelete**
> payNotificationsPushDelete($atar_api_key, $atar_id, $device_uuid)

Deleta token do banco de dados e para o envio de push notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$device_uuid = "device_uuid_example"; // string | Device UUID o qual vai parar de receber notificacoes

try {
    $apiInstance->payNotificationsPushDelete($atar_api_key, $atar_id, $device_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payNotificationsPushDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **device_uuid** | **string**| Device UUID o qual vai parar de receber notificacoes |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payNotificationsPushPost**
> payNotificationsPushPost($body, $atar_api_key, $atar_id)

Salva token para envio de push notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PushRequest(); // \Swagger\Client\Model\PushRequest | 
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $apiInstance->payNotificationsPushPost($body, $atar_api_key, $atar_id);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payNotificationsPushPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PushRequest**](../Model/PushRequest.md)|  |
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

# **payPurchasesGet**
> \Swagger\Client\Model\Purchase payPurchasesGet($atar_api_key, $atar_id, $purchase)

Recupera uma compra do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$purchase = "purchase_example"; // string | ID da compra

try {
    $result = $apiInstance->payPurchasesGet($atar_api_key, $atar_id, $purchase);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payPurchasesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **purchase** | **string**| ID da compra |

### Return type

[**\Swagger\Client\Model\Purchase**](../Model/Purchase.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payPurchasesPut**
> payPurchasesPut($body, $atar_api_key, $atar_id, $purchase)

Atualiza uma compra do usuario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CoordsObject(); // \Swagger\Client\Model\CoordsObject | Coordenadas a inserir
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)
$purchase = "purchase_example"; // string | ID da compra

try {
    $apiInstance->payPurchasesPut($body, $atar_api_key, $atar_id, $purchase);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payPurchasesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CoordsObject**](../Model/CoordsObject.md)| Coordenadas a inserir |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |
 **purchase** | **string**| ID da compra |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paySubscriptionGet**
> \Swagger\Client\Model\Plan paySubscriptionGet($atar_api_key, $atar_id)

Recupera o plano ativo no momento

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->paySubscriptionGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->paySubscriptionGet: ', $e->getMessage(), PHP_EOL;
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

# **paySubscriptionPost**
> \Swagger\Client\Model\Plan paySubscriptionPost($body, $atar_api_key, $atar_id)

Recupera detalhes do plano atrelado ao dispositivo informado

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SubscriptionRequest(); // \Swagger\Client\Model\SubscriptionRequest | Codigo de ativacao do dispositivo
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->paySubscriptionPost($body, $atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->paySubscriptionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)| Codigo de ativacao do dispositivo |
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\Plan**](../Model/Plan.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payTransferOptionsGet**
> \Swagger\Client\Model\TransferOptions payTransferOptionsGet($atar_api_key, $atar_id)

Retorna as opções disponíveis para transferencia e as tarifas e limites envolvidos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$atar_api_key = "atar_api_key_example"; // string | Chave de acesso da API
$atar_id = "atar_id_example"; // string | Identificador da conta (ver <a href=\"https://origination-dot-wearatar-dev.appspot.com/docs\" target=\"_blank\">API de Originação</a>)

try {
    $result = $apiInstance->payTransferOptionsGet($atar_api_key, $atar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->payTransferOptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **atar_api_key** | **string**| Chave de acesso da API |
 **atar_id** | **string**| Identificador da conta (ver &lt;a href&#x3D;\&quot;https://origination-dot-wearatar-dev.appspot.com/docs\&quot; target&#x3D;\&quot;_blank\&quot;&gt;API de Originação&lt;/a&gt;) |

### Return type

[**\Swagger\Client\Model\TransferOptions**](../Model/TransferOptions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

