<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{
      public function index()
    {
        $stores = Store::all();
        return view ('stores.index', compact('stores'));
    }

    public function show(Store $store)
    {
        // $stores->products;
   
        return view('stores.show', compact('store'));

	}
}
