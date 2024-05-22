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
        Schema::create('annual_increments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained();
            $table->date('wef');
            $table->integer('additional_days')->default('0');;
            $table->string('gc');
            $table->string('reason')->default('null');;
            $table->unsignedBigInteger('basic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annual_increments');
    }
};
