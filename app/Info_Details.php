<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_Details extends Model
{
    protected $table="info_details";
    protected $fillable=['facebook_link','instegram_link','twitter_link','general_infos_id'];
    public $timestamps=false;
}
