# Customers

POST /customers

```php
Pagarme::customer()->create(array $data)
```

Descrição: Cria um novo cliente com base nos dados fornecidos.

---

GET /customers/{id}


```php
Pagarme::customer()->find(string $id)
```

Descrição: Obtém as informações de um cliente específico com base no ID.

---

PUT /customers/{id}

```php
Pagarme::customer()->update(string $id, array $data)
```

Descrição: Atualiza as informações de um cliente específico com base no ID e nos novos dados fornecidos.

---

GET /customers

```php
Pagarme::customer()->all(array $query)
```

Descrição: Obtém uma lista de todos os clientes cadastrados. É possível passar parâmetros de query para filtrar os resultados.

---

POST /customers/{id}/cards

```php
Pagarme::customer()->createCreditCard(string $id, array $data)
```

Descrição: Cria um novo cartão de crédito associado a um cliente específico com base no ID e nos dados do cartão.

---

GET /customers/{id}/cards/{cardId}

```php
Pagarme::customer()->findCreditCard(string $id, string $cardId)
```

Descrição: Obtém as informações de um cartão de crédito específico associado a um cliente com base nos IDs do cliente e do cartão.

---

GET /customers/{id}/cards

```php
Pagarme::customer()->allCreditCards(string $id)
```

Descrição: Obtém uma lista de todos os cartões de crédito associados a um cliente específico com base no ID do cliente.

---

PUT /customers/{id}/cards/{cardId}

```php
Pagarme::customer()->updateCreditCard(string $id, $cardId, array $data)
```

Descrição: Atualiza as informações de um cartão de crédito específico associado a um cliente com base nos IDs do cliente e do cartão, e nos novos dados fornecidos.

---

DELETE /customers/{id}/cards/{cardId}

```php
Pagarme::customer()->deleteCreditCard(string $id, string $cardId)
```

Descrição: Exclui um cartão de crédito específico associado a um cliente com base nos IDs do cliente e do cartão.

---

POST /customers/{id}/cards/{cardId}/renew

```php
Pagarme::customer()->renewCreditCard(string $id, string $cardId)
```

Descrição: Renova um cartão de crédito específico associado a um cliente com base nos IDs do cliente e do cartão.

---

POST /customers/{id}/addresses

```php
Pagarme::customer()->createAddress(string $id, array $data)
```

Descrição: Cria um novo endereço associado a um cliente específico com base no ID fornecido e nos dados do endereço.

---

GET /customers/{id}/addresses/{addressId}

```php
Pagarme::customer()->findAddress(string $id, string $addressId)
```

Descrição: Obtém as informações de um endereço específico associado a um cliente com base nos IDs do cliente e do endereço.

---

GET /customers/{id}/addresses

```php
Pagarme::customer()->allAddresses(string $id)
```

Descrição: Obtém uma lista de todos os endereços associados a um cliente específico com base no ID do cliente.

---

PUT /customers/{id}/addresses/{addressId}


```php
Pagarme::customer()->updateAddress(string $id, $addressId, array $data)
```

Descrição: Atualiza as informações de um endereço específico associado a um cliente com base nos IDs do cliente e do endereço, e nos novos dados fornecidos.

---

DELETE /customers/{id}/addresses/{addressId}

```php
Pagarme::customer()->deleteAddress(string $id, string $addressId)
```

Descrição: Exclui um endereço específico associado a um cliente com base nos IDs do cliente e do endereço.

---
