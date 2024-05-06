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
        Schema::create('funded_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->constrained();
            $table->string('proposal_title');
            $table->enum('role',['Principal Investigator','Co-Investigator','Not-Applicable']);
            $table->unsignedDouble('amount');
            $table->enum('proposal_status',['Accepted','Pending','Rejected']);
            $table->date('application_date');
            $table->unsignedDouble('fund_received')->nullable();
            $table->enum('project_status',['On-Going','Completed'])->nullable();
            $table->unsignedSmallInteger('completion_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funded_projects');
    }
};
