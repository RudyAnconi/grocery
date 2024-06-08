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
            $table->string('store')->after('id');
            $table->decimal('total')->after('store');
            $table->dropColumn('name');
            $table->dropColumn('quantity');
            $table->dropColumn('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
