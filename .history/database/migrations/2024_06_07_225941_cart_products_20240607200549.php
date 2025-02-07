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
        Schema::create('cart_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->integer('quantity');
            $table->decimal('price');
            $table->foreignId('cart_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_products');
    }
};
