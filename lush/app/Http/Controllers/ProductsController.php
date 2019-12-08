<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();

      return view('product.destinations', [
        'products' => $products
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.product', [
          'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cart = $request->session()->get('cart');

      dd($cart);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //
    }
}
