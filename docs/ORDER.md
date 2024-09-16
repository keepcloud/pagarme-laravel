# Order

POST /orders

```php
Pagarme:order()->create(array $data)
```

Descrição: Cria um novo pedido com base nos dados fornecidos.

---

GET /orders/{id}

```php
Pagarme:order()->find(string $id)
```

Descrição: Obtém as informações de um pedido específico com base no ID.

---

POST /orders/{id}/closed

```php
Pagarme:order()->close(string $id)
```

Descrição: Fecha um pedido específico com base no ID.

---

GET /orders

```php
Pagarme:order()->all()
```

Descrição: Obtém uma lista de todos os pedidos.

---

POST /orders/{id}/items

```php
Pagarme:order()->addItem(string $id, array $data)
```

Descrição: Adiciona um novo item a um pedido específico com base no ID do pedido fornecido e nos dados do item.

---

PUT /orders/{id}/items/{itemId}

```php
Pagarme:order()->updateItem(string $id, string $itemId, array $data)
```

Descrição: Atualiza as informações de um item específico associado a um pedido com base nos IDs do pedido e do item, e nos novos dados fornecidos.

---

DELETE /orders/{id}/items/{itemId}

```php
Pagarme:order()->deleteItem(string $id, string $itemId)
```

Descrição: Exclui um item específico associado a um pedido com base nos IDs do pedido e do item.

---

DELETE /orders/{id}/items

```php
Pagarme:order()->deleteAllItems(string $id)
```

Descrição: Exclui todos os itens associados a um pedido específico com base no ID do pedido.

---

GET /orders/{id}/items

```php
Pagarme:order()->allItems(string $id)
```

Descrição: Obtém uma lista de todos os itens associados a um pedido específico com base no ID do pedido.

---