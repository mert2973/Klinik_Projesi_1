<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_medicines', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer("clinic_id");
            $table->string("medc_name");
            $table->string("medc_category");
            $table->string("medc_company");
            $table->string("medc_generic");
            $table->string("medc_group");
            $table->string("medc_unit");
            $table->string("medc_unitpacking");
            $table->string("medc_storebox");
            $table->string("medc_minlevel");
            $table->string("medc_reorderlevel");
            $table->text("medc_note");

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
        Schema::dropIfExists('inventory_medicines');
    }
}
