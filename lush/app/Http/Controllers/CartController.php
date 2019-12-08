<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        return view('/cart');
    }


    public function show($id)
    {
        return view('/cart');
    }


    public function destroy(Request $request)
    {
      if(session()->has('cart')){
        $request->session()->forget($request->id);
      }

      return redirect()->back();

}
}
