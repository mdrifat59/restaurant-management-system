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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("cat_id")->unsigned();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete("cascade");
            $table->bigInteger("subcat_id")->unsigned();
            $table->foreign('subcat_id')->references('id')->on('subcategories')->onDelete("cascade");
            $table->string('title');
            $table->string('description');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
