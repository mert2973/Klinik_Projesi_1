<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices_Sales extends Model
{
    protected $table="invoices_sales";
    protected $fillable=["patient_id","doctor_id","method","status","inv_status","subtotal","tax","discount","discounttype","amount"
      ,"paid","due","note","tc","invoicedate","duedate"];


}
