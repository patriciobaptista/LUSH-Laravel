<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Direccion;
use App\Carddetail;


class UserController extends Controller
{
    public function userprofile(){
      $user = Auth::user();
      return view('userprofile', compact('user', $user));
    }

    public function updateAvatar(Request $request){
      if($request->hasfile('avatar')){
      $request->validate([
        'avatar'=> 'required|image|mimes:jpeg,png,jpg,giv,svg|max:2048',
      ]);

      $user = Auth::user();
      $avatarName = $user->id. '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();
      $destinationpath = public_path('/uploads/avatars/');
      $request->avatar->move($destinationpath, $avatarName);
      $user->avatar = $avatarName;
      $user->save();

        return view('userprofile', compact('user', $user));
    }
      elseif($request->has('updateDetails')){

        $user = Auth::user();
        $userId = Auth::user()->id;
        $direccion = Direccion::updateOrCreate(
          ['id_user' => $userId],
          ['street' => $request->calle,
          'apartment' => $request->apartment,
          'postcode' => $request->postcode
        ]
      );
      $card = Carddetail::updateOrCreate(
        ['id_user' => $userId],
        ['number' => $request->card_number,
        'bank' => $request->bank,
        'owner' => $request->owner
      ]
    );
      //  $direccion = Direccion::where("id_user", $userId)->first();
      //  if($direccion === null){
      //    $direccion = new Direccion;
    //    }
    //    $direccion->street = $request->calle;
    //    $direccion->apartment = $request->apartment;
      //  $direccion->postcode = $request->postcode;
      //  $direccion->id_user = $userId;
        $direccion->save();
        $card->save();



        return view('userprofile', compact('direccion', 'card', 'user'));
      }
        else{
          return view('userprofile');
        }
    }





}
