<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city')->varchar(15);
            $table->string('country')->varchar(20);
            $table->string('adress_1')->varchar(100);
            $table->string('adress_2')->varchar(100);
            $table->string('gender')->varchar(10);
            $table->string('date_of_birth')->varchar(20);
            $table->string('department')->varchar(50);
            $table->string('specility')->varchar(20);
            $table->integer('priority');
            $table->tinyInteger('status');
            $table->string('postal_zip')->varchar(12);
            $table->string('blood_drup')->varchar(10);
            $table->tinyInteger('expr_year');
            $table->integer('awards_count');

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
        Schema::dropIfExists('general_infos');
    }
}
