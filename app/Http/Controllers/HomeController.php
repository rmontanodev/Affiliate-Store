<?php

namespace App\Http\Controllers;

use App\ProductPrice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $offers = ProductPrice::get();
        return view('home.index',compact('offers'));
    }
}
