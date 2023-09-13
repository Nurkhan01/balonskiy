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
        Schema::create('accreditation_bodies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('accreditation_body_type_id')->references('id')->on('accreditation_body_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accreditation_bodies');
    }
};