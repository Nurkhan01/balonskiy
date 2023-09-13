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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('city_id')->references('id')->on('university.cities');
            $table->integer('computers_count');
            $table->integer('internet_points_number');
            $table->integer('internet_speed');
            $table->boolean('intercollegiate_library_access');
            $table->integer('total_grant_funding');
            $table->string('email', 255);
            $table->boolean('has_corporate_governance_bodies');
            $table->integer('science_funding_amount');
            $table->foreignId('science_funding_type_id')->references('id')->on('science_funding_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
