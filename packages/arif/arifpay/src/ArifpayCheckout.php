<?php

namespace Arif\Arifpay;

use Arif\Arifpay\Helper\ArifpaySupport;
use Arif\Arifpay\Lib\ArifpayCheckoutRequest;
use Arif\Arifpay\Lib\ArifpayOptions;
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
