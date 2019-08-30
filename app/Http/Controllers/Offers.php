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
        $offers = Offer::limit(12)->get();
        $cantidad = Offer::count();
        $paginastotales =  ceil($cantidad / 12);
        $brands = Brand::get();
        $categories = Category::get();
        $pricemin = Offer::orderBy('totalPrice','asc')->first();
        $pricemax = Offer::orderBy('totalPrice','desc')->first();
        $rangeprice = array(
            'lower' => $pricemin->totalPrice,
            'higher' => $pricemax->totalPrice
        );
        return view('products.index',compact('offers','brands','categories','rangeprice','paginastotales'));
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
    public function fiterbyprice($min,$max){
        $offers = Offer::whereBetween('totalPrice',[$min,$max])->get();
        return view('partial.products',compact('offers'));
    }
    public function pagination($page){
        $offsetting = ($page - 1) * 12;
        $offers = Offer::offset($offsetting)->limit(12)->get();
        return view('partial.products',compact('offers'));
    }
}
