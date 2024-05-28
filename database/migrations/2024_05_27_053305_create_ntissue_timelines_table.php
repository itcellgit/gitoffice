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
        Schema::create('ntissue_timelines', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_interaction');
            $table->string('interaction');
            $table->date('followup_date')->nullabel();
            $table->enum('status',['open','followup','resolved'])->default('open');
            $table->date('status_updated_date');
            $table->unsignedBigInteger('status_updated_by');
            $table->foreign('status_updated_by')->references('id')->on('staff');
            $table->foreignId('student_issue_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ntissue_timelines');
    }
};
