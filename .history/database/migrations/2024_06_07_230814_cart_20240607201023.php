<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("ALTER TABLE cart MODIFY COLUMN total DATE AFTER id");
        DB::statement("ALTER TABLE cart MODIFY COLUMN store DATE AFTER id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
