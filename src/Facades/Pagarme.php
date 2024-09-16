<?php

namespace Keepcloud\Pagarme\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Keepcloud\Pagarme\Pagarme
 */
class Pagarme extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Keepcloud\Pagarme\Pagarme::class;
    }
}
