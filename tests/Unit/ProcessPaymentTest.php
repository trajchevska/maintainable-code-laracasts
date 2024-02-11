<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Classes\Payment;
use Spatie\Snapshots\MatchesSnapshots;

class ProcessPaymentTest extends TestCase
{
    use MatchesSnapshots;

    public function test_successful_transaction_snap()
    {
        $payment = new Payment();
        $this->assertMatchesSnapshot($payment->processPayment((object)['amount' => 100, 'user_id' => 1]));
    }

    public function test_successful_transaction()
    {
        $payment = new Payment();
        $this->assertEquals(
            'Transaction successful for amount: 100', 
            $payment->processPayment((object)['amount' => 100, 'user_id' => 1])
        );
    }

    public function test_successful_wire()
    {
        $payment = new Payment();
        $paymentDetails = (object)[
            'accountNumber' => '123456789',
            'accountName' => 'John Doe',
            'swiftCode' => 'XXX',
        ];
        $amount = 1000;
        $this->assertEquals(
            'Transaction successful for amount: 1000', 
            $payment->processWirePayment($paymentDetails, $amount)
        );
    }

    public function test_invalid_swift_code()
    {
        $payment = new Payment();
        $paymentDetails = (object)[
            'accountNumber' => '123456789',
            'accountName' => 'John Doe',
            'swiftCode' => 'XXX',
        ];
        $amount = 1000;
        $this->assertEquals('Invalid swift code', $payment->processWirePayment($paymentDetails, $amount));
    }

    public function test_invalid_bank_account()
    {
        $payment = new Payment();
        $paymentDetails = (object)[
            'accountNumber' => '1',
            'accountName' => 'John Doe',
            'swiftCode' => 'SWIFTB11',
        ];
        $amount = 1000;
        $this->assertEquals('Invalid bank account', $payment->processWirePayment($paymentDetails, $amount));
    }
}
