<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class PublicController extends Controller
{
    public function index(){
        $products = Product::all()->take(16);
        return view('welcome', ['products'=>$products]);
    }

    public function about(){
        return view('about');
    }

    public function men(){
        //$products = $category->products()->get();
        $products = Category::find(1)->products()->paginate(12);
        return view('products', ['products'=> $products]);
    }

    public function women(){
        $products = Category::find(2)->products()->paginate(12);
        return view('products', ['products'=> $products]);
    }
}
