<?php

namespace App\Http\Controllers;

use App\Media;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::first();
        $products = Product::first();
        $result[]=$products;
        $result[]=$medias;
        var_dump($products->category->toJson());
        dd($result);
        //return view('home');
    }
}
