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
        Schema::create('professional_activity_conducted_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_activity_conducted_id')->constrained();
            $table->foreignId('staff_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_activity_conducted_staff');
    }
};
