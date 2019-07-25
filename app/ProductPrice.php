<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table = 'productsprice';
    protected $fillable = ['product_id','Brand_id','Price','SendPrice','TotalPrice','Reviews','Rating','Url','created_at'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
