<?php

namespace Keepcloud\Pagarme\Contracts\Payments;

final class Item
{
    //  Atenção! Só será possível incluir items, se o pedido estiver aberto.
    public const INCLUDE_ORDER_ITEM = [
        'amount'      => 'numeric',
        'description' => 'string',
        'quantity'    => 'integer',
    ];

    public const UPDATE_ORDER_ITEM = [
        'amount'      => 'numeric',
        'description' => 'string',
        'quantity'    => 'integer',
    ];

    public function item(int $amount, string $description, string $code, int $quantity = 1)
    {
        return [
            "amount"      => $amount,
            "description" => $description,
            "quantity"    => $quantity,
            "code"        => $code,
        ];
    }
}
