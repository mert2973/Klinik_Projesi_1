<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatemasterDRandClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterDR_and_clinics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_master_dr_id');
            $table->integer('clinic_id');
           // $table->integer('staff_usr_id');
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
        Schema::dropIfExists('masterDR_and_clinics');
    }
}
