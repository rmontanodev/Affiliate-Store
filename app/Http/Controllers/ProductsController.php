<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\ProductPrice;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $offers = ProductPrice::get();
        $brands = Brand::get();
        return view('products.index',compact('offers','brands'));
    }
    public function filterbrand($name){
        $brand = Brand::where('Name',$name)->first();
        $searchoffers = Product::where('Brand_id',$brand->id)->get();
        $offers = array();
        foreach ($searchoffers as $offer){
            foreach ($offer->productprice as $oferta){
                array_push($offers,$oferta);
            }
        }
        $brands = Brand::get();
        return view('products.index',compact('offers','brands'));

    }
}
