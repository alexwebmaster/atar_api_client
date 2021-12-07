# PixPaymentData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id do pagamento | [optional] 
**transaction_id** | **string** | Id da transação | [optional] 
**transaction_type** | [**\Swagger\Client\Model\PixTransactionType**](PixTransactionType.md) |  | [optional] 
**transaction_status** | [**\Swagger\Client\Model\PixTransactionStatus**](PixTransactionStatus.md) |  | [optional] 
**is_refund** | **bool** | Indica se é uma devolução | [optional] 
**timestamp** | **string** | Timestamp do pagamento | [optional] 
**due_timestamp** | **string** | Timestamp do vencimento | [optional] 
**expiration_timestamp** | **string** | Timestamp máximo para pagamento | [optional] 
**discount_timestamp** | **string** | Timestamp máximo para o desconto | [optional] 
**fine_timestamp** | **string** | Timestamp máximo para multa | [optional] 
**interest_timestamp** | **string** | Timestamp máximo para juros | [optional] 
**amount** | **int** | Valor total do pagamento | [optional] 
**original_amount** | **int** | Valor do pagamento sem juros, multas ou descontos | [optional] 
**discount_amount** | **int** | Valor total do desconto | [optional] 
**fine_amount** | **int** | Valor total da multa | [optional] 
**interest_amount** | **int** | Valor total dos juros | [optional] 
**total_refunded_amount** | **int** | Valor total das devoluções | [optional] 
**identifier** | **string** | Descrição do pagamento | [optional] 
**description** | **string** | Descrição do pagamento | [optional] 
**can_change_amount** | **bool** | Indica a possibilidade de alterar o valor do pagamento | [optional] 
**can_pay_after_due_timestamp** | **bool** | Indica a possibilidade de pagar após o vencimento | [optional] 
**from** | [**\Swagger\Client\Model\PixKey**](PixKey.md) |  | [optional] 
**to** | [**\Swagger\Client\Model\PixKey**](PixKey.md) |  | [optional] 
**original_transaction** | [**\Swagger\Client\Model\PixResume**](PixResume.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

