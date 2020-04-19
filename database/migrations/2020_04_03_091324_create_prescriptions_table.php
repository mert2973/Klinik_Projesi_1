<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer("apt_id");
            $table->string("mdc_name")->nullable();
            $table->string("mdc_generic")->nullable();
            $table->string("mdc_dose")->varchar(20)->nullable();
            $table->string("mdc_duration")->varchar(20)->nullable();
            $table->string("mdc_instruction")->nullable();

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
        Schema::dropIfExists('prescriptions');
    }
}
