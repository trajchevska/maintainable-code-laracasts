<?php

namespace App\Services\PaymentProcessors;
use App\Contracts\PaymentProcessor;

class PaypalProcessor implements PaymentProcessor 
{
    public function processPayment($paymentDetails, $amount)
    {
        //
    }
}