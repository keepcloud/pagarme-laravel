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

Consulte as funções disponíveis para interagir com a API do pagar.me.

- [Customer](docs/CUSTOMER.md)

- [Charge](docs/CHARGE.md)

- [Order](docs/ORDER.md)

- [Recipients](docs/RECIPIENTS.md)

- [Subscription](docs/SUBSCRIPTION.md)

## Credits

-   [Keepcloud](https://github.com/Keepcloud)

## License

Licença MIT (MIT). Por favor, consulte o [Arquivo de Licença](LICENSE.md) para mais informações.
