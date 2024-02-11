<?php

namespace App\Classes;

class User
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getTimeSheets($start, $end)
    {
        $query = \DB::raw("SELECT * 
        FROM time_sheets 
        WHERE user_id = {$this->id} 
        AND date >= '{$start}' 
        AND date <= '{$end}' 
        ORDER BY date ASC");
        $result = \DB::select($query);
        return $result;
    }

    public function getPaymentType()
    {
        $query = \DB::raw("SELECT payment_type 
        FROM payment_types 
        WHERE user_id = {$this->id} 
        AND preferred = 1");
        $result = \DB::select($query);
        return $result[0]->payment_type ?? null;
    }

    public function getPaymentDetails()
    {
        $t = $this->getPaymentType();
        switch ($t) {
            case '1':
                $table = 'payment_paypal';
                break;
            case '2':
                $table = 'payment_wire';
                break;
            case '3':
                $table = 'payment_payoneer';
                break;
            default:
                return "Invalid payment type";
                break;
        }
        if ($table) {
            $query = \DB::raw("SELECT * 
            FROM {$table} 
            WHERE user_id = {$this->id}");
            $result = \DB::select($query);
            return $result[0] ?? null;
        }
        return null;
    }
}