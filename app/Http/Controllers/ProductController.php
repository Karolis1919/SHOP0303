<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showad(){

        $categories = Category::all();
        return view('admininfo.pages.newad', compact('categories'));
    }

    public function storeProduct(Request $request){

        $validatedData = $request->validate([
            'entitlement' => 'required',
            'info' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'cat_id' => 'required'
        ]);
        $products = Product::create([
            'entitlement' => request('entitlement'),
            'info' => request('info'),
            'quantity' => request('quantity'),
            'price' => request('price'),
            'cat_id' => request('cat_id'),
        ]);
        return redirect ('/home');
    }

    public function allProducts(){
        $products = Product::all();

        return view('admininfo.pages.allproducts', compact('products'));
    }
}
