<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicNotes_advices extends Model
{
    protected $table="clinic_notes_advices";
    protected $fillable=['apt_notes_adv_id','notes_advices'];
}
