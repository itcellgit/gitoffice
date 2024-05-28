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
        Schema::create('exam_section_issues', function (Blueprint $table) {
            $table->id();
            $table->string('issues');
            $table->string('remarks');
            $table->enum('category_name',['regular','unusual'])->default('regular');
            $table->foreignId('staff_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_section_issues');
    }
};
