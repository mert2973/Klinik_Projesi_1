<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id');
            $table->tinyInteger('diabetes');
            $table->tinyInteger('heart_problems');
            $table->tinyInteger('kidney_stones');
            $table->tinyInteger('cancer');
            $table->tinyInteger('pregnancy');
            $table->tinyInteger('high_blood_pressure');
            $table->tinyInteger('asthma');
            $table->tinyInteger('jaundice');
            $table->tinyInteger('hiv_aids');
            $table->tinyInteger('blood_thinners');
            $table->tinyInteger('high_cholesterol');
            $table->tinyInteger('kidney_disease');
            $table->tinyInteger('rheumatic_fever');
            $table->tinyInteger('epilepsy');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_histories');
    }
}
