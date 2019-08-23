<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = ['usertype_id','fullname','email','password','imgAvatar','on_off'];

    public function usertype(){
        return $this->belongsTo(UserType::class);
    }
}
