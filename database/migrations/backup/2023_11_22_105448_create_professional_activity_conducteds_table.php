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
        Schema::create('professional_activity_conducteds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('organizer');
            $table->string('co_organizer');
            $table->enum('level',['Local','National','International']);
            $table->enum('category',['Workshop','Seminar','Webinar','FDP','STTP','Certification_Program']);
            $table->string('sponsored');
            $table->string('sponsoring_agency_name_address');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('place');
            $table->string('no_of_days');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_activity_conducteds');
    }
};
