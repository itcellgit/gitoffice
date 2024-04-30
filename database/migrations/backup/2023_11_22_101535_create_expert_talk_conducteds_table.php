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
        Schema::create('expert_talk_conducteds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained();
            $table->string('course_title');
            $table->string('course_code');
            $table->string('academic_year');
            $table->string('semister');
            $table->string('title_of_talk');
            $table->string('resource_person_name');
            $table->string('organization');
            $table->string('address');
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_talk_conducteds');
    }
};
