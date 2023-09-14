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
        Schema::create('special_needs_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->references('id')->on('universities');
            $table->integer('entrance_count');
            $table->integer('sanitary_facilities_count');
            $table->integer('help_button_count');
            $table->boolean('has_ramps__or_lifts');
            $table->boolean('has_stairs_with_handrails');
            $table->boolean('has_special_parkings');
            $table->boolean('has_navigation_means');
            $table->boolean('has_stairs_constrast_color');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_needs_conditions');
    }
};
