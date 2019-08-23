<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customerproductalert extends Model
{
    protected $table = 'customersproductalert';
    protected $fillable = ['customer_id','product_id','price'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
