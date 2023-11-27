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
        Schema::create('medical__records', function (Blueprint $table) {
            $table->text('relevant_patient_info');
            $table->dateTime('date_time');
            $table->integer('record_number');
            $table->string('current_patient_status');
            $table->text('background_info');
            $table->text('final_evolution');
            $table->text('professional_concept');
            $table->text('recommendations');
            $table->unsignedBigInteger('recordable_id');
            $table->string('recordable_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical__records');
    }
};
