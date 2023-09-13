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
        Schema::create('student_developing_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('student_data');
            $table->foreignId('developing_section_id')->references('id')->on('development_section_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_developing_sections');
    }
};
