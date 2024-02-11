<?php

namespace App\Classes;

class WireProcessor
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

        $bankApi = $this->createBankApi();
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