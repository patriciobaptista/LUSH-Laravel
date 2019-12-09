@extends('layout')

@section('title')
  <link rel="stylesheet" type = "text/css" href="{{ asset('css/cart.css') }}">
  <title>Carrito</title>
@endsection
@section('main')



    <main id="main" class="container-fluid" style="background-image: url({{asset('/storage/carrito.jpg')}})">
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



              @if(session()->has('cart'))

                @php
                  $total= 0;
                @endphp




            @foreach (session('cart') as $product)

            @php

            $total =+ ($product["price"] * $product["quantity"]);

            @endphp



            <div class="detalle mt-3">
                <img src="{{asset('storage/DestinationPhoto/' . $product["photos"][0]["name"])}}" alt="{{$product["destination"]}}">
                <form class="" action="/carrito" method="post">
                  @csrf
                  <ul>
                    <li class="product-name mb-2">{{$product["destination"]}}</li>
                    <li class="description">Precio:$ {{$product["price"]}}</li>
                    <li class="description">Cantidad: {{$product["quantity"]}}</li>
                    <button class="btn btn-primary" name="id" value="{{$product["id"]}}" type="submit">Eliminar la mierda</button>
                  </ul>

                    </form>

            </div>
          @endforeach
          </div>
            <div class="total col-12 col-m-6 col-lg-6">
              <h2>Subtotal</h2>
              <p>${{$total}}</p>
              <button class="btn btn-primary" type="submit" name="button">Confirmar Compra</button>
            </div>
              @else
              <div class="vacio">

                  <h1>Su carrito esta vacio</h1>
                  <a href="/destinos" class="btn btn-primary">Volver a productos</a>

              </div>
              @endif
          </form>
        </div>
      </main>
    </body>
@endsection
