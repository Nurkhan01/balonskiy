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
        Schema::create('education_program_accreditations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('education_program_id')->references('id')->on('education_programs');
            $table->string('report_links');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('accreditation_type_id');
            $table->integer('accreditation_body_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_program_accreditations');
    }
};
