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
        Schema::create('education_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department_id');
            $table->foreignId('language_id')->references('id')->on('languages');
            $table->string('code');
            $table->foreignId('study_level_id')->references('id')->on('study_levels');
            $table->foreignId('education_field_id')->references('id')->on('education_fields');
            $table->boolean('is_inclusive_study');
            $table->foreignId('professional_standard_id')->references('id')->on('professional_standards');
            $table->date('registration_date');
            $table->string('type');
            $table->string('credits');
            $table->foreignId('education_direction_id')->references('id')->on('education_directions');
            $table->foreignId('education_group_id')->references('id')->on('education_groups');
            $table->boolean('is_non_formal');
            $table->boolean('recognizes_previous_nonformal_education');
            $table->integer('university_representation_id');
            $table->boolean('is_joint');
            $table->boolean('is_remote');
            $table->boolean('is_50_20_30_program');
            $table->boolean('is_in_reestr');
            $table->boolean('is_enc_program');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_programs');
    }
};
