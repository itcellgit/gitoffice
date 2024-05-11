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
        Schema::create('conferences_conducteds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('co_organizer');
            $table->string('no_of_participants');
            $table->string('sponsored');
            $table->string('sponsoring_agency');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('no_of_days');
            $table->string('place');
            $table->string('publisher');
            $table->string('role');
            $table->string('weblink');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences_conducteds');
    }
};
