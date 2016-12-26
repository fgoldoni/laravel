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
}
