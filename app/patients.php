<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $fillable=['the_dr_id','p_name','p_surname','p_email','p_phone'];
}
