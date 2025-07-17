<p align="center">
  <img src="https://avatars.githubusercontent.com/u/3846050?s=200&v=4" alt="Pagar.me" width="80">
</p>

<h1 align="center">
    Pagar.me - Laravel
</h1>

<p align="center">
  Integração da API <a href="https://pagar.me">Pagar.me</a> com o framework <a href="https://laravel.com">Laravel</a>.
</p>

## 📚 Índice

-   [Instalação](#instalação)
-   [Configuração](#configuração)
-   [Como usar](#como-usar)
-   [Endpoints disponíveis](#endpoints)
-   [Créditos](#creditos)
-   [Licença](#licenca)

## Instalação

Você pode instalar o pacote via composer.

```bash
composer require keepcloud/pagarme-laravel
```

## Configuração

Antes de começar a utilizar o pacote, adicione sua chave de API no arquivo `.env` da aplicação:

```env
PAGARME_API_KEY=ak_test_sua_chave_aqui
```

Em seguida, certifique-se de que o arquivo de configuração `config/pagarme.php` esteja publicado e corretamente configurado. Ele será responsável por armazenar os dados de conexão com a API do Pagar.me:

##### config/pagarme.php

```php
<?php

return [
    'api_key'     => env('PAGARME_API_KEY', 'ak_test_*'),
    'base_url'    => 'https://api.pagar.me/core',
    'api_version' => 'v5',
];
```

Se você ainda não publicou o arquivo de configuração, execute o comando abaixo:

```bash
php artisan vendor:publish --tag="pagarme-config"
```

Esse passo é essencial para garantir que a integração com a API funcione corretamente, utilizando a chave de autenticação e a URL base da API do Pagar.me.

## Como usar

Adicione o import no local onde desejar utilizar o pacote:

```php
use Pagarme;
```

Exemplo de uso:

```php
$customers = Pagarme::customer()->all();

$customersArray = json_decode($customers->getBody()->getContents(), true);

dd($customersArray);
```

## Endpoints

Consulte as funções disponíveis para interagir com a API do Pagar.me.

| Módulo       | Descrição                                      | Documentação                         |
| ------------ | ---------------------------------------------- | ------------------------------------ |
| Customer     | Gerenciamento de clientes, cartões e endereços | [Ver detalhes](docs/CUSTOMER.md)     |
| Charge       | Cobranças e captura de pagamentos              | [Ver detalhes](docs/CHARGE.md)       |
| Order        | Criação e controle de pedidos e itens          | [Ver detalhes](docs/ORDER.md)        |
| Recipients   | Gerenciamento de recebedores/destinatários     | [Ver detalhes](docs/RECIPIENTS.md)   |
| Subscription | Assinaturas e faturamento recorrente           | [Ver detalhes](docs/SUBSCRIPTION.md) |
| Anticipation | Antecipação de recebíveis                      | [Ver detalhes](docs/ANTICIPATION.md) |

## Créditos

[Keepcloud](https://github.com/Keepcloud)

## Licenca

Licença MIT (MIT). Por favor, consulte o [Arquivo de Licença](LICENSE.md) para mais informações.
