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
        Schema::create('stafflic_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stafflic_id');
            $table->foreignId('lic_id');
            $table->string('month');
            $table->date('dop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stafflic_transactions');
    }
};
