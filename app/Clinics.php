<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinics extends Model
{

    protected  $fillable=['c_legal_name','c_name','c_phone','c_phone_2','c_email','status'];

}
