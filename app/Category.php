<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name','img'];
    public function subcategory(){
        return $this->hasMany(Subcategory::class);
    }

}
