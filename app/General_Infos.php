<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General_Infos extends Model
{
   protected $table="general_infos";
   protected $fillable=['masterDR_and_clinics_id','city','country','adress_1','adress_2','gender','date_of_birth','degree',
       'department','position','specility','priority','status','postal_zip','blood_drup','expr_year','awards_count'];
}
