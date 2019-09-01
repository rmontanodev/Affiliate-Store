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
    function comprobarenarray($comprobar,$array){
        for($i = 0; $i < count($array) ; $i++){
            if($array[$i] == $comprobar){
                return true;
            }
        }
        return false;
    }
    function comprobarpropiedadenarray($comprobar,$array,$propiedad){
        for($i = 0; $i < count($array) ; $i++){
            if($array[$i]->$propiedad == $comprobar){
                return true;
            }
        }
        return false;
    }
    public function filterbrand($brand_id){
        $products = Product::where('brand_id','=',$brand_id)->get();


        $totaloffers = array();
        //this for we get all offers of all products we have
        for($i = 0; $i < count($products);$i++){
            //in array totaloffers we will get array with 2 levels example ->($totaloffers[0] will have other array inside(array of offers of a product))
            array_push($totaloffers,$products[$i]->offers()->get());
        }


        $offers = array();
        //we want to get the lowest price of a offer of a product, so we will check all prices and just put on array $offers the offer with lowest price
        for($i = 0; $i<count($totaloffers);$i++){
            $item = array('price'=>9999999.9,'item'=>'hi');
            for($j = 0; $j<count($totaloffers[$i]);$j++){
                if($totaloffers[$i][$j]->totalPrice < $item['price']){
                    $item['price'] = $totaloffers[$i][$j]->totalPrice;
                    $item['item'] = $totaloffers[$i][$j];
                }
            }
            array_push($offers,$item['item']);
        }
        $categories = array();
        //Here we want to get all categories that we have on offers, to filter it later, so we will check all categories and push it to $categories, so we will get all categories of a brand
        for($i = 0; $i < count($products);$i++){
            if($this->comprobarpropiedadenarray($products[$i]->category_id,$categories,'id')){

            }
            else{
                $category = Category::find($products[$i]->category_id);
                array_push($categories,$category);
            }
        }
        $rangeprice = array('lower'=> 9999999,'higher' => 0);
        for($i = 0; $i < count($offers);$i++) {
                if($offers[$i]->totalPrice < $rangeprice['lower']){
                    $rangeprice['lower'] = $offers[$i]->totalPrice;
                }
                if($offers[$i]->totalPrice > $rangeprice['higher']){
                    $rangeprice['higher'] = $offers[$i]->totalPrice;
                }

        }
        $paginastotales = ceil(count($offers) / 12);
        return view('products.brand',compact('offers','categories','rangeprice','paginastotales','brand_id'));

    }
    public function filtercategory($category_id){
        $products = Product::where('category_id','=',$category_id)->get();


        $totaloffers = array();
        //this for we get all offers of all products we have
        for($i = 0; $i < count($products);$i++){
            //in array totaloffers we will get array with 2 levels example ->($totaloffers[0] will have other array inside(array of offers of a product))
            array_push($totaloffers,$products[$i]->offers()->get());
        }


        $offers = array();
        //we want to get the lowest price of a offer of a product, so we will check all prices and just put on array $offers the offer with lowest price
        for($i = 0; $i<count($totaloffers);$i++){
            $item = array('price'=>9999999.9,'item'=>'hi');
            for($j = 0; $j<count($totaloffers[$i]);$j++){
                if($totaloffers[$i][$j]->totalPrice < $item['price']){
                    $item['price'] = $totaloffers[$i][$j]->totalPrice;
                    $item['item'] = $totaloffers[$i][$j];
                }
            }
            array_push($offers,$item['item']);
        }
        $brands = array();
        //Here we want to get all brands that we have on offers, to filter it later, so we will check all brands and push it to $brands, so we will get all brands of a category
        for($i = 0; $i < count($products);$i++){
            if($this->comprobarpropiedadenarray($products[$i]->brand_id,$brands,'id')){

            }
            else{
                $brand = Brand::find($products[$i]->brand_id);
                array_push($brands,$brand);
            }
        }
        $rangeprice = array('lower'=> 9999999,'higher' => 0);
        for($i = 0; $i < count($offers);$i++) {
            if($offers[$i]->totalPrice < $rangeprice['lower']){
                $rangeprice['lower'] = $offers[$i]->totalPrice;
            }
            if($offers[$i]->totalPrice > $rangeprice['higher']){
                $rangeprice['higher'] = $offers[$i]->totalPrice;
            }

        }
        $paginastotales = ceil(count($offers) / 12);
        return view('products.category',compact('offers','brands','rangeprice','paginastotales','category_id'));
    }
    public function mixedfilter($category_id,$brand_id){
        $products = Product::where(function($query) use ($category_id,$brand_id){
            $query->where('category_id','=',$category_id)->where('brand_id','=',$brand_id);
        })->get();
        $totaloffers = array();
        //this for we get all offers of all products we have
        for($i = 0; $i < count($products);$i++){
            //in array totaloffers we will get array with 2 levels example ->($totaloffers[0] will have other array inside(array of offers of a product))
            array_push($totaloffers,$products[$i]->offers()->get());
        }


        $offers = array();
        //we want to get the lowest price of a offer of a product, so we will check all prices and just put on array $offers the offer with lowest price
        for($i = 0; $i<count($totaloffers);$i++){
            $item = array('price'=>9999999.9,'item'=>'hi');
            for($j = 0; $j<count($totaloffers[$i]);$j++){
                if($totaloffers[$i][$j]->totalPrice < $item['price']){
                    $item['price'] = $totaloffers[$i][$j]->totalPrice;
                    $item['item'] = $totaloffers[$i][$j];
                }
            }
            array_push($offers,$item['item']);
        }
        $rangeprice = array('minimo'=> 9999999,'maximo' => 0);
        for($i = 0; $i < count($offers);$i++) {
            if($offers[$i]->totalPrice < $rangeprice['minimo']){
                $rangeprice['minimo'] = $offers[$i]->totalPrice;
            }
            if($offers[$i]->totalPrice > $rangeprice['maximo']){
                $rangeprice['maximo'] = $offers[$i]->totalPrice;
            }
        }
        $paginastotales =  ceil(count($offers) / 12);
        return view('partial.products',compact('offers','paginastotales'));
    }
    public function fiterbyprice($min,$max,$category,$brand){
        if($category){
            if($brand){
                $offers = Offer::where(function($query) use($min,$max,$category,$brand){
                    $query->product()->where('category_id','=',$category);
                    $query->product()->where('brand_id','=',$brand);
                    $query->whereBetween('totalPrice',[$min,$max]);
                });
            }
            else{
                $offers = Offer::where(function($query) use($min,$max,$category,$brand){
                    $query->product()->where('category_id','=',$category);
                    $query->whereBetween('totalPrice',[$min,$max]);
                });
            }
        }
        else{
            if($brand){
                $offers = Offer::where(function($query) use($min,$max,$category,$brand){
                    $query->product()->where('brand_id','=',$brand);
                    $query->whereBetween('totalPrice',[$min,$max]);
                });
            }
            else{
                $offers = Offer::whereBetween('totalPrice',[$min,$max]);
            }
        }

        $paginastotales =  ceil(count($offers) / 12);
        return view('partial.products',compact('offers','paginastotales'));
    }
    public function pagination($page,$min,$max,$category,$brand){
        $offsetting = ($page - 1) * 12;
        $offers = Offer::where(function($query) use($min,$max,$category,$brand){
            $query->product()->where('category_id','=',$category);
            $query->product()->where('brand_id','=',$brand);
            $query->whereBetween('totalPrice',[$min,$max]);
        })->offset($offsetting)->limit(12)->get();
        return view('partial.products',compact('offers','paginastotales'));
    }
}
