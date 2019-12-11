@extends('layout')

@section('title')
  <script type="text/javascript" src="{{asset('js/ABMedit.js')}}">

  </script>
  <title>Agregar productos</title>
@endsection

@section('main')
  <h1 class="pt-5">Agregar producto</h1>
  <h3>En esta pagina podes cambias agregar un producto nuevo al base de datos</h3>

  </br>
  <div class="row">
    <div class="col-8">


  <form method="post" action="/ABM/add" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
      <label for="Destino">Destino</label>
      <input type="text" class="form-control" name="destination" id="Destino" value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="descripcion">Descripcion</label>
      <input type="text" class="form-control" name="description" id="descripcion" value="" rows="4"></input>
    </div>
    <div class="form-group">
      <label for="Precio">Precio</label>
      <input type="text" class="form-control" name="price" id="Precio" value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="Duracion">Duracion en dias</label>
      <input type="text" class="form-control" name="stay" id="Duracion" value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="Stock">Lugares vacantes</label>
      <input type="text" class="form-control" name="stock" id="Stock" value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="photos">Fotos del destino</label>
      <input type="file" multiple="multiple" class="form-control" name="photos[]" id="photos" value=""></input>
    </div>

    <h2>Highlights del viaje</h2>
    <div id="divHighlights">
  </div>
  <button id="addhighlight" class="btn btn-primary mb-3" type="button" name="addhighlight">Agregar highlight</button>


  <h2>Lo que incluye el viaje</h2>
  <div id="divIncludes">
  </div>
  <button id="addInclude" class="btn btn-primary mb-3" type="button" name="button">Agregar include</button>

    <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
    <a href="/ABM/main" class="btn btn-secondary col-3">Volver</a>
  </form>




  </div>

  </div>
@endsection
