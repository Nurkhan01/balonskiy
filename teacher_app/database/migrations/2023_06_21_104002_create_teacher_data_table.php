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
        Schema::create('teacher_data', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('last_name_eng');
            $table->string('first_name_eng');
            $table->integer('education_field_id');
            $table->foreignId('citizenship_id')->references('id')->on('citizenships');
            $table->foreignId('degree_id')->references('id')->on('degrees');
            $table->boolean('teaches_remote_courses');
            $table->integer('teaches_non_formal_courses');
            $table->integer('is_foreign');
            $table->date('birth_date');
            $table->boolean('has_ielts_toefl');
            $table->foreignId('english_level_id')->references('id')->on('english_levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_data');
    }
};
