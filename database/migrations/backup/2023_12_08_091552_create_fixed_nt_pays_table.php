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
        Schema::create('fixed_nt_pays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id');
            $table->unsignedDouble('pay');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status',['Active','Inactive']);
            $table->string('gcr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixed_nt_pays');
    }
};
