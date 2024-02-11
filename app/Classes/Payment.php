<?php

namespace App\Classes;

use App\Services\PaymentProcessors\{PaypalProcessor, WireProcessor, PayoneerProcessor, WiseProcessor};

class Payment
{
    private $paymentProcessors;

    const TYPE_PAYPAL = 1;
    const TYPE_WIRE = 2;
    const TYPE_PAYONEER = 3;
    const TYPE_WISE = 4;

    public function __construct()
    {
        $this->paymentProcessors = [
            self::TYPE_PAYPAL => new PaypalProcessor(),
            self::TYPE_WIRE => new WireProcessor(),
            self::TYPE_PAYONEER => new PayoneerProcessor(),
            self::TYPE_WISE => new WiseProcessor(),
        ];
    }

    public function schedulePayment($start, $end, $user_id)
    {
        $user = new User($user_id);
        $timeSheets = $user->getTimeSheets($start, $end);
        $total = 0;
        foreach ($timeSheets as $timeSheet) {
            $total += $timeSheet->hours * $user->rate;
        }
        $query = \DB::raw("INSERT INTO 
            scheduled_payments (user_id, amount) 
            VALUES ({$user_id}, {$total})");
        return \DB::insert($query);
    }

    public function getScheduledPayments($start, $end)
    {   
        $query = \DB::raw("SELECT * 
        FROM scheduled_payments 
        AND date >= '{$start}' 
        AND date <= '{$end}' 
        ORDER BY date ASC");
        $result = \DB::select($query);
        return $result;
    }

    public function processPayments($start, $end)
    {
        $payments = $this->getScheduledPayments($start, $end);
        foreach ($payments as $payment) {
            $this->processPayment($payment);
        }
    }

    public function processPayment($payment)
    {
        $user = new User($payment->user_id);
        $paymentDetails = $user->getPaymentDetails();
        $amount = $payment->amount;
        $paymentType = $user->getPaymentType();
        return $this->paymentProcessors[$paymentType]->processPayment($paymentDetails, $amount);
    }

    public function processPaypalPayment($paymentDetails, $amount)
    {
        // Process paypal payment
    }

    public function processWirePayment($paymentDetails, $amount)
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
    

    public function processPayoneerPayment($paymentDetails, $amount)
    {
        // Process payoneer payment
    }
}