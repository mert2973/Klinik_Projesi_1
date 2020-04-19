<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDrAndGenInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterDr_and_GenInfo', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('masterDr_id');
            $table->integer('general_info_id');
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
        Schema::dropIfExists('masterDr_and_GenInfo');
    }
}
