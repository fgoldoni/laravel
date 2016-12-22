<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    public $table = "products";
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function media(){
        return $this->belongsTo('App\Media');
    }

    public function metas(){
        return $this->belongsToMany('App\Meta');
    }
}
