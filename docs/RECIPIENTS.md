# [⬅️](../README.md) | Recipients

Este módulo permite criar, buscar, listar e gerenciar destinatarios.

## Índice

-   [Criar destinatario](#criar-destinatario)
-   [Buscar destinatario](#buscar-destinatario)
-   [Atualizar destinatario](#atualizar-destinatario)
-   [Listar destinatarios](#listar-destinatarios)

## Criar destinatario

**POST** `/recipients`

```php
Pagarme:recipient()->create(array $data)
```

Descrição: Cria um novo destinatario com base nos dados fornecidos.

## Buscar destinatario

**GET** `/recipients/{id}`

```php
Pagarme:recipient()->find(string $id)
```

Descrição: Obtém as informações de um destinatario específico com base no ID.

## Atualizar destinatario

**PUT** `/recipients/{id}`

```php
Pagarme:recipient()->update(string $id, array $data)
```

Descrição: Atualiza as informações de um destinatario específico com base no ID e nos novos dados fornecidos.

## Listar destinatarios

**GET** `/recipients`

```php
Pagarme:recipient()->all()
```

Descrição: Obtém uma lista de todos os destinatarios.
