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
        Schema::create('education_disciplines', function (Blueprint $table) {
            $table->id();
            $table->integer('credit');
            $table->integer('department_id');
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->string('knowledge');
            $table->string('abilities');
            $table->string('recommendation');
            $table->foreignId('study_level_id')->references('id')->on('study_levels');
            $table->string('education_language');
            $table->boolean('is_thread');
            $table->boolean('is_selectable');
            $table->boolean('need_computer');
            $table->boolean('is_multilanguage');
            $table->boolean('is_kazakh');
            $table->boolean('is_russian');
            $table->boolean('is_remote');
            $table->boolean('is_not_remote');
            $table->boolean('is_mook');
            $table->string('mook_platform_name');
            $table->integer('mook_cource_duration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_disciplines');
    }
};
