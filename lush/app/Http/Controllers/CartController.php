<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{

    public function index()
    {
      $request->session()->flush('cart');
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



          elseif($request->session()->has("cart.$id")){
            $request->session("cart.$id")["quantity"]++;

            $request->session()->save();

            return redirect()->back();
    }

        else{

            $request->session()->push("cart.$id", [
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
      $id = $request->id;
        $request->session()->forget("cart.$id");

        return redirect()->back();
    //  if($request->session()->has('cart')){
    //    $request->session()->forget("cart" ."[$position]");
    //  }

      }


}
