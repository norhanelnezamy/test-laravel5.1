<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Monolog\Handler\NullHandlerTest;

class ProductsController extends Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function getIndex()
    {
        $objects = Product::all();
        $categories = array();
        foreach (Product::all() as $product) {
            $categories[$product->id] = Category::find($product->category_id)->name;
        }
        return view('admin/products/index')
            ->with('objects', $objects)
            ->with('category',$categories);
    }

    public function getCreate()
    {
        $categories = array();
        foreach (Category::all() as $category) {
            $categories[$category->id] = $category->name;
        }
        return view('admin/products/create')
            ->with('categories', $categories);
    }

    public function postCreate()
    {
        $validate = Validator::make(Input::all(), Product::$rules);
        if ($validate->passes()) {
            $product = new Product();
            $product->name = Input::get('name');
            $product->description = Input::get('description');
            $product->price = Input::get('price');
            $product->category_id = Input::get('category_id');
            $product->photo = Controller::upload(Input::file('photo'));
            $product->save();
            return redirect('products');
        }
        return redirect('products/create')
            ->with('errors', $validate->errors());
    }

    public function getUpdate($id)
    {
        $categories = array();
        foreach (Category::all() as $category) {
            $categories[$category->id] = $category->name;

        }
        $product = Product::find($id);
        if ($product) {
            return view('admin/products/update')
                ->with('product', $product)
                ->with('categories', $categories);
        }
    }

    public function postUpdate($id)
    {
        $validate = Validator::make(Input::all(), Product::$rules);
        if ($validate->passes()) {
            $product = Product::find($id);
            $product->name = Input::get('name');
            $product->description = Input::get('description');
            $product->price = Input::get('price');
            $product->category_id = Input::get('category_id');
            if(Input::get('photo')){
                $product->photo = Controller::upload(Input::file('photo'));
            }
            $product->update();
            return redirect('products');
        }
        return redirect('products/update/' . $id)
            ->with('errors', $validate->errors());
    }

    public function getDelete($id)
    {
        $user = Product::find($id)->delete();

        return redirect('products');

    }
}