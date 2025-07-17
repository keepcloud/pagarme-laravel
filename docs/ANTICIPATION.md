# [⬅️](../README.md) | Anticipation

Este módulo permite criar, simular, consultar, cancelar e gerenciar antecipações para recebedores.

## Índice

-   [Criar antecipação](#criar-antecipação)
-   [Simular antecipação](#simular-antecipação)
-   [Consultar limites de antecipação](#consultar-limites-de-antecipação)
-   [Cancelar antecipação pendente](#cancelar-antecipação-pendente)
-   [Listar antecipações](#listar-antecipações)
-   [Buscar antecipação específica](#buscar-antecipação-específica)
-   [Confirmar antecipação](#confirmar-antecipação)

## Criar antecipação

**POST** `/recipients/{recipient_id}/bulk_anticipations`

```php
Pagarme:anticipation()->create(string $recipientId, array $data)
```

Descrição: Cria uma antecipação para o recebedor informado, com os dados necessários, como data de pagamento, valor solicitado, período, etc.

## Simular antecipação

**GET** `/recipients/{recipient_id}/bulk_anticipations/simulate`

```php
Pagarme:anticipation()->simulate(string $recipientId, array $queryParams)
```

Descrição: Simula uma antecipação para obter previsões sobre o valor líquido a receber, taxas e data de pagamento.

## Consultar limites de antecipação

**GET** `/recipients/{recipient_id}/bulk_anticipations/limits`

```php
Pagarme:anticipation()->limits(string $recipientId, array $queryParams)
```

Descrição: Retorna os limites máximos e mínimos de antecipação que um recebedor pode fazer, para uma data e período especificados.

## Cancelar antecipação pendente

**POST** `/recipients/{recipient_id}/bulk_anticipations/{bulk_anticipation_id}/cancel`

```php
Pagarme:anticipation()->cancel(string $recipientId, string $anticipationId)
```

Descrição: Cancela uma antecipação com status pendente antes de ser confirmada pelo Pagar.me.

## Listar antecipações

**GET** `/recipients/{recipient_id}/bulk_anticipations`

```php
Pagarme:anticipation()->all(string $recipientId, array $queryParams = [])
```

Descrição: Retorna uma lista com objetos de antecipações, podendo ser filtrada por diversos parâmetros.

## Buscar antecipação específica

**GET** `/recipients/{recipient_id}/bulk_anticipations/{bulk_anticipation_id}`

```php
Pagarme:anticipation()->find(string $recipientId, string $anticipationId)
```

Descrição: Obtém as informações de uma antecipação específica pelo ID do recebedor e da antecipação.

## Confirmar antecipação

**POST** `/recipients/{recipient_id}/bulk_anticipations/{bulk_anticipation_id}/confirm`

```php
Pagarme:anticipation()->confirm(string $recipientId, string $anticipationId)
```

Descrição: Confirma a antecipação para que seja processada conforme o fluxo do Pagar.me.
