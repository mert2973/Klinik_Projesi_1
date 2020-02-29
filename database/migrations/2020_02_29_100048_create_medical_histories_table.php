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
            $table->tinyInteger('diabetes',1)->default(0);
            $table->tinyInteger('heart_problems',1)->default(0);
            $table->tinyInteger('kidney_stones',1)->default(0);
            $table->tinyInteger('cancer',1)->default(0);
            $table->tinyInteger('pregnancy',1)->default(0);
            $table->tinyInteger('high_blood_pressure',1)->default(0);
            $table->tinyInteger('asthma',1)->default(0);
            $table->tinyInteger('jaundice',1)->default(0);
            $table->tinyInteger('hiv_aids',1)->default(0);
            $table->tinyInteger('blood_thinners',1)->default(0);
            $table->tinyInteger('high_cholesterol',1)->default(0);
            $table->tinyInteger('kidney_disease',1)->default(0);
            $table->tinyInteger('rheumatic_fever',1)->default(0);
            $table->tinyInteger('epilepsy',1)->default(0);

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
