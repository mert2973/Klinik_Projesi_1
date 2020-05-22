<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAptTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_apt_times', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer("doctor_id");
            $table->integer("day")->comment("1:monday, 7:sunday")->nullable();
            $table->string("bfr_lunch_begin")->comment("time")->nullable();
            $table->string("bfr_lunch_end")->nullable();
            $table->string("aftr_lunch_begin")->nullable();
            $table->string("aftr_lunch_end")->nullable();
            $table->integer("range_time")->comment("between each appointment")->nullable();
            $table->integer("holiday")->comment("1:yes 0:no")->nullable();
            $table->integer("accept_apnt")->comment("1:yes 0:no")->default(1);

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
        Schema::dropIfExists('doctor_apt_times');
    }
}
