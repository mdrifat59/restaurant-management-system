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
        Schema::create('foodimages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("food_id")->unsigned();
            $table->foreign('food_id')->references('id')->on('food')->onDelete("cascade");
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foodimages');
    }
};
