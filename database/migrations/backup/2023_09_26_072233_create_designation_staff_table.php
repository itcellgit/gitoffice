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
        Schema::create('designation_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designations_id')->constrained();
            $table->foreignId('staff_id')->constrained();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designation_staff');
    }
};
