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
        Schema::create('leaveentitlements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leave_rules_id')->constrained();
            $table->foreignId('staff_id')->constrained();
            $table->
            $table->string('status',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaveentitlements');
    }
};
