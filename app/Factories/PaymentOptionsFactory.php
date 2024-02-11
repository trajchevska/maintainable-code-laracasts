<?php

namespace App\Factories;

use App\Contracts\PaymentDetailsInterface; //rename to PaymentOptionsInterface; same below
use App\Services\PaymentMethods\PayoneerDetails;
use App\Services\PaymentMethods\WireDetails;
use InvalidArgumentException;

class PaymentOptionsFactory
{
    public static function createPaymentOption($type): PaymentDetailsInterface
    {
        switch ($type) {
            case 'payoneer':
                return new PayoneerDetails();
            case 'wire':
                return new WireDetails();
            default:
                throw new InvalidArgumentException("Unsupported payment type: {$type}");
        }
    }

    public static function createValidator($type)
    {
        switch ($type) {
            case 'payoneer':
                return app(PayoneerPaymentRequest::class);
            case 'wire':
                return app(WirePaymentRequest::class);
            default:
                throw new InvalidArgumentException("Unsupported payment validator type: {$type}");
        }
    }
}
