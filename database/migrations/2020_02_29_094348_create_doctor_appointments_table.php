<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usr_dr_id');
            $table->integer('patient_id');
            $table->string('day');
            $table->time('start_time_BF');
            $table->time('end_time_BF');
            $table->time('start_time_AF');
            $table->time('end_time_AF');
            $table->time('slot_time_mins');
            $table->integer('holiday');
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
        Schema::dropIfExists('doctor_appointments');
    }
}
