<?php

namespace App\Services\PaymentProcessors;
use App\Contracts\PaymentProcessor;

class WiseProcessor implements PaymentProcessor 
{
    public function processPayment($paymentDetails, $amount)
    {
        return 'Wise transaction successful for amount: ' . $amount;
    }
}