<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\support\Facades\Storage;
use App\Product;
use App\Imageproduct;
use App\Highlight;
use App\Tripinclude;

class ABMcontroller extends Controller
{

public function index(){
  $products = Product::all();

  return view('ABM.main', [
    'products' => $products
  ]);
}

public function ABMdirect($id){


  $product = Product::find($id);
  $highlights = $product->highlights;
  $includes = $product->includes;
  $photos = $product->photos;

return view('ABM.edit', [
  "product" => $product,
  "highlights" => $highlights,
  "includes" => $includes,
  "photos" => $photos
]);
}


public function edit(Request $request){

  if($request->file('photos')){
    $this->validate($request, [

                  'photos' => 'required',
                  'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

          ]);
      $imagename = Str::slug("$request->destination");

        foreach($request->file('photos') as $key => $image)
          {
            $extension = $image->getClientOriginalExtension();

              $name = $imagename.($request->counter + $key). "." . $extension;
              $image->move(public_path('/storage/DestinationPhoto'), $name);
              $data[] = $name;
          }
        foreach($data as $one){
          $newphoto = new Imageproduct;
          $newphoto->id = null;
          $newphoto->name = $one;
          $newphoto->product_id = $request->id;
          $newphoto->save();
        }
        return redirect('/ABM/main');
  }

  elseif($request->has('sendphoto')){


      $request->validate([
      'photo' => 'required',
      'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $name = $request->oldname;
    $request->photo->move(public_path().'/storage/DestinationPhoto', $name);


    $updatephoto = Imageproduct::find($request->editphoto);

    $updatephoto->name = $name;

    $updatephoto->save();

    return redirect('/ABM/main');


  }

  else{
    return redirect()->back();
  }
}

Public function borrarFoto($id){


  $foto = Imageproduct::find($id);

  $file= $foto->name;
  $filename = public_path().'/storage/DestinationPhoto'. $file;
  Storage::delete($filename);

    Imageproduct::destroy($id);


  return redirect()->back();

}




}
