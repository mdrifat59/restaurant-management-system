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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade"); 
            $table->bigInteger("order_id")->unsigned()->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete("cascade"); 
            $table->bigInteger("booking_id")->unsigned()->nullable();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete("cascade"); 
            $table->string('payment_method');
            $table->integer('transaction_id');
            $table->date('payment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
