<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicNotes_advices extends Model
{
    protected $table="clinic_notes_advices";
    protected $fillable=['appointments_id','notes_advices'];
}
