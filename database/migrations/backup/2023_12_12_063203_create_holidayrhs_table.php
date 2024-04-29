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
        Schema::create('holidayrhs', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->date('start');
            $table->string('day');
            $table->enum('type',['Holiday','RH']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holidayrhs');
    }
};
