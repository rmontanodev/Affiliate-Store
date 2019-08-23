<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = ['product_id','brand_id','price','sendPrice','totalPrice','reviews','rating','url','created_at'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
