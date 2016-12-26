<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    public $table = "products";
    
    public function media(){
        return $this->belongsTo('App\Media');
    }

    public function metas(){
        return $this->belongsToMany('App\Meta');
    }
}
