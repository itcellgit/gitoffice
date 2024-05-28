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
        Schema::create('student_issues', function (Blueprint $table) {
            $table->id();
            $table->string('usn');
            $table->foreignId('exam_section_issue_id')->constrained();
            $table->string('other_issue')->nullable();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_issues');
    }
};
