# [⬅️](../README.md) | Subscription

Este módulo permite gerenciar assinaturas, incluindo criação, busca, listagem e atualização de informações relacionadas a assinaturas.

## Índice

-   [Criar assinatura](#criar-assinatura)
-   [Buscar assinatura](#buscar-assinatura)
-   [Listar assinaturas](#listar-assinaturas)
-   [Cancelar assinatura](#cancelar-assinatura)
-   [Atualizar cartão](#atualizar-cartao)
-   [Atualizar metadados](#atualizar-metadados)
-   [Atualizar método de pagamento](#atualizar-metodo-de-pagamento)
-   [Atualizar data de início](#atualizar-data-de-inicio)
-   [Atualizar preço mínimo](#atualizar-preco-minimo)
-   [Ativar faturamento manual](#ativar-faturamento-manual)
-   [Desativar faturamento manual](#desativar-faturamento-manual)

## Criar assinatura

**POST** `/subscriptions`

```php
Pagarme::subscription()->create(array $data)
```

Descrição: Cria uma assinatura (subscription) avulsa ou de um plano (plan).

## Buscar assinatura

**GET** `/subscriptions/{id}`

```php
Pagarme::subscription()->find(string $id)
```

Descrição: Obtém os detalhes de uma assinatura específica pelo seu ID.

## Listar assinaturas

**GET** `/subscriptions`

```php
Pagarme::subscription()->all(array $query)
```

Descrição: Retorna uma lista de todas as assinaturas. É possível passar parâmetros de query para filtrar os resultados.

## Cancelar assinatura

**DELETE** `/subscriptions/{id}`

```php
Pagarme::subscription()->cancel(string $id)
```

Descrição: Cancela uma assinatura específica pelo seu ID.

## Atualizar cartão

**PATCH** `/subscriptions/{id}/card`

```php
Pagarme::subscription()->updateCard(string $id, array $data)
```

Descrição: Atualiza as informações do cartão de crédito da assinatura.

## Atualizar metadados

**PATCH** `/subscriptions/{id}/metadata`

```php
Pagarme::subscription()->updateMetadata(string $id)
```

Descrição: Atualiza os metadados de uma assinatura.

## Atualizar método de pagamento

**PATCH** `/subscriptions/{id}/payment-method`

```php
Pagarme::subscription()->updatePaymentMethod(string $id)
```

Descrição: Atualiza o método de pagamento da assinatura.

## Atualizar data de início

**PATCH** `/subscriptions/{id}/start-at`

```php
Pagarme::subscription()->updateStartAt(string $id)
```

Descrição: Atualiza a data de início da assinatura.

## Atualizar preço mínimo

**PATCH** `/subscriptions/{id}/minimum_price`

```php
Pagarme::subscription()->updateMinimumPrice(string $id)
```

Descrição: Atualiza o preço mínimo da assinatura.

## Ativar faturamento manual

**POST** `/subscriptions/{id}/manual-billing`

```php
Pagarme::subscription()->enableManualBilling(string $id)
```

Descrição: Ativa o faturamento manual para uma assinatura.

## Desativar faturamento manual

**DELETE** `/subscriptions/{id}/manual-billing`

```php
Pagarme::subscription()->disableManualBilling(string $id)
```

Descrição: Desativa o faturamento manual para uma assinatura.
