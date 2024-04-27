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
        Schema::create('conferences_attendees', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('attended_as');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('no_of_days');
            $table->string('paper_title');
            $table->string('place');
            $table->enum('sponsored',['Yes','No'])->default('Yes');
            $table->string('sponsored_by');
            $table->integer('amount');
            $table->string('weblink');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences_attendees');
    }
};
