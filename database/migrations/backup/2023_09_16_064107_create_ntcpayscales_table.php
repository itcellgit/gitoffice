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
        Schema::create('ntcpayscales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('basepay');
            $table->integer('allowance');
            $table->tinyInteger('year');
            $table->date('wef');
            $table->date('closedon')->default(null);
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ntcpayscales');
    }
};
