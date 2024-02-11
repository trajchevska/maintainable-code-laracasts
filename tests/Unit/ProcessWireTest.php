<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use App\Classes\Payment;

class ProcessWireTest extends TestCase
{
    public function test_wire_processing_success()
    {
        $payment = new Payment();
        $paymentDetails = (object) [
            'accountNumber' => '1234567890',
            'accountName' => 'John Doe',
            'swiftCode' => 'SWIFTB11'
        ];

        $amount = 100.00;

        $this->assertEquals('Transaction successful for amount: 100', $payment->processWirePayment($paymentDetails, $amount));
    }

    public function test_swift_validation_fails()
    {
        $payment = new Payment();
        $paymentDetails = (object) [
            'accountNumber' => '1234567890',
            'accountName' => 'John Doe',
            'swiftCode' => 'XX'
        ];

        $amount = 100.00;

        $this->assertEquals('Invalid swift code', $payment->processWirePayment($paymentDetails, $amount));
    }

    public function test_swift_validation_fails_withmock()
    {
        $mockBankApi = Mockery::mock(BankApi::class);
        $payment = new TestablePayment();
        $payment->mockBankApi = $mockBankApi;
        $paymentDetails = (object) [
            'accountNumber' => '1234567890',
            'accountName' => 'John Doe',
            'swiftCode' => 'VALID1'
        ];
        $amount = 100.00;

        $mockBankApi->shouldReceive('isBank')
            ->once()
            ->with($paymentDetails->swiftCode)
            ->andReturn(false);

        $result = $payment->processWirePayment($paymentDetails, $amount);
        $this->assertEquals("Invalid swift code", $result);
    }
}