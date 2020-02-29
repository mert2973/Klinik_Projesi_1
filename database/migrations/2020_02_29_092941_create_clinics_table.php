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
            $table->bigIncrements('id');
            $table->string('c_legal_name')->nullable()->varchar(100);
            $table->string('c_name')->nullable()->varchar(100);
            $table->string('c_phone')->nullable()->varchar(20);
            $table->string('c_phone_2')->nullable()->varchar(20);
            $table->string('c_email')->nullable()->varchar(30);
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
