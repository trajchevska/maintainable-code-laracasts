<?php

namespace App\Classes;

class TestablePayment extends Payment
{
    private $mockBankApi;
    
    public function createBankApi()
    {
        return $this->mockBankApi;
    }
}