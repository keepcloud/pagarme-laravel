# [⬅️](../README.md) | Customers

Este módulo permite criar, atualizar, buscar e gerenciar clientes, seus cartões e enderecos.

## Índice

-   [Customers](#customers)
    -   [Criar cliente](#criar-cliente)
    -   [Buscar cliente](#buscar-cliente)
    -   [Atualizar cliente](#atualizar-cliente)
    -   [Listar clientes](#listar-clientes)
    -   [Cartões](#cartoes)
        -   [Adicionar cartao de crédito](#adicionar-cartao-de-credito)
        -   [Buscar cartao especifico](#buscar-cartao-especifico)
        -   [Listar cartões](#listar-cartoes)
        -   [Renovar cartao](#renovar-cartao)
        -   [Atualizar cartao](#atualizar-cartao)
        -   [Excluir cartao](#excluir-cartao)
    -   [endereços](#enderecos)
        -   [Adicionar endereços](#adicionar-endereco)
        -   [Buscar endereços](#buscar-endereco)
        -   [Listar endereços](#listar-enderecos)
        -   [Atualizar endereços](#atualizar-endereco)
        -   [Excluir endereços](#excluir-endereco)

## Criar cliente

**POST** `/customers`

```php
Pagarme::customer()->create(array $data);
```

Cria um novo cliente com base nos dados fornecidos.

## Buscar cliente

**GET** `/customers/{id}`

```php
Pagarme::customer()->find(string $id);
```

Obtém as informações de um cliente especifico com base no ID.

## Atualizar cliente

**PUT** `/customers/{id}`

```php
Pagarme::customer()->update(string $id, array $data);
```

Atualiza as informações de um cliente especifico com base no ID e nos novos dados fornecidos.

## Listar clientes

**GET** `/customers`

```php
Pagarme::customer()->all(array $query);
```

Obtém uma lista de todos os clientes cadastrados. É possível passar parâmetros de query para filtrar os resultados.

# Cartões

# Adicionar cartao de credito

**POST** `/customers/{id}/cards`

```php
Pagarme::customer()->createCreditCard(string $id, array $data);
```

Cria um novo cartao de crédito associado a um cliente com base no ID e nos dados fornecidos.

# Buscar cartao especifico

**GET** `/customers/{id}/cards/{cardId}`

```php
Pagarme::customer()->findCreditCard(string $id, string $cardId);
```

Obtém as informações de um cartao específico associado a um cliente.

# Listar cartões

**GET** `/customers/{id}/cards`

```php
Pagarme::customer()->allCreditCards(string $id);
```

Obtém todos os cartões de crédito associados a um cliente.

# Renovar cartao

**POST** `/customers/{id}/cards/{cardId}/renew`

```php
Pagarme::customer()->renewCreditCard(string $id, string $cardId);
```

Renova um cartao de crédito específico de um cliente.

# Atualizar cartao

**PUT** `/customers/{id}/cards/{cardId}`

```php
Pagarme::customer()->updateCreditCard(string $id, string $cardId, array $data);
```

Atualiza os dados de um cartao de crédito associado a um cliente.

# Excluir cartao

**DELETE** `/customers/{id}/cards/{cardId}`

```php
Pagarme::customer()->deleteCreditCard(string $id, string $cardId);
```

Exclui um cartao de crédito específico associado a um cliente.

# Enderecos

# Adicionar endereco

**POST** `/customers/{id}/addresses`

```php
Pagarme::customer()->createAddress(string $id, array $data);
```

Cria um novo endereço associado a um cliente com base no ID e nos dados fornecidos.

# Buscar endereco

**GET** `/customers/{id}/addresses/{addressId}`

```php
Pagarme::customer()->findAddress(string $id, string $addressId);
```

Obtém as informações de um endereço específico associado a um cliente.

# Listar enderecos

**GET** `/customers/{id}/addresses`

```php
Pagarme::customer()->allAddresses(string $id);
```

Obtém todos os endereços associados a um cliente.

# Atualizar endereco

**PUT** `/customers/{id}/addresses/{addressId}`

```php
Pagarme::customer()->updateAddress(string $id, string $addressId, array $data);
```

Atualiza as informações de um endereço específico associado a um cliente.

# Excluir endereco

**DELETE** `/customers/{id}/addresses/{addressId}`

```php
Pagarme::customer()->deleteAddress(string $id, string $addressId);
```

Exclui um endereco específico associado a um cliente.
