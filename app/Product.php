<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    public $table = "products";

    public function medias(){
        return $this->hasMany('App\Media');
    }

    public function metas(){
        return $this->belongsToMany('App\Meta');
    }

    public function getDates(){
        return ['created_at' , 'updated_at'];
    }
}
