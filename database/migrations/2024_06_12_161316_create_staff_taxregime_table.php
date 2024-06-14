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
        Schema::create('staff_taxregime', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('tax_heads_id');
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('tax_heads_id')->references('id')->on('tax_heads');
            $table->year('year');
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_taxregime');
    }
};
