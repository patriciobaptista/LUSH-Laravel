
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

    $displayAdmin = "display:none";
    $display=null;



     ?>

     <header id="header" class="container-fluid">
       <nav class="nav row pt-0 navbar-light bg-faded">
         <div class="col-2 col-md-2 col-lg-2" style="display:inline-block">
           <a href="/"><img class="logo-left pull-left ml-3" src="{{asset('/storage/logo-blanco.png')}}" style="display:inline-block"alt="logo"></a>
         </div>
         <div class="col-6 col-md-7 col-lg-6 text-center" style="display:inline-block">
           <ul class="mt-3">
             <li><a href="/nosotros">Nosotros</a></li>
             <li><a href="/faq">Preguntas Frecuentes</a></li>
             <li><a href="/destinos">Destinos</a></li>
             @guest
              @if (Route::has('register'))
             <li style=><a href="/register">Registro</a></li>
        <!-- <li style=<><a href="../admin/ABM.php"> Editar viajes </a></li> -->
              @endif
           </ul>
         </div>

         <div class="offset col-4 col-md-3 col-lg-4 pr-4 text-right" style="display:inline-block">
          <ul class="pl-0 mt-3 mb-0 pb-0">
            <li style="" ><a href="/login">Log in</a></li>
          </ul>
           @else
          <div id="dropdown-big" class="dropdown col-lg-4 text-right">
                   <a class="btn dropdown-toggle pr-2 pt-3 styledropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    bienvenido {{ Auth::user()->name }}
                   </a>

                   <div class="dropdown-menu" style="background-color: rgba(108, 108, 106, 0.5);" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item styledropdown" href="/perfil">Perfil</a>
                     <a class="dropdown-item" href="/carrito"><i class="fas fa-shopping-cart"></i></a>
                 <!--   <a style=""class="dropdown-item styledropdown" href="../admin/ABM.php">Editar viajes</a> -->
                     <a class="dropdown-item styledropdown" href="" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                       cerrar cesion</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                   </div>
             </div>
           @endguest
         </div>

       </nav>
       <div id="dropdown-small" class="dropdown">

           <div onclick="myFunction(this)" class="container1 btn btn-secondary dropdown-toggle pt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">


              <!-- AUTH   <a class="dropdown-item" href="../perfil/perfil.php">Perfil</a> -->

             <a class="dropdown-item styledropdown" href="/destinos">Destinos</a>
             <a style=""class="dropdown-item" href="/register">Registro</a>
             <a style="" class="dropdown-item" href="/login">Log in</a>
             <a class="dropdown-item" href="/carrito">Mi carrito</a>
            <!-- ADMIN MIDDLEWARE <a style=""class="dropdown-item styledropdown" href="../admin/ABM.php">Editar viajes</a> -->
             <a class="dropdown-item" href="/faq">Nosotros/FAQ</a>

                 <a style=""class="dropdown-item" href="../logout/logout.php"> Cerrar Sesion </a>

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
