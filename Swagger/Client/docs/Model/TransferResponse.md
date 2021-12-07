# TransferResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID da transferência | [optional] 
**transaction_id** | **string** | ID da transacao | numero de autenticacao | [optional] 
**type** | **string** | Tipo da transferência | [optional] 
**amount** | **int** | Valor da transferência em centavos. Ex: para R$ 1,00, é informado 100 | [optional] 
**timestamp** | **string** | Timestamp da realizacao da operacao | [optional] 
**status** | **string** | Status da transferência externa. | [optional] 
**from** | [**\Swagger\Client\Model\TransferTarget**](TransferTarget.md) |  | [optional] 
**to** | [**\Swagger\Client\Model\TransferTarget**](TransferTarget.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

