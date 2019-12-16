<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class OrderController extends Controller
{
  public function index()
  {
    $products = Product::all();
    $cart = session()->get('cart');
    return view('order', [
      'products' => $products,
      'cart' => $cart,
    ]);
  }

  public function back(Request $request)
  {
    if($request->has('back')){
      $request->session()->forget('cart');
      return redirect('/');
    }
  }
}
