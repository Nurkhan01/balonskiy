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
        Schema::create('teacher_universities', function (Blueprint $table) {
            $table->id();
            $table->integer('university_id');
            $table->foreignId('teacher_id')->references('id')->on('teacher_data');
            $table->date('working_start_date');
            $table->date('working_end_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_universities');
    }
};
