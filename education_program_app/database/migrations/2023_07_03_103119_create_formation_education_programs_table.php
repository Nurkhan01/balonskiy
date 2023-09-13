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
        Schema::create('formation_education_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('education_module_id')->references('id')->on('education_modules')->onDelete('CASCADE');
            $table->foreignId('education_program_id')->references('id')->on('education_programs')->onDelete('CASCADE');
            $table->foreignId('goso_cycle_name_id')->references('id')->on('goso_cycle_names');
            $table->foreignId('education_discipline_id')->references('id')->on('education_disciplines');
            $table->foreignId('goso_component_name_id')->references('id')->on('goso_component_names');
            $table->integer('credit');
            $table->boolean('is_cv');
            $table->integer('f_group_id');
            $table->boolean('is_confirmed');
            $table->integer('component_status');
            $table->boolean('is_minor');
            $table->integer('minor_f_group_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation_education_programs');
    }
};
