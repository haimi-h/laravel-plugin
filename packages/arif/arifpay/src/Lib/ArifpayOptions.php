<?php

namespace Arif\Arifpay\Lib;

class ArifpayOptions
{
    public $sandbox;

    public function __construct($sandbox)
    {
        $this->sandbox = $sandbox;
    }
}
