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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade"); 
            $table->string('title');
            $table->string('email');
            $table->integer('phone');
            $table->date('date');
            $table->time('start_time'); 
            $table->integer('participant');
            $table->string('even_type');
            $table->string('status')->default('pending');
            $table->string('description')->nullable(); 
            $table->string('transaction_id')->nullable();
            $table->string('admin_massage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
