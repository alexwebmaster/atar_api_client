# Boleto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cashin_id** | **string** | ID do cash-in | [optional] 
**transaction_id** | **string** | ID da transacao | numero de autenticacao | [optional] 
**due_date** | **string** | Timestamp da data de validade do boleto | [optional] 
**settle_date** | **string** | Timestamp da data de liquidacao do boleto | [optional] 
**timestamp** | **string** | Timestamp da data de emissao do boleto | [optional] 
**typeful_line** | **string** | Linha digitavel do boleto | [optional] 
**amount** | **int** | Valor total do boleto | [optional] 
**original_amount** | **int** | Valor do boleto sem juros, multas ou descontos | [optional] 
**amount_paid** | **int** | Valor pago do boleto | [optional] 
**max_value** | **int** | Indica valor maximo do boleto | [optional] 
**min_value** | **int** | Indica valor minimo do boleto | [optional] 
**discount** | **int** | Valor do desconto | [optional] 
**interest** | **int** | Valor dos juros e multa | [optional] 
**beneficiary** | **string** | Beneficiario do boleto | [optional] 
**beneficiary_document** | **string** | Documento do beneficiario do boleto | [optional] 
**payer** | **string** | Pagador do boleto | [optional] 
**payer_document** | **string** | Documento do pagador do boleto | [optional] 
**assignor** | **string** | Emissor do boleto | [optional] 
**can_change_amount** | **bool** | Indica a possibilidade de alterar o valor do boleto | [optional] 
**status** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

