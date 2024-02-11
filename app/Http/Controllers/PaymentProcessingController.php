<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentProcessingController extends Controller
{
    public function getScheduledPayments()
    {
        $payment = new Payment();
        $payments = $payment->getScheduledPayments();
        return view('scheduled_payments', compact('payments'));
    }

    public function processPayments($start_date, $end_date)
    {
        $payment = new Payment();
        $r = $payment->processPayments($start_date, $end_date);

        if (isset($r->success)) {   
            return redirect()->route('processed_payments.list')->with('success', 'Payment processed successfully.');
        } else {
            return redirect()->route('processed_payments.list')->with('error', $r);
        }
    }
}