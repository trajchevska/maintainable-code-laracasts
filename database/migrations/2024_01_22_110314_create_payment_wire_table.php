<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_wire', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->foreign('users')->on('id');
            $table->string('bank_account_name');
            $table->string('bank_account_number');
            $table->string('bank_swift_code');
            $table->string('account_address');
            $table->string('account_address2');
            $table->string('account_city');
            $table->string('account_zip');
            $table->string('account_country');
            $table->string('account_state');
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('bank_address2');
            $table->string('bank_city');
            $table->string('bank_zip');
            $table->string('bank_country');
            $table->string('bank_state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_wire');
    }
};
