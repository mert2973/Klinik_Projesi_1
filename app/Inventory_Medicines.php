<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory_Medicines extends Model
{
    protected $table="inventory_medicines";
    protected $fillable=["clinic_id","medc_name","medc_category","medc_company","medc_generic","medc_group",
        "medc_unit","medc_unitpacking","medc_storebox","medc_minlevel","medc_reorderlevel","medc_note"];
}
