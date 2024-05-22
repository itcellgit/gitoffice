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
        Schema::create('depaertment_staff_tax_heads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sd_id');
            $table->unsignedBigInteger('regime_id');
            $table->foreign('sd_id')->references('id')->on('department_staff');
            $table->foreign('regime_id')->references('id')->on('tax_heads');
            $table->year('year');
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depaertment_staff_tax_heads');
    }
};
