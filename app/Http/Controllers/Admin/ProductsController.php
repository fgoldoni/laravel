<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Includes\DataProductsController;
use App\Media;
use App\Meta;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DataProductsController::getSelectOptionsCategories();
        $status     = DataProductsController::getSelectOptionsStatus();

        $products = Product::get();
        //$products->load('category');
        $products->load('media');

        return view('admin.products.index',compact('products','categories','status'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produts    = factory(Product::class)->create(['media_id' => 2,'category' => 4,'status' => 1]);
        $medias     = factory(Media::class)->create();
        $metas = factory(Meta::class)->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Product::select('id','isbn','name','status')->get();

        return Response::json($products,200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selectCategories = DataProductsController::getSelectOptionsCategories();
        $status = DataProductsController::getSelectOptionsStatus();

        $product = Product::findOrFail($id);

        $data['product'] =$product;
        $data['selectCategories'] =$selectCategories;
        $data['status'] =$status;
        return Response::json($data,200,[],JSON_NUMERIC_CHECK);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
