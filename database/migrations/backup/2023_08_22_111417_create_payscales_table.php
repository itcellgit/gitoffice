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
        Schema::create('payscales', function (Blueprint $table) {
            $table->id();
            $table->string('payscale_title',50);
            $table->float('basepay');
            $table->float('maxpay');
            $table->foreignId('designation_id')->constrained();
            $table->float('agp');
            $table->float('da');
            $table->float('hra');
            $table->float('cca');
            $table->float('special_incentive');
            $table->string('status',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payscales');
    }
};
