<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $cats = Category::orderBy("name","ASC")->get();
        $products = Product::orderBy("id","ASC")->limit(6)->get();
        return view('index');
    }
}
