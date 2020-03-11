<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalClinicalNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalClinical_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('appointments_id');
            $table->integer('medical_problems_id')->nullable();
            $table->integer('medical_observations_id')->nullable();
            $table->integer('medical_diagnoses_id')->nullable();
            $table->integer('medical_investigations_id')->nullable();
            $table->integer('medicalNotes_advices_id')->nullable();

           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicalClinical_notes');
    }
}
