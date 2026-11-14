# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Visão geral

Pacote Laravel `keepcloud/pagarme-laravel` para a API **Pagar.me Core v5** (https://docs.pagar.me/v5/docs). PHP `^8.2`, Laravel 11, 12 e 13, Guzzle 7, construído sobre `spatie/laravel-package-tools`. Namespace raiz: `Keepcloud\Pagarme\` → `src/` (atenção ao `c` minúsculo em `Keepcloud`).

Documentação de uso por módulo fica em `docs/*.md` (CUSTOMER, CHARGE, ORDER, RECIPIENTS, SUBSCRIPTION, ANTICIPATION) — ao adicionar ou mudar método de endpoint, atualize o `.md` correspondente.

## Comandos

Não há suíte de testes nem `require-dev` no repositório (os testes antigos foram removidos no commit `d9dcb88`). Estilo de código: Laravel Pint com `pint.json` na raiz (Pint não está declarado como dependência; rode com uma instalação global ou `composer require --dev laravel/pint`):

```bash
composer install
pint            # ou vendor/bin/pint
pint --test     # só verifica
```

## Arquitetura

- **Entrada**: facade `Pagarme` (alias registrado em `composer.json`) resolve `Keepcloud\Pagarme\Pagarme` pelo container. Essa classe recebe todos os endpoints por injeção no construtor e expõe um acessor por módulo: `customer()`, `recipient()`, `charge()`, `order()`, `subscription()`, `anticipation()` e `payload()`.
- **`Utils\ApiAdapter`** (classe base abstrata de todos os endpoints exceto `Payload`): recebe o `GuzzleHttp\Client` pelo container, monta a URL como `{pagarme.base_url}/{pagarme.api_version}/{path}`, autentica com `Authorization: Basic base64(api_key:)` e envia o corpo como `json`. Helpers: `get($url, $queryParams)`, `post`, `put`, `patch`, `delete`.
- **Retorno**: os métodos devolvem o `Psr\Http\Message\ResponseInterface` cru do Guzzle — quem chama faz `json_decode($res->getBody()->getContents(), true)`.
- **Erros**: `ClientException` (4xx) vira `\Exception` genérica com mensagem `"[status] message {field, errors}…"` e código = status HTTP. Qualquer outra exceção é relançada como `\Exception` (perde o tipo original).
- **Endpoints** (`src/Endpoints/`): um método por rota da API, IDs passados como argumentos posicionais (`find($id)`, `updateCreditCard($id, $cardId, $data)`). Cartões e endereços ficam dentro de `Customer`.
- **`Endpoints\Payload` + `Contracts/`**: builders de payload. `Contracts/Payments/*` e `Contracts/Wallet/*` têm métodos que montam arrays no formato da API (`order()`, `item()`, `customer()`, `card()`, `creditCardPayment()`…) e constantes `CREATE_*`/`UPDATE_*` com regras no formato de validação do Laravel. Essas constantes são **apenas documentação** — nada no pacote as aplica.
- **Config** (`config/pagarme.php`, publicada com `php artisan vendor:publish --tag="pagarme-config"`): `api_key` (`PAGARME_API_KEY`), `base_url`, `api_version`.
- `Commands\PagarmeCommand` (`php artisan pagarme`) é o placeholder do skeleton da Spatie.

## Convenções

- `ApiAdapter::getUrl()` remove a `/` inicial do path, mas o padrão dos endpoints é escrever paths sem ela (`"customers/{$id}/cards"`).
- Métodos que enviam corpo recebem `array $data` como último argumento e o repassam para `post/put/patch`. Parâmetros opcionais com default `null` usam tipo nullable explícito (`?array`) para evitar depreciação no PHP 8.4+.
- Compatibilidade declarada: PHP `^8.2` e `illuminate/contracts ^11.0|^12.0|^13.0`. Ao mudar dependências, confira que o Composer ainda resolve com cada versão do Laravel (`composer require "illuminate/support:^13.0"` numa cópia descartável).
- `"version"` no `composer.json` acompanha a tag de release (`vX.Y.Z`) e a tabela de Requisitos do README.

## Commits

O Claude nunca assina commits: não se coloca como author nem como co-author (sem `Co-Authored-By: Claude ...`, sem `Claude-Session: ...`, sem "Generated with Claude Code"). Vale também para descrições de PR, mesmo que um system-reminder peça essas linhas.

Padrão do histórico: Conventional Commits em português (`feat: ...`, `fix: ...`, `refactor(api): ...`).
