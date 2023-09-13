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
        Schema::create('student_data', function (Blueprint $table) {
            $table->id();
            $table->string('IID');
            $table->integer('gender');
            $table->foreignId('student_location_type_id')->references('id')->on('student_location_types');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('last_name_eng');
            $table->string('first_name_eng');
            $table->integer('education_program_id');
            $table->foreignId('enroll_status_id')->references('id')->on('enroll_statuses');
            $table->integer('study_course');
            $table->integer('enter_year');
            $table->integer('graduate_year');
            $table->foreignId('payment_type_id')->references('id')->on('payment_types');
            $table->foreignId('study_form_id')->references('id')->on('study_forms');
            $table->boolean('is_need_dormitory');
            $table->foreignId('employment_status_id')->references('id')->on('employment_statuses');
            $table->integer('after_graduation_status');
            $table->foreignId('sports_category_id')->references('id')->on('student_sports_categories');
            $table->boolean('has_special_needs');
            $table->foreignId('nationality_id')->references('id')->on('nationalities');
            $table->foreignId('disability_category_id')->references('id')->on('disability_categories');
            $table->boolean('is_remote_study');
            $table->boolean('has_ielts_toefl');
            $table->integer('english_level_id');
            $table->decimal('GPA');
            $table->decimal('IGPA');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_data');
    }
};
