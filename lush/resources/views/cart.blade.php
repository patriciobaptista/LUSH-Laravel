@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/cart.css') }}">
    <title>Carrito</title>
  </head>
  <body>
    <?php

      if(isset($_GET["deleteid"])){
        $key=array_search($_GET['deleteid'],$_SESSION['cart']);
          if($key!==false){
            unset($_SESSION["cart"][$key]);
          }
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
        unset($_GET["deleteid"]);
      }

    ?>

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

            <?php
                if(isset($_SESSION["cart"]) && count($_SESSION["cart"]) !== 0){

            $total= 0;
            for ($i=0; $i < count($_SESSION["cart"]); $i++) {
            $product_id = $_SESSION["cart"][$i];
            $query = $db->query("SELECT *
              FROM products
              WHERE id = '$product_id'");
            $products[] = $query->fetch(PDO::FETCH_ASSOC);
            $total = $total + $products[$i]["price"];

          }


              foreach ($products as $product){

                $photid = $product["id"];
                $qphoto = $db->query("SELECT *
                  FROM images_product
                  WHERE id_product = '$photid'");

                $photos = $qphoto->fetch(PDO::FETCH_ASSOC);

              ?>

            <div class="detalle mt-3">
                <img src="../trips/img/<?=$photos["name"]?>" alt="<?=$product["destination"]?>">
                <form class="" action="carrito.php" method="post">
                  <ul>
                    <li class="product-name mb-2"><?=$product["destination"]?></li>
                    <li class="description">Precio:$<?=$product["price"]?></li>
                    <li class="description">Cantidad: 1</li>
                    <a href="carrito.php?deleteid=<?=$product["id"]?>" class="btn btn-primary">eliminar producto</a>
                    </ul>

            </div>
          <?php } ?>
          </div>
            <div class="total col-12 col-m-6 col-lg-6">
              <h2>subtotal</h2>
              <p>$<?=$total?></p>
              <button class="btn btn-primary" type="button" name="button">Confirmar Compra</button>
            </div>
              <div class="vacio">
                <?php
              }else{?>
                  <h1>Su carrito esta vacio</h1>
                  <a href="/destinos" class="btn btn-primary">Volver a productos</a>
              <?php }
                ?>
              </div>
          </form>
        </div>
      </main>
    </body>
@endsection
