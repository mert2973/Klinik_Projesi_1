<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General_Infos extends Model
{

   protected $fillable=['city','country','adress_1','adress_2','gender','date_of_birth',
       'department','specility','priority','status','postal_zip','blood_drup','expr_year','awards_count'];
}
