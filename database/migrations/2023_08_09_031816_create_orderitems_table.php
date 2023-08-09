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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("order_id")->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete("cascade"); 
            $table->bigInteger("food_id")->unsigned();
            $table->foreign('food_id')->references('id')->on('food')->onDelete("cascade"); 
            $table->integer('quntity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderitems');
    }
};
