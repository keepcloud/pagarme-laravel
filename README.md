# PAGAR.ME - Laravel

Este pacote é uma integração da API do pagar.me com o Laravel.

## Instalação

Você pode instalar o pacote via composer.

```bash
composer require keepcloud/pagarme-laravel
```

Publique o arquivo de configuração global com o comando:

```bash
php artisan vendor:publish --tag="pagarme-config"
```

## Como usar

Adicione o import no local onde deseja utilizar o pacote.

```php
use Pagarme;
```

## Endpoints

Utilize as funções disponíveis para interagir com a API do pagar.me.

| Recurso      | Descrição                        | Documentação                  |
|--------------|----------------------------------|--------------------------------|
| **Customer** | Gerenciamento de clientes        | [Customer](docs/CUSTOMER.md)   |
| **Charge**   | Criação e gestão de cobranças    | [Charge](docs/CHARGE.md)       |
| **Order**    | Processamento de pedidos         | [Order](docs/ORDER.md)         |
| **Recipients** | Gestão de recebedores            | [Recipients](docs/RECIPIENTS.md) |
| **Subscription** | Gerenciamento de assinaturas    | [Subscription](docs/SUBSCRIPTION.md) |

## Credits

-   [Keepcloud](https://github.com/Keepcloud)

## License

Licença MIT (MIT). Por favor, consulte o [Arquivo de Licença](LICENSE.md) para mais informações.
