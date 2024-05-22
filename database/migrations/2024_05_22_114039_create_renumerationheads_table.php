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
        Schema::create('renumerationheads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id'); // Assuming staff_id references the staff table
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
            $table->string('renumeration_head',20)->nullable();
            $table->date('date_of_disbursement');
            $table->unsignedFloat('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renumerationheads');
    }
};
