<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Offer;
use App\Subcategory;
use Illuminate\Http\Request;

class Offers extends Controller
{
    public function index(){
        $offers = Offer::get();
        $brands = Brand::get();
        $categories = Category::get();
        $pricemin = Offer::orderBy('totalPrice','asc')->first();
        $pricemax = Offer::orderBy('totalPrice','desc')->first();
        $rangeprice = array(
            'lower' => $pricemin->totalPrice,
            'higher' => $pricemax->totalPrice
        );
        return view('products.index',compact('offers','brands','categories','rangeprice'));
    }
    public function filterbrand($name){
        $brand = Brand::where('name',$name)->first();
        $searchoffers = Product::where('brand_id',$brand->id)->get();
        $offers = array();
        foreach ($searchoffers as $offer){
            foreach ($offer->offers as $oferta){

                array_push($offers,$oferta);
            }
        }
        $brands = Brand::get();
        $categories = Category::get();
        $pricemin = Offer::orderBy('totalPrice','asc')->first();
        $pricemax = Offer::orderBy('totalPrice','desc')->first();
        $rangeprice = array(
            'lower' => $pricemin->totalPrice,
            'higher' => $pricemax->totalPrice
        );
        return view('products.index',compact('offers','brands','categories','rangeprice'));

    }
    public function filtercategory($name){
        $category = Category::where('name',$name)->first();
        $searchoffers = Product::where('category_id',$category->id)->get();
        $offers = array();
        foreach ($searchoffers as $offer){
            foreach ($offer->offers as $oferta){

                array_push($offers,$oferta);
            }
        }
        $brands = Brand::get();
        $categories = Subcategory::where('category_id',$category->id)->get();
        $pricemin = Offer::orderBy('totalPrice','asc')->first();
        $pricemax = Offer::orderBy('totalPrice','desc')->first();
        $rangeprice = array(
            'lower' => $pricemin->totalPrice,
            'higher' => $pricemax->totalPrice
        );
        return view('products.index',compact('offers','brands','categories','rangeprice'));
    }
}
