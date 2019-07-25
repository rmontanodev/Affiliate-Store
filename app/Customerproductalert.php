<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customerproductalert extends Model
{
    protected $table = 'customersproductalert';
    protected $fillable = ['Customer_id','Product_id','Price'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
