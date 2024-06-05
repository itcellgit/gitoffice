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
        Schema::create('stafflics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained();
            $table->integer('policy_no');
            $table->float('premium');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status',['active','transfered','stopped'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stafflics');
    }
};
