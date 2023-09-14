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
        Schema::create('foreign_teacher_consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('foreign_teacher_id')->references('id')->on('foreign_teachers');
            $table->integer('student_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foreign_teacher_consultations');
    }
};
