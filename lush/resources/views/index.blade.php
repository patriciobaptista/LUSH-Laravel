@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/index.css') }}">
    <title>LUSH - Luxury Travel</title>
  </head>
  <body>
    <div id="video" class="container-fluid">
      <video autoplay muted loop id="myVideo">
      <source src="{{asset('/storage/videomp4.mp4')}}" type="video/mp4">
      </video>
    </div>
    <div class="icons row">
      <button id="switch" onclick="toggleTheme()">Switch</button>
      <div class="col-12 col-md-12 col-lg-4 text-center">
        <img class="imagen" src="{{asset('/storage/servicio.png')}}" alt="foto">
        <h2>servicio</h2>
        <div class="feature_divider">
        </div>
        <p>Paquetes disenados por nuestro equipo de especialistas para maximisar su disfrute, incluyendo vuelos, estadia, transfers y todos los tramites correspondientes.<br>"Leave it with us!"</p>
      </div>
      <div class="col-12 col-md-12 col-lg-4 text-center">
        <img class="imagen" src="{{asset('/storage/comfort.png')}}" alt="foto">
        <h2>comfort</h2>
        <div class="feature_divider">
        </div>
        <p>Hospedaje en resorts 5 y 6 estrellas en las locaciones mas exoticas y exclusivas alrededor del mundo, con paquetes personalizados para garantizar el maximo comfort ya sea en viajes de negocio, en pareja o familiares.<br>"Just sit back and relax!"</p>
      </div>
      <div class="col-12 col-md-12 col-lg-4 text-center">
        <img class="imagen" src="{{asset('/storage/exclusividad.png')}}" alt="foto">
        <h2>exclusividad</h2>
        <div class="feature_divider">
        </div>
        <p>Opcional para vuelos locales e internacionales en jets privados, accesso a excutive lounges en todos los aeropuertos, acceso VIP a los eventos mas exclusivos.<br>"Live like a king!"</p>
      </div>
    </div>
    <div id="destinations" class="container-fluid" style="background-image: url({{asset('/storage/pool.jpg')}})">
      <div class="row">
        <div class="boton col-12 button text-center">
            <h2>explora</h2>
            <p>Las locaciones mas exoticas del mundo</p>
            <button type="button" class="btn btn-light"><h1>Destinos</h1</button>
        </div>
      </div>
    </div>
    <script>
        // function to set a given theme/color-scheme
        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }
        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }
        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
            } else {
                setTheme('theme-light');
            }
        })();
    </script>
  </body>
@endsection
