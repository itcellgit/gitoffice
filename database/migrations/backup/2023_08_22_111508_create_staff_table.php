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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('fname',30);
            $table->string('mname',30)->nullable();
            $table->string('lname',30);
            $table->text('local_address');
            $table->text('permanent_address');
            $table->date('dob');
            $table->date('doj');
            $table->foreignId('religion_id')->constrained();
            $table->foreignId('castecategory_id')->constrained();
            $table->date('date_of_increment');
            $table->date('date_of_superanuation');
            $table->date('date_of_confirmation');
            $table->string('bloodgroup', 5)->nullable();
            $table->string('pan_card', 20);
            $table->string('adhar_card', 20);
            $table->string('aicte_id', 30)->nullable();
            $table->string('vtu_id', 30)->nullable();
            $table->string('esi_no', 30)->nullable();
            $table->string('un_no',30)->nullable();
            $table->integer('emergency_no')->nullable();;
            $table->string('emergency_name',30)->nullable();;
            $table->enum('employee_type',['Teaching', 'Non-Teaching'])->default('Teaching');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
