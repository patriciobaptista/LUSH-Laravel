<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD
=======
use App\Direccion;
use App\carddetail;
>>>>>>> aa8d837df01801c8322c7589cb9ca409bec707d4

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password',
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
    ];
<<<<<<< HEAD
=======

    public function direccion(){
      return $this->hasOne('App\Direccion', 'id_user');
    }

    public function carddetail(){
      return $this->hasOne('App\carddetail', 'id_user');
    }
>>>>>>> aa8d837df01801c8322c7589cb9ca409bec707d4
}
