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
            $table->bigIncrements('id')->autoIncrement();
            //$table->integer('masterDR_and_clinics_id');
            $table->string('city')->varchar(15)->nullable();
            $table->string('country')->varchar(20)->nullable();
            $table->string('adress_1')->varchar(100)->nullable();
            $table->string('adress_2')->varchar(100)->nullable();
            $table->string('gender')->varchar(10)->nullable();
            $table->string('date_of_birth')->varchar(20)->nullable();
            $table->string('department')->varchar(50)->nullable();
            $table->string('position')->varchar(50)->nullable();
            $table->string('specility')->varchar(20)->nullable();
            $table->integer('priority')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('postal_zip')->varchar(12)->nullable();
            $table->string('blood_group')->varchar(10)->nullable();
            $table->tinyInteger('expr_year')->nullable();
            $table->tinyInteger('degree')->nullable();
            $table->integer('awards_count')->nullable();

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
