<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['category_id','name','price','image'];
    public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
}
