<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city')->varchar(15)->nullable();
            $table->string('country')->varchar(20)->nullable();
            $table->string('adress_1')->varchar(100)->nullable();
            $table->string('adress_2')->varchar(100)->nullable();
            $table->string('gender')->varchar(10)->nullable();
            $table->string('date_of_birth')->varchar(20)->nullable();
            $table->string('postal_zip')->varchar(12)->nullable();
            $table->string('blood_group')->varchar(10)->nullable();
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
        Schema::dropIfExists('patient_infos');
    }
}
