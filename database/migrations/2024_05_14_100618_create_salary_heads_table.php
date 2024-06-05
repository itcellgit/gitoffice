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
        Schema::create('salary_heads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('salary_group_id')->constrained();
            $table->enum('salary_type',['info','percentage','varied','flat']);
            $table->integer('pvalue')->nullable();
            $table->unsignedBigInteger('ptype')->nullable();
            $table->foreign('ptype')->references('id')->on('salary_heads');
            $table->integer('maximum')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_heads');
    }
};
