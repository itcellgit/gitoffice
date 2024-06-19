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
        Schema::create('spocs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('industry_id')->constrained();
            // $table->foreignId('industry_id')->references('id')->on('industries')->onDelete('cascade');

            $table->string('name');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('designation');
            $table->string('department');
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spocs');
    }
};