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

-   [Requisitos](#requisitos)
-   [Instalação](#instalação)
-   [Configuração](#configuração)
-   [Endpoints disponíveis](#endpoints)
-   [Como usar](#como-usar)
-   [Créditos](#creditos)
-   [Licença](#licenca)

## Requisitos

| Pacote | PHP  | Laravel        |
| ------ | ---- | -------------- |
| 1.3.x  | 8.2+ | 11.x, 12.x, 13.x |
| 1.2.x  | 8.2+ | 11.x           |

> O Laravel 13 exige PHP 8.3 ou superior.

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

## Como usar

Adicione o import no local onde desejar utilizar o pacote:

```php
use Pagarme;
```

Exemplo de uso:

```php
// Criar cliente
$newCustomer = Pagarme::customer()->create([
    'name' => 'Cliente Teste',
    'email' => 'cliente@teste.com',
    'type' => 'individual',
    'document' => '12345678900',
    'document_type' => 'CPF',
]);
dd(json_decode($newCustomer->getBody()->getContents(), true));

// Listar todos os clientes
// $customers = Pagarme::customer()->all();
// dd(json_decode($customers->getBody()->getContents(), true));

// Buscar cliente por ID
// $customer = Pagarme::customer()->find('cus_xxx');
// dd(json_decode($customer->getBody()->getContents(), true));

// Atualizar cliente
// $updated = Pagarme::customer()->update('cus_xxx', [
//     'name' => 'Cliente Atualizado',
//     'email' => 'atualizado@teste.com',
// ]);
// dd(json_decode($updated->getBody()->getContents(), true));

// Criar cartão de crédito
// $card = Pagarme::customer()->createCreditCard('cus_xxx', [
//     'number' => '4111111111111111',
//     'holder_name' => 'Cliente Teste',
//     'exp_month' => '12',
//     'exp_year' => '2030',
//     'cvv' => '123'
// ]);
// dd(json_decode($card->getBody()->getContents(), true));

// Buscar cartão
// $card = Pagarme::customer()->findCreditCard('cus_xxx', 'card_xxx');
// dd(json_decode($card->getBody()->getContents(), true));

// Listar cartões
// $cards = Pagarme::customer()->allCreditCards('cus_xxx');
// dd(json_decode($cards->getBody()->getContents(), true));

// Renovar cartão
// $renewed = Pagarme::customer()->renewCreditCard('cus_xxx', 'card_xxx');
// dd(json_decode($renewed->getBody()->getContents(), true));

// Atualizar cartão
// $updatedCard = Pagarme::customer()->updateCreditCard('cus_xxx', 'card_xxx', [
//     'holder_name' => 'Novo Nome',
//     'exp_month' => 12,
//     'exp_year' => 2036,
// ]);
// dd(json_decode($updatedCard->getBody()->getContents(), true));

// Deletar cartão
// $deletedCard = Pagarme::customer()->deleteCreditCard('cus_xxx', 'card_xxx');
// dd(json_decode($deletedCard->getBody()->getContents(), true));

// Adicionar endereço
// $address = Pagarme::customer()->createAddress('cus_xxx', [
//     'line_1' => 'Rua A',
//     'zip_code' => '12345678',
//     'city' => 'Cidade',
//     'state' => 'SP',
//     'country' => 'BR'
// ]);
// dd(json_decode($address->getBody()->getContents(), true));

// Buscar endereço
// $address = Pagarme::customer()->findAddress('cus_xxx', 'addr_xxx');
// dd(json_decode($address->getBody()->getContents(), true));

// Listar endereços
// $addresses = Pagarme::customer()->allAddresses('cus_xxx');
// dd(json_decode($addresses->getBody()->getContents(), true));

// Atualizar endereço
// $updatedAddress = Pagarme::customer()->updateAddress('cus_xxx', 'addr_xxx', [
//     'line_1' => 'Rua B',
//     'city' => 'Nova Cidade'
// ]);
// dd(json_decode($updatedAddress->getBody()->getContents(), true));

// Deletar endereço
// $deletedAddress = Pagarme::customer()->deleteAddress('cus_xxx', 'addr_xxx');
// dd(json_decode($deletedAddress->getBody()->getContents(), true));
```

## Créditos

[Keepcloud](https://github.com/Keepcloud)

## Licenca

Licença MIT (MIT). Por favor, consulte o [Arquivo de Licença](LICENSE.md) para mais informações.
