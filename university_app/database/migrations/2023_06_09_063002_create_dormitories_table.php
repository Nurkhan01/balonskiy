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
        Schema::create('dormitories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dormitory_type_id')->references('id')->on('dormitory_types');
            $table->integer('expluatation_start_year');
            $table->integer('area');
            $table->integer('payment_per_month');
            $table->integer('payment_per_year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitories');
    }
};
