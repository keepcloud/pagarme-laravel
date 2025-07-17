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
-   [Créditos](#créditos)
-   [Licença](#licença)

## Instalação

Você pode instalar o pacote via composer.

```bash
composer require keepcloud/pagarme-laravel
```

## Configuração

Publique o arquivo de configuração global com o comando:

```bash
php artisan vendor:publish --tag="pagarme-config"
```

## Como usar

Adicione o import no local onde desejar utilizar o pacote:

```php
use Pagarme;
```

Exemplo de uso:

```php
Pagarme::customer()->all();
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

## Credits

[Keepcloud](https://github.com/Keepcloud)

## License

Licença MIT (MIT). Por favor, consulte o [Arquivo de Licença](LICENSE.md) para mais informações.
