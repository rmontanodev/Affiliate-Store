<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = ['name','img','category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
