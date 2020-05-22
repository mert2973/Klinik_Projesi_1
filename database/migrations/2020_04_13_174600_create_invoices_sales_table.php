<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices_sales', function (Blueprint $table) {

            $table->bigIncrements('id')->autoIncrement();
            $table->integer('patient_id');
            $table->integer("doctor_id");

            $table->string("method")->nullable();
            $table->string("status")->nullable();
            $table->string("inv_status")->nullable();

            $table->string("subtotal")->nullable()->comment("total price");
            $table->string("tax")->nullable()->comment("total tax");
            $table->string("discount")->nullable()->comment("discount from total");
            $table->string("discounttype")->nullable();
            $table->string("amount")->nullable();
            $table->string("paid")->nullable();
            $table->string("due")->nullable();

            $table->text("note")->nullable()->comment("note from ptn");
            $table->text("tc")->nullable()->comment("note for ptn");

            $table->date("invoicedate");
            $table->date("duedate");

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
        Schema::dropIfExists('invoices_sales');
    }
}
