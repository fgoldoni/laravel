<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public $table = "medias";
    protected $guarded = [];
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
