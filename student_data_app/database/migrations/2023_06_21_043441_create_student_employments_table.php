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
        Schema::create('student_employments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('student_data');
            $table->foreignId('employment_id')->references('id')->on('employments');
            $table->boolean('works_in_his_field');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_employments');
    }
};
