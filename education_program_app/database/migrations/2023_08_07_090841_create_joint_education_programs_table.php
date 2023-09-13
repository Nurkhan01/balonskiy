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
        Schema::create('joint_education_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('education_program_id')->references('id')->on('education_programs');
            $table->integer('main_university_id');
            $table->integer('partner_university_id');
            $table->integer('foreign_partner_university_id');
            $table->date('contract_start_date');
            $table->date('contract_end_date');
            $table->foreignId('joint_ep_financing_source_id')->references('id')->on('joint_ep_financing_sources');
            $table->foreignId('graduate_document_type_id')->references('id')->on('graduate_document_types');
            $table->string('interaction_problems');
            $table->string('problem_solving_suggestions');
            $table->boolean('is_double_diploma');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joint_education_programs');
    }
};
