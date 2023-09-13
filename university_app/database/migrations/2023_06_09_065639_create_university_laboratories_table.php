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
        Schema::create('university_laboratories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->references('id')->on('universities');
            $table->foreignId('laboratory_id')->references('id')->on('laboratories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_laboratories');
    }
};
