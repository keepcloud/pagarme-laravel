# [⬅️](../README.md) | Order

Este módulo permite criar, buscar, listar e gerenciar pedidos e seus itens.

## Índice

-   [Criar pedido](#criar-pedido)
-   [Buscar pedido](#buscar-pedido)
-   [Fechar pedido](#fechar-pedido)
-   [Listar pedidos](#listar-pedidos)
-   [Itens do pedido](#itens-do-pedido)
    -   [Adicionar item](#adicionar-item)
    -   [Atualizar item](#atualizar-item)
    -   [Excluir item](#excluir-item)
    -   [Excluir todos os itens](#excluir-todos-os-itens)
    -   [Listar itens](#listar-itens)

## Criar pedido

**POST** `/orders`

```php
Pagarme:order()->create(array $data)
```

Descrição: Cria um novo pedido com base nos dados fornecidos.

## Buscar pedido

**GET** `/orders/{id}`

```php
Pagarme:order()->find(string $id)
```

Descrição: Obtém as informações de um pedido específico com base no ID.

## Fechar pedido

**POST** `/orders/{id}/closed`

```php
Pagarme:order()->close(string $id)
```

Descrição: Fecha um pedido específico com base no ID.

## Listar pedidos

**GET** `/orders`

```php
Pagarme:order()->all()
```

Descrição: Obtém uma lista de todos os pedidos.

## Itens do pedido

### Adicionar item

**POST** `/orders/{id}/items`

```php
Pagarme:order()->addItem(string $id, array $data)
```

Descrição: Adiciona um novo item a um pedido específico com base no ID do pedido e nos dados do item.

### Atualizar item

**PUT** `/orders/{id}/items/{itemId}`

```php
Pagarme:order()->updateItem(string $id, string $itemId, array $data)
```

Descrição: Atualiza as informações de um item específico associado a um pedido com base nos IDs do pedido e do item, e nos novos dados fornecidos.

### Excluir item

**DELETE** `/orders/{id}/items/{itemId}`

```php
Pagarme:order()->deleteItem(string $id, string $itemId)
```

Descrição: Exclui um item específico associado a um pedido com base nos IDs do pedido e do item.

### Excluir todos os itens

**DELETE** `/orders/{id}/items`

```php
Pagarme:order()->deleteAllItems(string $id)
```

Descrição: Exclui todos os itens associados a um pedido específico com base no ID do pedido.

### Listar itens

**GET** `/orders/{id}/items`

```php
Pagarme:order()->allItems(string $id)
```

Descrição: Obtém uma lista de todos os itens associados a um pedido específico com base no ID do pedido.
