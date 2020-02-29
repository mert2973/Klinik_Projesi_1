<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class general_info extends Model
{
    protected $table="general_infos";
    protected $fillable=['city','country','adress_1','adress_2','gender','date_of_birth','','department',
        'specility','degree','priority','status','postal_zip','blood_drup','expr_year','awards_count'];
}
