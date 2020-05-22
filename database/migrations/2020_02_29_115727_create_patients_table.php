<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('who_add_patient');
            $table->integer('clinic_id');
            $table->string('p_name')->varchar(20);
            $table->string('p_surname')->varchar(20);
            $table->string('p_email')->varchar(30);
            $table->string('p_phone')->varchar(15);
            $table->tinyInteger('status')->default(1);
            $table->integer('total_dept')->default(0)->comment("borçlu");

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
        Schema::dropIfExists('patients');
    }
}
