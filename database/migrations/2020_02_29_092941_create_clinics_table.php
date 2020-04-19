<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('c_legal_name')->varchar(100)->nullable();
            $table->string('c_name')->varchar(100)->nullable();
            $table->string('c_phone')->varchar(20)->nullable();
            $table->string('c_phone_2')->varchar(20)->nullable();
            $table->string('c_email')->varchar(30)->unique()->nullable();
            $table->integer('status')->nullable();
            $table->text('adress1')->nullable();
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
        Schema::dropIfExists('clinics');
    }
}
