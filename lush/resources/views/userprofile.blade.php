@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/userprofile.css') }}">
    <title>Contacto</title>
  </head>
  <body>

    <main id="main" class="container-fluid" style="background-image: url({{asset('/storage/bora.jpg')}})">
      <div class="page-title row pt-5">
        <div class="title col-12 text-center pt-5 mb-4">
          <h1>Mi Cuenta</h1>
          <div class="feature_divider">
          </div>
        </div>
      </div>
    </div>
    <form  id="form" action="perfil.php" method="post" class="mb-0 d-flex" enctype="multipart/form-data">


    <section id="section-left"class="row d-flex">
      <div id= "profile-pic" class="col-12 col-md-4 col-lg-4 text-center m-0">
        <img class="align-self-center col-10" src="../usuarios/profilepics/" alt="Profile">

        <div id="changephoto" class="flex-md-column col-12">
            <label for="profpic" class="mt-3" for="profpic">Click aqui para cambiar foto</label>
            <input style="display:none"type="file" name="profpic" id="profpic">
            <br>
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
                <p></p>
            </div>
            <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
              <p>Apellido</p>
            </div>
            <div class="value col-sm-12 col-m-7 col-lg-7 border-top pt-2">
                <p></p>
            </div>
            <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
              <p>email</p>
            </div>
            <div class="value col-sm-12 col-m-7 col-lg-7 border-top pt-2">
              <p></p>
            </div>
          </div>


          <div class="section-right mt-3">
            <h2>Direccion</h2>
              <div class="row border rounded">




                     <div class="field col-sm-12 col-m-5 col-lg-5 pt-2">
                       <p>Calle</p>
                     </div>
                     <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                         <input type="text" class="form-control transparent" name="calle" id="calle" value="" rows="1"></input>
                     </div>

                    <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
                      <p>Piso/Depto</p>
                    </div>
                    <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                        <input type="text" class="form-control transparent" name="apartment" id="apartment" value="" rows="1"></input>
                    </div>
                    <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
                      <p>Codigo Postal</p>
                    </div>
                    <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                        <input type="text" class="form-control transparent" name="postcode" id="postcode" value="" rows="1"></input>
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
                    <input type="text" class="form-control transparent" name="bank" id="bank" value="" rows="1"></input>
                </div>
                <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
                  <p>Nombre Titular</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="text" class="form-control transparent" name="owner" id="owner" value="" rows="1"></input>
                </div>
                <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-2">
                  <p>Numero de tarjeta</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="text" class="form-control transparent" name="card_number" id="card_number" value="" rows="1"></input>
                </div>
              </div>
              <button type="submit" name="submit-datos" class="btn btn-primary mb-4">Actualizar datos</button>
          </div>


        </div>
      </section>
      </form>
    </main>
  </body>
@endsection
