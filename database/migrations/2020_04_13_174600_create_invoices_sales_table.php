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
        /*
        "id": null,
//"appointment_id": null,
//"name": "ahmet",
"patient_id": null,
//"email": "ef",
//"mobile": "dvdsf",
//"doctor": "Daniel Barnes",
"doctor_id": "1",
"invoicedate": "2020-04-14",
"duedate": "2020-04-14",
"method": "2",
"status": "Ödendi",
"inv_status": "0",
"item": [
{
"name": "ilaç 1",
"descr": "ilaç 1 açıklaması",
"quantity": "3",
"cost": "200.00",
"tax": [
{
"tax_price": "60.00",
"name": "GST (10%)",
"rate": "10"
}
],
"taxprice": "60.00",
"price": "600.00"
},
{
"name": "ilaç 2",
"descr": "ilaç 2 açıklaması",
"quantity": "2",
"cost": "400.00",
"tax": [
{
"tax_price": "80.00",
"name": "GST (10%)",
"rate": "10"
}
],
"taxprice": "80.00",
"price": "800.00"
}
],
"subtotal": "1400.00",
"tax": "140.00",
"discounttype": "1",
"discount": null,
"discount_value": "0",
"amount": "1540.00",
"paid": null,
"due": "1540.00",
"note": "It's great to work with you.",
"tc": "Lütfen 15 gün içinde bize ödeme yapınız. Aksi takdirde % 10 faiz uygulanacaktır."
        **/
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
