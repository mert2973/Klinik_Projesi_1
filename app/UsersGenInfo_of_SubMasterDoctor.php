<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersGenInfo_of_SubMasterDoctor extends Model
{
    protected $table='UsersGenInfo_of_SubMasterDr';
    protected $fillable=['user_id','masterDr_and_clinic_id','general_info_id'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
