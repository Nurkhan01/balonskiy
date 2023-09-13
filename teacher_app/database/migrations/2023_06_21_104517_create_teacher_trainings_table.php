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
        Schema::create('teacher_trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_id')->references('id')->on('trainings');
            $table->foreignId('teacher_id')->references('id')->on('teacher_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_trainings');
    }
};
