@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/login.css') }}">
    <title>Log in</title>
  </head>
  <body>
    <div class="foto container-fluid row pl-5 pt-5" style="background-image: url({{asset('/storage/plane2.jpg')}})">
      <div class="col-8 col-md-5 col-lg-4 offset-1 pt-5">
        <form class="formulario" action="login.php" method="post">
          <div class="form pt-5">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su e-mail" value="<?php if(isset($_GET["email"])){echo $_GET["email"];} ?>" required>
            <small id="emailHelp" class="form-text text-muted">Lush Luxury Travel no comparte informacion personal con terceros.</small>
          </div>
          <div class="form pt-3">
            <label for="password">Contrasena</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contrasena" value="" required>
          </div>

            <?php
              if(isset($_GET["login"])){

              if($_GET["login"] == "error") {
                echo "<p class='error'> El usuario no existe </p>";
              }
              if($_GET["login"] == "pass_incorrect"){
                echo "<p class='error'> El password no es correcto </p>";
              }
              }
             ?>
           </br>
           <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" name="recordar" id="check">
             <label class="form-check-label" for="check">Recordar usuario</label>
           </div>
          <br>
          <button type="submit" name="login" class="btn btn-primary">Ingresar</button>
        </form>
        <p id="olvidado"> <a class="clolvidado" href="forgotpw.php">Olvidaste tu contraseña?</a> </p>
      </div>
    </div>
  </body>

@endsection
