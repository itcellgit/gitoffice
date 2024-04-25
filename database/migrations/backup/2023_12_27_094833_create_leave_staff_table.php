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
        Schema::create('leave_staff', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_id');
            $table->foreignId('staff_id')->constrained();
            $table->date('app_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('leave_id')->constrained();
            $table->unsignedBigInteger('alternate_staff_id1');
            $table->foreign('alternate_staff_id1')->references('id')->on('staff');
            $table->unsignedBigInteger('alternate_staff_id2');
            $table->foreign('alternate_staff_id2')->references('id')->on('staff');
            $table->enum('applied_status',['pending','recommeded','approved','rejected'])->default('pending');
            $table->unsignedFloat('num_days');
            $table->enum('document',['required','not required','submitted'])->default('not required');
            $table->unsignedBigInteger('recommended_by')->nullable();
            $table->foreign('recommended_by')->references('id')->on('users');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->foreign('approved_by')->references('id')->on('users');
            $table->enum('leave_status',['awaiting','cancelled','taken'])->default('awaiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_staffs');
    }
};
