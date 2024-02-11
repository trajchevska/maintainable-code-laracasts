<?php

namespace App\Services\PaymentProcessors;
use App\Contracts\PaymentProcessor;
use App\Classes\BankApi;

class WireProcessor implements PaymentProcessor 
{
    public function processPayment($paymentDetails, $amount)
    {
        if (empty($paymentDetails->accountNumber)) {
            return "Account number is required";
        }
        if (empty($paymentDetails->accountName)) {
            return "Account name is required";
        }
        if (empty($paymentDetails->swiftCode)) {
            return "Swift code is required";
        }

        $bankApi = new BankApi();
        if($bankApi->isBank($paymentDetails->swiftCode)) {

            $bankApi->setSwiftCode($paymentDetails->swiftCode);

            if($bankApi->validate($paymentDetails->accountNumber, $paymentDetails->accountName)) {
                $bankApi->setAccountNumber($paymentDetails->accountNumber);
                $bankApi->setAccountName($paymentDetails->accountName);
                return $bankApi->send($amount);

            } else {
                return "Invalid bank account";
            }
        } else {
            return "Invalid swift code";
        }
    }
}