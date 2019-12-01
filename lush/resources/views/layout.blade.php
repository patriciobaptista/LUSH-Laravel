
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/34b9ea8fdc.js"></script>
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/general.css') }}">
  </head>
  <body>
    <?php
    session_start();

    $displayAdmin = "display:none";
    $display=null;
    if(isset($_COOKIE["autologin"]) || isset($_SESSION["user"])){
      $display = "display:none";
    }

    if(isset($_COOKIE["autologin"])){
      $cookie_array=json_decode($_COOKIE["autologin"], true);
      $nombrecookie = $cookie_array["nombre"];
      $emailcookie = $cookie_array["email"];
      if($cookie_array["isadmin"]){
        $displayAdmin = "";
      }
    }
    elseif(isset($_SESSION["user"])){
      $session = $_SESSION["user"];

      $name = $session["nombre"];
      $surname = $session["apellido"];
      $email = $session["email"];

      if($session["isadmin"]){
        $displayAdmin = "";
      }
    }



     ?>

     <header id="header" class="container-fluid">
       <nav class="nav row pt-0 navbar-light bg-faded">
         <div class="col-2 col-md-2" style="display:inline-block">
           <a href="/lush"><img class="logo-left pull-left ml-3" src="{{asset('/storage/logo-blanco.png')}}" style="display:inline-block"alt="logo"></a>
         </div>
         <div class="col-6 col-md-7 text-center" style="display:inline-block">
           <ul class="mt-3">
             <li><a href="/nosotros">Nosotros</a></li>
             <li><a href="/faq">Preguntas Frecuentes</a></li>
             <li><a href="/destinos">Destinos</a></li>
             <li style=<?=$display?>><a href="/registro">Registro</a></li>
             <li style=<?=$displayAdmin?>><a href="../admin/ABM.php"> Editar viajes </a></li>
           </ul>
         </div>
         <div class="offset col-4 col-md-3 text-right pr-4" style="display:inline-block">
           <ul class="pl-0 mt-3 mb-0 pb-0">
             <li style="<?=$display?>" ><a href="/login">Log in</a></li>


             <?php  if(isset($_COOKIE["autologin"])): ?>

             <div id="dropdown-big" class="dropdown">
                   <a class="btn dropdown-toggle pr-0 styledropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Bienvenido <?=$nombrecookie?>
                   </a>

                   <div class="dropdown-menu" style="background-color: rgba(108, 108, 106, 0.5);" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item styledropdown" href="/perfil">Perfil</a>
                     <a class="dropdown-item" href="/carrito"><i class="fas fa-shopping-cart"></i></a>
                     <a style="<?=$displayAdmin?>"class="dropdown-item styledropdown" href="../admin/ABM.php">Editar viajes</a>
                     <a class="dropdown-item styledropdown" href="../logout/logout.php"> Cerrar Sesion </a>
                   </div>
             </div>
           <?php endif;

           if(isset($_SESSION["user"]) && !isset($_COOKIE["autologin"])) : ?>

             <div id="dropdown-big" class="dropdown">
                   <a class="btn dropdown-toggle styledropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Bienvenido <?=$name?>
                   </a>

                   <div class="dropdown-menu" style="background-color: rgba(108, 108, 106, 0.5);" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item styledropdown" href="/perfil">Perfil</a>
                     <a class="dropdown-item" href="/carrito"><i class="fas fa-shopping-cart"></i></a><?php
                       if(isset($_POST)){
                         echo "<span id=\"cart_count\"class=\"text-warning bg-light\"></span>";
                      } else{
                       echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                     }?>
                     <a style="<?=$displayAdmin?>"class="dropdown-item styledropdown" href="../admin/ABM.php">Editar viajes</a>
                     <a class="dropdown-item styledropdown" href="../logout/logout.php"> Cerrar Sesion </a>
                   </div>
             </div>
           <?php endif;?>

             <li><a style="<?=$display?>"href="/carrito"><i class="fas fa-shopping-cart"></i></a></li>

           </ul>
         </div>
       </nav>
       <div id="dropdown-small" class="dropdown">

           <div onclick="myFunction(this)" class="container1 btn btn-secondary dropdown-toggle pt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

             <?php if(isset($_COOKIE["autologin"]) || isset($_SESSION["user"])){?>
                 <a class="dropdown-item" href="../perfil/perfil.php">Perfil</a>
                 <?php } ?>
             <a class="dropdown-item styledropdown" href="/destinos">Destinos</a>
             <a style="<?=$display?>"class="dropdown-item" href="/registro">Registro</a>
             <a style="<?=$display?>" class="dropdown-item" href="/login">Log in</a>
             <a class="dropdown-item" href="/carrito">Mi carrito</a>
             <a style="<?=$displayAdmin?>"class="dropdown-item styledropdown" href="../admin/ABM.php">Editar viajes</a>
             <a class="dropdown-item" href="/faq">Nosotros/FAQ</a>
             <?php if(isset($_COOKIE["autologin"]) || isset($_SESSION["user"])):?>
                 <a style=""class="dropdown-item" href="../logout/logout.php"> Cerrar Sesion </a>
               <?php endif; ?>
           </div>
         </div>
         <img class="logo-name" src="{{asset('/storage/nombre-blanco.png')}}" alt="">
     </header>
     <script>
     function myFunction(x) {
       x.classList.toggle("change");
     }
     </script>

    <main>
      @yield('main')
    </main>


    <footer id="footer" class="container-fluid row pt-4">
        <div class="footer-social col-12 text-center col-lg-6 text-center">
          <p>redes sociales</p>
          <ul>
            <li><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="footer-legal col-12 text-center col-lg-6 text-center">
          <ul>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="#">Legal</a></li>
          </ul>
          <ul>
            <li><a href="http://www.credit-card-logos.com/"><img alt="Credit Card Logos" title="Credit Card Logos" src="http://www.credit-card-logos.com/images/multiple_credit-card-logos-2/credit_card_logos_42.gif" width="220" height="40" border="0" class = "mt-2" /></a></li>
          </ul>
        </div>
      </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
