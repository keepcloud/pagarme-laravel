# Recipients

POST /recipients

```php
Pagarme:recipent()->create(array $data)
```

Descrição: Cria um novo destinatário com base nos dados fornecidos.

---

GET /recipients/{id}

```php
Pagarme:recipent()->find(string $id)
```

Descrição: Obtém as informações de um destinatário específico com base no ID.

---

PUT /recipients/{id}

```php
Pagarme:recipent()->update(string $id, array $data)
```

Descrição: Atualiza as informações de um destinatário específico com base no ID e nos novos dados fornecidos.

---

GET /recipients

```php
Pagarme:recipent()->all()
```

Descrição: Obtém uma lista de todos os destinatários.

---