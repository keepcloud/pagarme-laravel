# [⬅️](../README.md) | Recipients

Este módulo permite criar, buscar, listar e gerenciar destinatários.

## Índice

-   [Criar destinatário](#criar-destinatario)
-   [Buscar destinatário](#buscar-destinatario)
-   [Atualizar destinatário](#atualizar-destinatario)
-   [Listar destinatários](#listar-destinatarios)

## Criar destinatário

**POST** `/recipients`

```php
Pagarme:recipient()->create(array $data)
```

Descrição: Cria um novo destinatário com base nos dados fornecidos.

## Buscar destinatário

**GET** `/recipients/{id}`

```php
Pagarme:recipient()->find(string $id)
```

Descrição: Obtém as informações de um destinatário específico com base no ID.

## Atualizar destinatário

**PUT** `/recipients/{id}`

```php
Pagarme:recipient()->update(string $id, array $data)
```

Descrição: Atualiza as informações de um destinatário específico com base no ID e nos novos dados fornecidos.

## Listar destinatários

**GET** `/recipients`

```php
Pagarme:recipient()->all()
```

Descrição: Obtém uma lista de todos os destinatários.
