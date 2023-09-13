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
        Schema::create('research_works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->references('id')->on('universities');
            $table->string('name');
            $table->foreignId('research_work_type_id')->references('id')->on('research_work_types');
            $table->integer('revenue');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_works');
    }
};
