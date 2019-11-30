<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class CartController extends Controller
{
    public function verify(){
      $usuariolog = Auth::user();
      if($usuariolog == null){
        return redirect('home');
      }
      else{
      return view('cart');
    }
    }
}
