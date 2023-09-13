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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('science_field_id')->references('id')->on('science_fields');
            $table->date('publication_date');
            $table->foreignId('journal_id')->references('id')->on('journals');
            $table->integer('university_id');
            $table->boolean('is_together_with_student');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
