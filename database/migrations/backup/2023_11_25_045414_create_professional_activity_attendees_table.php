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
        Schema::create('professional_activity_attendees', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('organizer');
            $table->enum('level',['Local','National','International']);
            $table->enum('category',['Workshop','FDP','Seminar','webinar']);
            $table->string('sponsored');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('no_of_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_activity_attendees');
    }
};
