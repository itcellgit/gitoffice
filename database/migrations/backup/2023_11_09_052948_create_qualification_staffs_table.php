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
        Schema::create('qualification_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qualification_id')->constrained();
            $table->foreignId('staff_id')->constrained();
            $table->string('qualification_name');
            $table->string('board_university');
            $table->date('yop');
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('qualification_staffs');
    }
};
