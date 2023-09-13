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
        Schema::create('accreditations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->references('id')->on('universities');
            $table->foreignId('accreditation_body_id')->references('id')->on('accreditation_bodies');
            $table->string('report_links');
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('accreditation_type_id')->references('id')->on('accreditation_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accreditations');
    }
};
