<?php

namespace Arifpay\Arifpay\Facades;
namespace Arifpay\Arifpay;


use Illuminate\Support\Facades\Facade;

class Arifpay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'arifpay';
    }

    public static function create(array $data)
    {
        return $this->checkout()->create($data);
    }
    // Arifpay.php


}
