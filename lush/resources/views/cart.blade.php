@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/cart.css') }}">
    <title>Carrito</title>
  </head>
  <body>
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-12 text-center mt-5 pt-5">
          <h1>mi carrito</h1>
          </div>
          <div class="feature_divider">
          </div>
        </div>
        <div class="row">
          <div class="products col-12 col-m-6 col-lg-6">
            <h2>productos</h2>
            <div class="detalle mt-3">
              <img src="img/fuji.jpeg" alt="">
              <ul>
                <li class="product-name mb-2">nombre producto</li>
                <li class="description">Precio:
                  {{$usuariolog}}
                </li>
                <li class="description">Cantidad:</li>
                <li class="description">Boton Borrar</li>
                </ul>
            </div>
          </div>
            <div class="total col-12 col-m-6 col-lg-6">
              <h2>subtotal</h2>
              <p>TOTAL AQUI</p>
              <button type="button" name="button">Confirmar Compra</button>
            </div>
        </div>
      </div>
    </body>
@endsection
