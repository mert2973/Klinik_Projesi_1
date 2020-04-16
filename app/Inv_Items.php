<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inv_Items extends Model
{
    protected $table="inv_items";
    protected $fillable=["clinic_id","itm_name","itm_dscr","itm_cost"];
}
