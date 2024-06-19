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
        Schema::create('studentinternships', function (Blueprint $table) {
            $table->id();
          
            $table->string('title');
            $table->varchar('years');
            $table->string('sdate');
            $table->string('edate');
            $table->foreignId('industry_id')->constrained();
            $table->foreignId('spoc_id')->constrained();
            $table->bigInteger('stipend');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentinternships');
    }
};