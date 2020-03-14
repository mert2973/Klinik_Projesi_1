<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masterDoctors_and_Clinics extends Model
{
    protected $table="masterDr_and_Clinics";
    protected $fillable=['master_dr_id','clinic_id'];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
