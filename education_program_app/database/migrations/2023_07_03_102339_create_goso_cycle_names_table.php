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
        Schema::create('goso_cycle_names', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->foreignId('study_level_id')->references('id')->on('study_levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goso_cycle_names');
    }
};
