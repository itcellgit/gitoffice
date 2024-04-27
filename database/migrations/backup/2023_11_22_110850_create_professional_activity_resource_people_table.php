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
        Schema::create('professional_activity_resource_people', function (Blueprint $table) {
            $table->id();
            $table->string('resource_person_name');
            $table->string('organization');
            $table->string('organization_type');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('designation');
            $table->string('profile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_activity_resource_people');
    }
};
