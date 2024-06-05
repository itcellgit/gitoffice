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
        Schema::create('lics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stafflic_id')->constrained();
            $table->float('premium');
            $table->float('gst');
            $table->enum('status',['active','transfered','stopped'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lics');
    }
};
