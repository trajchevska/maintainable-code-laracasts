<?php

namespace App\Contracts;

interface PaymentProcessor
{
    public function processPayment($paymentDetails, $amount);
}