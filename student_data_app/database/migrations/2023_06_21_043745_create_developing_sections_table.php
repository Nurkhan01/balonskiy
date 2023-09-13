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
        Schema::create('developing_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('development_section_type_id')->references('id')->on('development_section_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developing_sections');
    }
};
