<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Includes\DataProductsController;
use App\Http\Requests\ProductResquest;
use App\Media;
use App\Meta;
use App\Product;
use App\User;
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
        //$products->load('metas');

        return view('admin.products.index',compact('products','categories','status'));

    }

    public function showAll()
    {
        $products = Product::get();
        $grid     = DataProductsController::loadGrid($products);
        return Response::json($grid,200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produts    = factory(Product::class)->create();
        $medias     = factory(Media::class)->create();
        $metas = factory(Meta::class)->create();
        $produts1    = factory(Product::class)->create();
        $medias1     = factory(Media::class)->create();
        $metas1 = factory(Meta::class)->create();

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
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show()
    {
        $products = Product::select('id','isbn','name','quantity','status')->orderBy('name', 'asc')->get();

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
        $metas = Meta::select('id','tag')->orderBy('tag', 'asc')->get();
        $product = Product::findOrFail($id);
        $product->load('medias');
        $product->load('metas');
        $data['metas'] =$metas;
        $data['product'] =$product;
        $data['selectCategories'] =$selectCategories;
        $data['status'] =$status;
        return Response::json($data,200,[],JSON_NUMERIC_CHECK);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Resquest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->all();
        $product = Product::findOrFail($id);
        $product->update($inputs);
        $data['id'] = $id;
        $data['status'] = DataProductsController::getSelectOptionsStatus()[$product->status];
        $data['success'] ='Item has been updated successfully';
        return Response::json($data,200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * @param ProductResquest $request
     * @param $id
     * @param array $metas
     * @return mixed
     */
    public function save(ProductResquest $request, $id, $metas = [])
    {
        $inputs = $request->all();
        $product = Product::findOrFail($id);
        $product->update($inputs);
        if(!empty($metas)){
            $metas = explode(',',$metas);
            $product->metas()->sync($metas);
        }else{
            $product->metas()->detach();
        }
        $data['id'] = $id;
        $data['success'] ='Item was saved successfully';
        return Response::json($data,200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param $medias
     * @param $metas
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function destroy($id, $medias=array(), $metas = [])
    {
        if(!empty($medias)){
            Media::destroy($medias);
        }elseif (!empty($metas)){

        }else{
            $product = Product::findOrFail($id);
            $deletedProduct = $product->delete();
            $deletedMedias = Media::where('product_id', $id)->delete();
            $data['deletedMedias'] =$deletedMedias;
            $data['deletedProduct'] =$deletedProduct;
        }
        $data['medias'] =$medias;
        $data['success'] ='Item was deleted successfully';
        return Response::json($data,200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * @param $meta_name
     */
    public function saveMeta($meta_name){
        $meta = new Meta;
        $meta->tag = $meta_name;
        $meta->save();
        $data['id'] = $meta->id;
        return Response::json($data,200,[],JSON_NUMERIC_CHECK);
    }
}
