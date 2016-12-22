<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'metas';
    protected $guarded = [];
    public function products(){
        return $this->belongsToMany('App\Product');
    }
}
