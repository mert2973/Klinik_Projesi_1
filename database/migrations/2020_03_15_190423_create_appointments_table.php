<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//['patients_id','doctors_id','apt_date','apt_time','apt_status','apt_reason'];
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patients_id');
            $table->integer('doctors_id');
            $table->dateTime('apt_date')->nullable();
            $table->dateTime('apt_date_end')->nullable();
            $table->time('apt_time')->varchar(6)->nullable();
            $table->string('apt_status')->varchar(20)->nullable();
            $table->text('apt_reason')->nullable();

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
        Schema::dropIfExists('appointments');
    }
}
