<?php

namespace Keepcloud\Pagarme\Contracts\Wallet;

final class Address
{
    //  Clientes com endereços Internacionais -> Clientes que coloquem o passaporte como documento podem transacionar, colocando o endereço internacional. e em vez do CEP o ZIP Code do país. Não é possível um cliente usar o passaporte e colocar um endereço nacional.

    public const CREATE_ADDRESS = [
        'line_1'   => 'string',
        'line_2'   => 'string',
        'zip_code' => 'string',
        'city'     => 'string',
        'state'    => 'string',
        'country'  => 'string',
        'metadata' => 'array',
    ];

    public const UPDATE_ADDRESS = [
        'line_1'   => 'string',
        'line_2'   => 'string',
        'zip_code' => 'string',
        'city'     => 'string',
        'state'    => 'string',
        'country'  => 'string',
        'metadata' => 'array',
    ];

    public const SHIPPING_ADDRESS = [
        'amount'                  => 'numeric',
        'description'             => 'string',
        'recipient_name'          => 'string',
        'recipient_phone'         => 'string',
        'address.line_1'          => 'string',
        'address.zip_code'        => 'string',
        'address.city'            => 'string',
        'address.state'           => 'string',
        'address.country'         => 'string',
        'max_delivery_date'       => 'date_format:d-m-Y',
        'estimated_delivery_date' => 'date_format:d-m-Y',
        'type'                    => 'string',
    ];

    public const BILLING_ADDRESS = [
        'line_1'   => 'string',
        'zip_code' => 'string',
        'city'     => 'string',
        'state'    => 'string',
        'country'  => 'string',
    ];

    public const PHONE_NUMBER = [
        'home_phone'                => 'array',
        'home_phone.country_code'   => 'string',
        'home_phone.area_code'      => 'string',
        'Home_phone.number'         => 'string',
        'mobile_phone'              => 'array',
        'mobile_phone.country_code' => 'string',
        'mobile_phone.area_code'    => 'string',
        'mobile_phone.number'       => 'string',
    ];

    public function address(string $lineOne, string $lineTwo, string $zipCode, string $city, string $state, string $country)
    {
        return [
            'line_1'   => $lineOne,
            'line_2'   => $lineTwo,
            'zip_code' => $zipCode,
            'city'     => $city,
            'state'    => $state,
            'country'  => $country,
        ];
    }
}
