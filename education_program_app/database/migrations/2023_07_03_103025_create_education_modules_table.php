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
        Schema::create('education_modules', function (Blueprint $table) {
            $table->id();
            $table->string('module');
            $table->string('name');
            $table->integer('put_status');
            $table->foreignId('education_program_id')->references('id')->on('education_programs');
            $table->foreignId('decree_goso_templates_id')->references('id')->on('decree_goso_templates');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_modules');
    }
};
