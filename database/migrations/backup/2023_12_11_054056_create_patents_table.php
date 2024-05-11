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
        Schema::create('patents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained();
            $table->string('appl_no');
            $table->date('appl_date');
            $table->string('title');
            $table->enum('status',['Pending','Awarded','Rejected']);
            $table->string('patent_no')->nullable();
            $table->string('publication_no')->nullable();
            $table->date('publication_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patents');
    }
};
