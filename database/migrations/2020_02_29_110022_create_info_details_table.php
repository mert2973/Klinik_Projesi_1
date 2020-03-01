<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facebook_link')->varchar(100);
            $table->string('instegram_link')->varchar(100);
            $table->string('twitter_link')->varchar(100);
            $table->integer('general_infos_id');
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
        Schema::dropIfExists('info_details');
    }
}