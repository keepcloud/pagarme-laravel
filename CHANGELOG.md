# Changelog

## [1.3.0] - 2026-11-14

### Adicionado
- Suporte a Laravel 12 e 13 (`illuminate/contracts ^11.0|^12.0|^13.0`).

### Corrigido
- URLs com barra dupla (`/v5//customers/...`) nas rotas de cartões e endereços de `Customer`; `ApiAdapter::getUrl()` agora remove a `/` inicial do path.
- `Subscription::enableManualBilling()` lançava `ArgumentCountError`: `ApiAdapter::post()` passa a aceitar corpo opcional.
- `Subscription::updateMetadata()`, `updatePaymentMethod()`, `updateStartAt()` e `updateMinimumPrice()` não enviavam dados; agora recebem `array $data`.
- Depreciação de nullable implícito no PHP 8.4+ em `ApiAdapter` e `Contracts\Payments\Charge::checkoutPayment()`.
- `Order::close()` usava `POST`; a API v5 usa `PATCH /orders/{id}/closed`. Passa a aceitar `array $data` opcional (`status`: `paid`, `canceled` ou `failed`).
- `Charge::editCard()`, `dueDate()` e `updatePaymentMethod()` usavam `PUT`; a API v5 usa `PATCH`.
- Exemplos do README (campos `document`/`document_type` do cliente e vírgula faltando no exemplo de cartão) e `Pagarme:` → `Pagarme::` nos exemplos de `docs/`.
