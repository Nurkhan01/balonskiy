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
        Schema::create('foreign_teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('teacher_data');
            $table->integer('foreign_university_id');
            $table->foreignId('teacher_financing_type_id')->references('id')->on('teacher_financing_types');;
            $table->integer('financing_sum');
            $table->integer('is_in_qswur');
            $table->foreignId('country_id')->references('id')->on('countries');
            $table->integer('lecture_hours_count');
            $table->integer('seminar_hours_count');
            $table->integer('masterclass_hours_count');
            $table->integer('training_hours_count');
            $table->integer('credits_count');
            $table->integer('ects_credits_count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foreign_teachers');
    }
};
