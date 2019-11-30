@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/register.css') }}">
    <title>Registro</title>
  </head>
  <body>
    <section class="">
        <article class="container-fluid px-0"> <!-- Background photo -->

            <div class="row photobackground px-0" style="background-image: url({{asset('/storage/star_wp.jpg')}})">

                <div class="col-12 formcontain d-flex">

                  <form class="formAll" action="register.php" method="POST" enctype="multipart/form-data">



                      <div class="form-group">
                          <label for="nombre">Nombre: </label>
                          <input type="text" class="form-control" name="nombre"id="name" aria-describedby="nameHelp" placeholder="Escribir Nombre" value="<?php if(isset($_GET["nombre"])){echo $_GET["nombre"];} ?>">
                      </div>
                      <div class="form-group">
                          <label for="apellido">Apellido: </label>
                          <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="apellidoHelp" placeholder="Escribir Apellido" value="<?php if(isset($_GET["apellido"])){echo $_GET["apellido"];} ?>">
                      </div>
                      <div class="form-group">
                          <label for="email">Email: </label>
                          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Escribir Email" value="<?php if(isset($_GET["email"])){echo $_GET["email"];} ?>">
                      </div>
                      <div class="form-group">
                          <label for="password">Password: </label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Escribir Password" value="">
                      </div>
                      <div class="form-group">
                          <label for="verificarpassword">Verificar Password: </label>
                          <input type="password" name="verificarpassword" class="form-control" id="verificarpassword" placeholder="Repetir Password" value="">
                      </div>
                      <div class="form-group">
                          <label for="profilepic">Subir foto de perfil: </label>
                          <input type="file" class="form-control" id="profilepic" name="profilepic" aria-describedby="nameHelp" value="">
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="checkfinal" name="checkfinal" value="">
                          <label class="form-check-label"  for="checkfinal" required>He leído los términos y condiciones</label>
                      </div>
                          <small id="idHelp" class="form-text text-muted">Lush Luxury Travel no comparte informacion personal con terceros. </br></small>
                          </br>
                          <button id="submitbottom" type="submit" name="submit" class="btn btn-primary">Submit</button>
                          <?php if(isset($_GET["register"])){
                                switch ($_GET["register"]) {
                                  case 'vacio':
                                      echo "<p class='error'> Usted dejó algún campo vacio, por favor intente de nuevo. </p> </br>";
                                    break;

                                  case 'verificar':
                                      echo "<p class='error'> Las contraseñas no verifican, por favor intente de nuevo. </p> </br>";
                                    break;

                                  case 'password':
                                      echo "<p class='error'> La contraseña necesita tener por lo menos 6 caracteres, por favor intente de nuevo. </p> </br>";
                                    break;

                                  case 'char':
                                      echo "<p class='error'> EL nombre & apellido solo pueden tener caracteres romanos, por favor intente de nuevo. </p> </br>";
                                    break;

                                  case 'error':
                                      echo "<p class='error'> Hubo un error, por favor intente de nuevo. </p> </br>";
                                    break;

                                  case 'existe':
                                      echo "<p class='error'> El usuario ya existe, por favor intente con otro correo. </p> </br>";
                                    break;

                                  case 'archivo':
                                      echo "<p class='error'> La foto de perfil tiene que ser de formato JPG, JPEG o PNG. </p> </br>";
                                    break;


                                }

                              } ?>



                     </form>
                </div>
            </div>
        </article>
    </section>
  </body>
  </html>
@endsection
