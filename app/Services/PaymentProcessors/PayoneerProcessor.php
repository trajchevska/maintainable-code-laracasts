<?php

namespace App\Services\PaymentProcessors;
use App\Contracts\PaymentProcessor;

class PayoneerProcessor implements PaymentProcessor 
{
    public function processPayment($paymentDetails, $amount)
    {
        //
    }
}