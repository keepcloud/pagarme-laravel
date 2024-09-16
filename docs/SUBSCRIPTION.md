# Subscription

POST /subscriptions

```php
Pagarme:subscription()->create(array $data)
```

Descrição: Cria uma assinatura (subscription)  avulsa / Cria assinatura de plan(plan).

---
GET /subscriptions/{id}

```php
Pagarme::subscription()->find(string $id)
```

Descrição: Obtém os detalhes de uma assinatura específica pelo seu ID.

---

GET /subscriptions

```php
Pagarme::subscription()->all()
```

Descrição: Retorna uma lista de todas as assinaturas.

---

DELETE /subscriptions/{id}

```php
Pagarme::subscription()->cancel(string $id)
```

Descrição: Cancela uma assinatura específica pelo seu ID.

---

PATCH /subscriptions/{id}/card

```php
Pagarme::subscription()->updateCard(string $id)
```

Descrição: Atualiza as informações do cartão de crédito da assinatura.

---

PATCH /subscriptions/{id}/metadata

```php
Pagarme::subscription()->updateMetadata(string $id)
```

Descrição: Atualiza os metadados de uma assinatura.

---

PATCH /subscriptions/{id}/payment-method

```php
Pagarme::subscription()->updatePaymentMethod(string $id)
```

Descrição: Atualiza o método de pagamento da assinatura.

---

PATCH /subscriptions/{id}/start-at

```php
Pagarme::subscription()->updateStartAt(string $id)
```

Descrição: Atualiza a data de início da assinatura.

---

PATCH /subscriptions/{id}/minimum_price

```php
Pagarme::subscription()->updateMinimumPrice(string $id)
```

Descrição: Atualiza o preço mínimo da assinatura.

---

POST /subscriptions/{id}/manual-billing

```php
Pagarme::subscription()->enableManualBilling(string $id)
```

Descrição: Ativa o faturamento manual para uma assinatura.

---

DELETE /subscriptions/{id}/manual-billing

```php
Pagarme::subscription()->disableManualBilling(string $id)
```

Descrição: Desativa o faturamento manual para uma assinatura.

---