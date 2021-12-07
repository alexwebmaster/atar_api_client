# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**atar_id** | **string** | ATAR ID do usuario | [optional] 
**event_id** | **string** | ID do evento | [optional] 
**type** | **string** | Tipo do evento.&lt;br&gt;&lt;br&gt;&#x60;system&#x60;, &#x60;input&#x60;, &#x60;output&#x60; | [optional] 
**category** | **string** | Transacional: &#x60;pix_in&#x60;, &#x60;pix_out&#x60;, &#x60;pix_refund&#x60;, &#x60;transfer_in&#x60;, &#x60;transfer_out&#x60;, &#x60;pay_bill&#x60;, &#x60;phone_recharge&#x60;, &#x60;cashin_request&#x60;, &#x60;refund&#x60;&lt;br&gt;&lt;br&gt; Sistema: &#x60;locked&#x60;, &#x60;system&#x60; | [optional] 
**timestamp** | **string** | Timestamp da data do evento | [optional] 
**title** | **string** | Titulo do evento | [optional] 
**subtitle** | **string** | Subtitulo do evento | [optional] 
**detail** | **object** | Detalhe do evento. Cast para Cash-in, Purchase, etc... | [optional] 
**device_type** | **string** | Tipo do device | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

