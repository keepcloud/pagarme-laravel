# [⬅️](../README.md) | Charge

Este módulo permite criar, capturar, atualizar e gerenciar cobranças.

## Índice

-   [Capturar cobrança](#capturar-cobrança)
-   [Criar cobrança](#criar-cobrança)
-   [Buscar cobrança](#buscar-cobrança)
-   [Editar cartao da cobrança](#editar-cartao-da-cobrança)
-   [Atualizar data de vencimento](#atualizar-data-de-vencimento)
-   [Atualizar método de pagamento](#atualizar-metodo-de-pagamento)
-   [Cancelar cobrança](#cancelar-cobrança)
-   [Listar cobranças](#listar-cobranças)
-   [Tentar pagamento novamente](#tentar-pagamento-novamente)
-   [Confirmar pagamento em dinheiro](#confirmar-pagamento-em-dinheiro)

## Capturar cobrança

**POST** `/charges/{id}/capture`

```php
Pagarme:charge()->capture(string $id, array $data)
```

Descrição: Captura um pagamento pendente associado a uma cobrança específica com base no ID da cobrança e nos dados fornecidos.

## Criar cobrança

**POST** `/charges`

```php
Pagarme:charge()->create(array $data)
```

Descrição: Cria uma nova cobrança com base nos dados fornecidos.

## Buscar cobrança

**GET** `/charges/{id}`

```php
Pagarme:charge()->find(string $id)
```

Descrição: Obtém as informações de uma cobrança específica com base no ID.

## Editar cartao da cobrança

**PUT** `/charges/{id}/card`

```php
Pagarme:charge()->editCard(string $id, array $data)
```

Descrição: Edita as informações do cartao associado a uma cobrança específica com base no ID da cobrança e nos novos dados fornecidos.

## Atualizar data de vencimento

**PUT** `/charges/{id}/due-date`

```php
Pagarme:charge()->dueDate(string $id, array $data)
```

Descrição: Atualiza a data de vencimento de uma cobrança específica com base no ID da cobrança e na nova data de vencimento.

## Atualizar método de pagamento

**PUT** `/charges/{id}/payment-method`

```php
Pagarme:charge()->updatePaymentMethod(string $id, array $data)
```

Descrição: Atualiza o método de pagamento associado a uma cobrança específica com base no ID da cobrança e nos novos dados do método de pagamento.

## Cancelar cobrança

**DELETE** `/charges/{id}`

```php
Pagarme:charge()->cancel(string $id)
```

Descrição: Cancela uma cobrança específica com base no ID.

## Listar cobranças

**GET** `/charges`

```php
Pagarme:charge()->all(array $query)
```

Descrição: Obtém uma lista de todas as cobranças. É possível passar parâmetros de query para filtrar os resultados.

## Tentar pagamento novamente

**POST** `/charges/{id}/retry`

```php
Pagarme:charge()->retry(string $id)
```

Descrição: Tenta novamente realizar um pagamento para uma cobrança específica que tenha falhado anteriormente, com base no ID da cobrança.

## Confirmar pagamento em dinheiro

**POST** `/charges/{id}/confirm-payment`

```php
Pagarme:charge()->confirmCash(string $id, array $data)
```

Descrição: Confirma o pagamento em dinheiro associado a uma cobrança específica com base no ID da cobrança e nos dados fornecidos.
