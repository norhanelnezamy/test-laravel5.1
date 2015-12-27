<?php

namespace App;

use File;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('name','description','photo','price','category_id');

    public static $rules =array(
        'name' =>'required|min:3|alpha',
        'description'=>'required',
        'price'=>'required|numeric',
        'category_id'=>'required|integer',
        'photo'=>'image|mimes:jpg,jpeg,png'
    );
    public function category(){
        $this->belongsTo('Category');
    }

}