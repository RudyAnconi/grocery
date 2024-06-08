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
        Schema::table('cart', function (Blueprint $table) {
            $table->string('store')->after('price');
            $table->dropColumn('name');
            $table->dropColumn('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
   
    }
};
