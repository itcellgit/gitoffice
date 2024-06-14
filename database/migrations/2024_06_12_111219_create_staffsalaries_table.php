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
        Schema::create('staffsalaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained('staff');
            $table->unsignedfloat('basic');
            $table->unsignedfloat('da');
            $table->unsignedfloat('hra');
            $table->unsignedfloat('cca');
            $table->unsignedfloat('special_incen');
            $table->unsignedfloat('salary_arrears');
            $table->unsignedfloat('special_allowances');
            $table->unsignedfloat('allowance_value');
            $table->unsignedfloat('gross_salary');
            $table->unsignedfloat('pf_deduction');
            $table->unsignedfloat('pf_arrears');
            $table->unsignedfloat('income_tax');
            $table->unsignedfloat('prof_tax');
            $table->unsignedfloat('lic');
            $table->unsignedfloat('gsli');
            $table->unsignedfloat('credit_shares');
            $table->unsignedfloat('credit_loan');
            $table->unsignedfloat('vidyaganapati');
            $table->unsignedfloat('forward_charges');
            $table->unsignedfloat('salary_recovery');
            $table->unsignedfloat('ir');
            $table->unsignedfloat('hra_recovery');
            $table->unsignedfloat('laptop_computer');
            $table->unsignedfloat('total_deductions');
            $table->unsignedfloat('net_salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffsalaries');
    }
};
