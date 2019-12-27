<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PublicController extends Controller
{
    public function index(){
        $products = Product::all()->take(16);
        return view('welcome', ['products'=>$products]);
    }

    public function about(){
        return view('about');
    }
}
