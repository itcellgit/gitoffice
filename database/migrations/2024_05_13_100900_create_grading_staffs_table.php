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
        Schema::create('grading_staffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id'); // Assuming staff_id references the staff table
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
            $table->string('month');
            $table->integer('year');
            $table->string('status')->default('active');
            $table->string('grade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grading_staffs');
    }
};
