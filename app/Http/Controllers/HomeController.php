<?php

namespace App\Http\Controllers;

use App\Media;
use App\Meta;
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
        /*$medias = Media::first();
        $products = Product::first();
        $m=$products->metas->toArray();

        $result[]=$products;
        $result[]=$medias;
        $result[]=$m;
        dd($result);*/
        return view('home');
    }
}
