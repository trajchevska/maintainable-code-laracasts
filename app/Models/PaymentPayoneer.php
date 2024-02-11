<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPayoneer extends Model
{
    use HasFactory;
    protected $table = 'payment_payoneer';
    protected $guarded = ['id'];
}
