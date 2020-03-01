<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname','usr_name', 'email', 'password','phone'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];  public $timestamps=false;


    public  function get_roles(){
        return  $this->belongsToMany('App\Roles','role_user','user_id','role_id');
    }

    public  function the_role() {
        foreach ( $this->get_roles()->get() as $ytk ) {
            return $ytk->name;
        }
    }
}
