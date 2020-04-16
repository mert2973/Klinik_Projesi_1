<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvSaleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('inv_sale_items', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer("inv_sale_id");
           // $table->integer("apt_id")->nullable();
            $table->string("itm_name");
            $table->text("itm_dscr");
            $table->string("cost")->comment("each itm price");
            $table->integer("quantity");
            $table->string("price")->comment("without tax and disc");
            $table->string("tax_price")->comment("tax to the item");
            $table->string("tax_type_name");
            $table->string("rate");

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
        Schema::dropIfExists('inv_sale_items');
    }
}
