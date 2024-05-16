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
        Schema::create('fetival_advance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained();
            $table->date('date of application');
            $table->date('date of disbursement');
            $table->biginteger('amount');
            $table->biginteger('emi');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }


    
    public function down(): void
    {
        Schema::dropIfExists('fetival_advance');
    }
};
