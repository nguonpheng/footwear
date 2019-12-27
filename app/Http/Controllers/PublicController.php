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

    public function type($id){
        //$products = $category->products()->get();
        $products = Category::find($id)->products()->paginate(12);
        return view('men', ['products'=> $products]);
    }
}
