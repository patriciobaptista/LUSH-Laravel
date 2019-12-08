@extends('layout')
@section('main')


  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/userprofile.css') }}">
    <title>LUSH - Mi Cuenta</title>
  </head>
  <body>

    <main id="main" class="container-fluid" style="background-image: url({{asset('/storage/capadocia-sunset.jpg')}})">
      <div class="page-title row pt-5">
        <div class="title col-12 text-center pt-5 mb-4">
          <h1>Mi Cuenta</h1>
          <div class="feature_divider">
          </div>
        </div>
      </div>
    </div>
    <form  id="form" action="/perfil" method="post" class="mb-0 d-flex" enctype="multipart/form-data">
      @csrf

    <section id="section-left"class="row d-flex">
      <div id= "profile-pic" class="col-12 col-md-4 col-lg-4 text-center m-0">
        <img class="align-self-center col-10" src="/uploads/avatars/{{ $user->avatar }}" alt="Profile">

        <div id="changephoto" class="flex-md-column col-12">
            <label for="avatar" class="mt-3" for="avatar">Click aqui para cambiar foto</label>
            <input type="file" style="display:none" name="avatar" id="avatar">
            <br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-primary mb-3" type="submit" name="submitprofile">SUBIR FOTO</button>
        </div>

      </div>
      <div class="section-right col-12 col-md-6 col-md-6 rounded pr-5">
        <h2>Datos personales</h2>


          <div class="row border rounded">
            <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
              <p>Nombre</p>
            </div>
            <div class="value col-sm-12 col-m-7 col-lg-7 border-top pt-2">
                <p>{{ $user->name }}</p>
            </div>
            <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
              <p>Apellido</p>
            </div>
            <div class="value col-sm-12 col-m-7 col-lg-7 border-top pt-2">
                <p>{{ $user->surname }}</p>
            </div>
            <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
              <p>email</p>
            </div>
            <div class="value col-sm-12 col-m-7 col-lg-7 border-top pt-2">
              <p>{{ $user->email }}</p>
            </div>
          </div>


          <div class="section-right mt-3">
            <h2>Direccion</h2>
              <div class="row border rounded">




                     <div class="field col-sm-12 col-m-5 col-lg-5 pt-2">
                       <p>Calle</p>
                     </div>
                     <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                         <input type="text" class="form-control transparent" name="calle" id="calle" value="@if($user->direccion->street == null){{'Ingrese su direccion'}}@else{{$user->direccion->street}}@endif" rows="1"></input>
                     </div>

                    <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
                      <p>Piso/Depto</p>
                    </div>
                    <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                        <input type="text" class="form-control transparent" name="apartment" id="apartment" value="@if($user->direccion->apartment == null){{'Ingrese su piso/depto'}}@else{{$user->direccion->apartment}}@endif" rows="1"></input>
                    </div>
                    <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
                      <p>Codigo Postal</p>
                    </div>
                    <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                        <input type="text" class="form-control transparent" name="postcode" id="postcode" value="@if($user->direccion->postcode == null){{'Ingrese su codigo postal'}}@else{{$user->direccion->postcode}}@endif" rows="1"></input>
                    </div>

              </div>
            </div>


          <div class="section-right mt-3">
            <h2>Tarjetas</h2>

              <div class="row border rounded mb-4">
                <div class="field col-sm-12 col-m-5 col-lg-5 pt-2">
                  <p>Banco</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="text" class="form-control transparent" name="bank" id="bank" value="@if($user->carddetail->bank == null){{'Ingrese su banco'}}@else{{$user->carddetail->bank}}@endif" rows="1"></input>
                </div>
                <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
                  <p>Nombre Titular</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="text" class="form-control transparent" name="owner" id="owner" value="@if($user->carddetail->owner == null){{'Ingrese su nombre como figura en la tarjeta'}}@else{{$user->carddetail->owner}}@endif" rows="1"></input>
                </div>
                <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
                  <p>Numero de tarjeta</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="text" class="form-control transparent" name="card_number" id="card_number" value="@if($user->carddetail->number == null){{'Ingrese su numero de tarjeta'}}@else{{$user->carddetail->number}}@endif" rows="1"></input>
                </div>
              </div>
              <button type="submit" name="updateDetails" class="btn btn-primary mb-4">Actualizar datos</button>
          </div>


        </div>
      </section>
      </form>
    </main>
  </body>
@endsection
