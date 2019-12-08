@extends('layout')

@section('title')
  <link rel="stylesheet" type="text/css" href="{{asset('css/ABM.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/editar.css') }}">
  <title>Admin - Editar</title>
@endsection

@section('main')

  <h1 class="pt-4">Editor de producto</h1>
  <h3>En esta pagina podes cambias informacion y detalles de productos</h3>

  </br>
  <div class="row">
  <div class="col-12 col-lg-10">


  <form class="container-fluid" method="post" action="/ABM/edit" enctype="multipart/form-data">
    @csrf

  <div class="form-group">
    <input type="hidden" name="id" value="{{$product->id}}">
  <label for="Destino">Destino</label>
  <input type="text" class="form-control" name="destination" id="Destino" value="{{$product->destination}}" rows="1"></input>
  </div>
  <div class="form-group">
  <label for="descripcion">Descripcion</label>
  <input type="text" class="form-control" name="description" id="descripcion" value="{{$product->description}}" rows="4"></input>
  </div>
  <div class="form-group">
  <label for="Precio">Precio</label>
  <input type="text" class="form-control" name="price" id="Precio" value="{{$product->price}}" rows="1"></input>
  </div>
  <div class="form-group">
  <label for="Duracion">Duracion en dias</label>
  <input type="text" class="form-control" name="stay" id="Duracion" value="{{$product->stay_length}}" rows="1"></input>
  </div>
  <div class="form-group">
  <label for="Stock">Lugares vacantes</label>
  <input type="text" class="form-control" name="stock" id="Stock" value="{{$product->stock}}" rows="1"></input>
  </div>

  @if(count($photos) != 0)
    @php
      $photocounter = 0;
    @endphp
  @foreach($photos as $photo)
    @php
      $photocounter++;
    @endphp


  <div class="row my-3 flex-column flex-lg-row flex-wrap">
    <div class="col-6 col-lg-3 row">
        <img class="formphoto col" src="{{asset('storage/DestinationPhoto/' . $photo->name)}}" alt="{{$photo->name}}">
    </div>
    <div class="form-group pt-lg-4 col-2 col-lg-2">
        <input type="hidden" class="form-control" name="editphoto" value="{{$photo->id}}"></input>
    </div>
    <div class="col-6 col-lg-3 pt-lg-5 pl-5">
      <button class="col-4 btn btn-primary" type="submit" name="borrarphotos">Borrar</button>
    </div>
  </div>

@endforeach



  @endif

  <div class="form-group mb-4">
  <label for="photos">Agregar mas fotos del destino</label>
  <input type="hidden" name="counter" value="{{$photocounter}}">
  <input type="file" multiple="multiple" class="form-control" name="photos[]" id="photos" value=""></input>
  </div>


  <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
  <button type="submit" name="volver" class="btn btn-secondary col-3">Volver</button>
  </form>


  </div>

  </div>
@endsection
