<?php

namespace App\Http\Controllers\Includes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataProductsController extends Controller
{
    static function getSelectOptionsStatus() {
        return array(
            array("id"=>"0", "name"=>"Please select your status"),
            array("id"=>"1", "name"=>"Published"),
            array("id"=>"2", "name"=>"Not Published"),
            array("id"=>"3", "name"=>"Deleted")
        );
    }
    static function getSelectOptionsCategories() {
        return array(
            array("id"=>"0", "name"=>"Please select your category"),
            array("id"=>"1", "name"=>"Woman"),
            array("id"=>"2", "name"=>"Man"),
            array("id"=>"3", "name"=>"Kids"),
            array("id"=>"4", "name"=>"Sale")
        );
    }
    static public function setStatus($value){
        switch ($value['id']){
            case  1:
                $span = '<span class="text label label-success">'.$value['name'].'</span>';
                break;
            case 2:
                $span = '<span class="text label label-warning">'.$value['name'].'</span>';
                break;
            case 3:
                $span = '<span class="text label label-danger">'.$value['name'].'</span>';
                break;
            default:
                $span = "";
        }
        return $span;
    }
    static public function setCategory($value){
        switch ($value['id']){
            case  1:
                $category = $value['name'];
                break;
            case 2:
                $category = $value['name'];
                break;
            case 3:
                $category = $value['name'];
                break;
            case 4:
                $category = $value['name'];
                break;
            default:
                $category = "";
        }
        return $category;
    }
    static function loadGrid($products){

        $tpl_data = [];
        $result = [];
        foreach ($products as  $product){
            $tpl_data['id']         = $product->id;
            $tpl_data['isbn']       = $product->isbn;
            $tpl_data['name']       = $product->name;
            $tpl_data['content']    = $product->content;
            $tpl_data['quantity']   = $product->quantity;
            $tpl_data['price']      = $product->price;
            $tpl_data['category']   = self::setCategory(self::getSelectOptionsCategories()[$product->category]);
            $tpl_data['status']     = self::setStatus(self::getSelectOptionsStatus()[$product->status]);
            $tpl_data['url']        = $product->url;
            $tpl_data['created_at'] = $product->created_at->toDateString();
            $tpl_data['updated_at'] = $product->updated_at->toDateString();
            $tpl_data['actions']    = '<a data-toggle="modal" data-target="#edit_modal" class="btn btn-warning btn-icon" style="margin:3px;" onclick="console.log(' . $product->id . ')" ><i class="fa fa-pencil-square" aria-hidden="true"></i></a>';
            $tpl_data['actions']   .= '<a class="btn btn-danger btn-icon delbtn" :id="id" style="margin:3px;"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            $result[]=$tpl_data;
        }
        return $result;
    }
}
