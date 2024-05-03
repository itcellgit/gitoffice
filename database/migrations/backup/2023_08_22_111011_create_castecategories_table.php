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
        Schema::create('castecategories', function (Blueprint $table) {
            $table->id();
            $table->string('caste_name');
            $table->foreignId('religion_id')->constrained();
            $table->string('subcastes_name');
            $table->string('category');
            $table->string('category_no');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('castecategories');
    }
};
