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
        Schema::create('mobilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('student_data');
            $table->foreignId('mobility_type_id')->references('id')->on('mobility_types');
            $table->foreignId('country_id')->references('id')->on('countries');
            $table->integer('university_id');
            $table->integer('foreign_university_id');
            $table->foreignId('mobility_payment_type_id')->references('id')->on('mobility_payment_types');
            $table->foreignId('agreement_type_id')->references('id')->on('agreement_types');
            $table->date('mobility_start_date');
            $table->date('mobility_end_date');
            $table->integer('payment_amount');
            $table->integer('taken_credits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobilities');
    }
};
