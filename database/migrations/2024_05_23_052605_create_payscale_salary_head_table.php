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
        Schema::create('payscale_salary_head', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payscale_id')->constrained();
            $table->foreignId('salary_head_id')->constrained();
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payscale_salary_head');
    }
};
