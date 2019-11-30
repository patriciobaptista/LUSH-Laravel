@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/destinations.css') }}">
    <title>Destinos</title>
  </head>
  <body>
      <div class="container-fluid backgroundphoto pb-3"> <!-- Foto de fondo arriba-->
        <div class="row photodad">
            <div id="centertext" class="text-center col-12">
              <h1 class="title">NUESTROS VIAJES</h1>
              <p class="undertitle">Cada viaje necesita un primer paso</p>
            </div>
        </div>
      </div>
    <main>
      <div class="container-fluid contphot pt-5">

      <section class="dad d-flex">

        <div class="row embodiment w-100">

          <?php foreach($trips as $number => $trip): ?>
          <div class="col-12 col-md-5 carouselparent">

        <div id="carouselhead<?=$number?>" class="carousel slide w-100" data-interval="0" data-ride="carousel"> <!-- First slideshow -->


              <ol class="carousel-indicators">
                <?php for ($i=0; $i <count($trip["image"]); $i++):
                $active = "";

                ?>

                <li data-target="#carouselhead<?=$number?>" data-slide-to="<?=$i?>" class="<?php if($i<1){$active="active";}  echo $active; ?>"></li>

              <?php  endfor; ?>
              </ol>
              <div class="carousel-inner">

                <?php for ($i=0; $i < count($trip["image"]); $i++):
                    $active="";

                      ?>

                    <div class="carousel-item <?php if($i<1){$active="active";}  echo $active; ?>">
                      <img class="img-thumbnail rounded d-block innerphoto" src="<?=$trip["image"][$i]?>" alt="Maldives<?=$i+1?>">
                    </div>

                  <?php  endfor; ?>

              </div>

                  <a class="carousel-control-prev" href="#carouselhead<?=$number?>" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselhead<?=$number?>" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
                </div>

                <div class="col-12 bottomtext py-3">

                  <h2 class="photoheader"><?=$trip["destination"]?></h2>
                    <p class=""> <?=$trip["description"]?></p>
                    <a href="<?=$trip["url"]?>"> VER MÁS </a>

                </div>
            </div>
          <?php endforeach; ?>




            </div>


      </section>

      </div>
    </main>
  </body>

@endsection
