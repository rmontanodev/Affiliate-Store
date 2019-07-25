<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['SerialNumber','Category_id','Brand_id','Model','Img'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function productprice(){
        return $this->belongsTo(ProductPrice::class);
    }
}
