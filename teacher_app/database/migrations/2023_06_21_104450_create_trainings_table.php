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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_basis_id')->references('id')->on('training_bases');
            $table->foreignId('training_form_id')->references('id')->on('training_forms');
            $table->integer('duration');
            $table->integer('payment_sum');
            $table->foreignId('training_payment_type_id')->references('id')->on('training_payment_types');
//            $table->foreignId('training_payment_type_id')->references('id')->on('training_payment_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
