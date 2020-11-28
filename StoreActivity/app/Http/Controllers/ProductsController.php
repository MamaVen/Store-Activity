<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
     public function index()
    {
    	$products = Product::all();
    	$transactions = Transaction::all();
    	return view('products.index', compact('products', 'transactions'));
    }

    public function edit(Product $product)
    {
    	$stores = Store::all();
    	$transactions = Transaction::all();
    	return view('products.edit', compact('product', 'stores', 'transactions'));
    }

    public function update(Product $product)
    {

    	$validated_fields = request()->validate([
    		'name' => 'required',
    		'store_location' => 'required',
    		'number_of_products' => 'required',
    		'title' => 'required'
    	]);

    	$product->update($validated_fields);
    	return redirect('/products');
    }

    public function details() 
    {
		$products = Product::all();
    	$transactions = Transaction::all();
    	return view('products.details', compact('products', 'transactions'));

    }
}
}
