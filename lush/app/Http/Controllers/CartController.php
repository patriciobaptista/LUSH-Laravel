<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{

    public function index()
    {
        return view('/cart');
    }

        public function store(Request $request)
        {

          $product = Product::find($request->product_id);

          $id = $product->id;

          if(!$product):
            abort(404);
          endif;

          $cart = $request->session()->get('cart');

          if(!$cart){
            $request->session()->push('cart', [
            'id' => $id,
            'destination' => $product->destination,
            'quantity' => 1,
            'price' => $product->price,
            'stay_length' => $product->stay_length,
            'photos' => $product->photos
            ]);

            return back();
          }



          elseif(isset($cart->$id)){
            $cart->quantity++;

            $request->session()->put('cart', $cart);

            return back();
    }

        else{

            $request->session()->push('cart', [
              'id' => $id,
            'destination' => $product->destination,
            'quantity' => 1,
            'price' => $product->price,
            'stay_length' => $product->stay_length,
            'photos' => $product->photos
            ]
          );

          return back();
        }
        }


    public function destroy(Request $request)
    {
      $position = $request->id;
      $productos = session('cart');

      if($productos['id'] = $position){
        $request->session()->forget($productos['id']);
      }


        return redirect()->back();
    //  if($request->session()->has('cart')){
    //    $request->session()->forget("cart" ."[$position]");
    //  }

      }


}
