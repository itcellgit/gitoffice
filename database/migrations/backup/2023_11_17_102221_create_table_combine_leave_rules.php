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
        Schema::create('combining_leave_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leave_rules_id')->constrained();
            $table->unsignedBigInteger('combined_with');
            $table->foreign('combined_with')->references('id')->on('leave_rules');
            $table->enum("sandwiching",['Allowed','Non-Allowed']);
            $table->enum("status",['Active','Inactive']);
            $table->date("wef");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_combine_leave_rules');
    }
};
