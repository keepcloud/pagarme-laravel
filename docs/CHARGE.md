# Charge

POST /charges/{id}/capture

```php
Pagarme:charge()->capture(string $id, array $data)
```

Descrição: Captura um pagamento pendente associado a uma cobrança específica com base no ID da cobrança e nos dados fornecidos.

---

POST /charges

```php
Pagarme:charge()->create(array $data)
```

Descrição: Cria uma nova cobrança com base nos dados fornecidos.

---

GET /charges/{id}

```php
Pagarme:charge()->find(string $id)
```

Descrição: Obtém as informações de uma cobrança específica com base no ID.

---

PUT /charges/{id}/card

```php
Pagarme:charge()->editCard(string $id, array $data)
```

Descrição: Edita as informações do cartão associado a uma cobrança específica com base no ID da cobrança e nos novos dados fornecidos.

---

PUT /charges/{id}/due-date

```php
Pagarme:charge()->dueDate(string $id, array $data)
```

Descrição: Atualiza a data de vencimento de uma cobrança específica com base no ID da cobrança e na nova data de vencimento.

---

PUT /charges/{id}/payment-method

```php
Pagarme:charge()->updatePaymentMethod(string $id, array $data)
```

Descrição: Atualiza o método de pagamento associado a uma cobrança específica com base no ID da cobrança e nos novos dados do método de pagamento.

---

DELETE /charges/{id}

```php
Pagarme:charge()->cancel(string $id)
```

Descrição: Cancela uma cobrança específica com base no ID.

---

GET /charges

```php
Pagarme:charge()->all(array $query)
```

Descrição: Obtém uma lista de todas as cobranças. É possível passar parâmetros de query para filtrar os resultados.

---

POST /charges/{id}/retry

```php
Pagarme:charge()->retry(string $id)
```

Descrição: Tenta novamente realizar um pagamento para uma cobrança específica que tenha falhado anteriormente, com base no ID da cobrança.

---

POST /charges/{id}/confirm-payment

```php
Pagarme:charge()->confirmCash(string $id, array $data)
```

Descrição: Confirma o pagamento em dinheiro associado a uma cobrança específica com base no ID da cobrança e nos dados fornecidos.

---
