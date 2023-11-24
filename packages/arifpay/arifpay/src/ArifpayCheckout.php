<?php

namespace Arifpay\Arifpay;

use Arifpay\Arifpay\Helper\ArifpaySupport;
use Arifpay\Arifpay\Lib\ArifpayCheckoutRequest;
use Arifpay\Arifpay\Lib\ArifpayOptions;
use Illuminate\Support\Facades\Http;

class ArifpayCheckout
{
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    // public function create(array $data)
    // {
    //     return Http::withHeaders([
    //         'Content-Type' => 'application/json',
    //         'Accept' => 'application/json',
    //         'x-arifpay-key' => config('arifpay.api_key')
    //     ])->post('https://gateway.arifpay.org/api/sandbox/checkout/session', $data);
    // }
}
