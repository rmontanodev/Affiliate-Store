<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['usertype_id','Fullname','Email','Password','imgAvatar','On_off'];

    public function usertype(){
        return $this->belongsTo(UserType::class);
    }
}
