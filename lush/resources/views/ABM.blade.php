@extends('layout')
@section('main')


  <div class="row pt-5">
    <div class="col-12 pt-5">
      <table style="width:100%" border="1">

        <tr>
           <th>ID</th>
           <th>Destination</th>
           <th>Description</th>
           <th>Price</th>
           <th>Stay Length</th>
           <th>Stock</th>
           <th></th>
           <th></th>
        </tr>

        <?php
        foreach ($products as $id => $producto) :

          ?>

          <tr>

          <?php foreach ($producto as $key => $value): ?>
            <td class="">

            <?=$value;?>

              </td>
          <?php endforeach;
          $id = $producto['id']?>


        <td>  <a href="editar.php?id=<?=$id?>"><i class="far fa-edit"></i></a></td>

        <td><a href="delete.php?id=<?=$id?>"><i class="far fa-trash-alt"></i></a></td>



        </tr>
      <?php endforeach; ?>
      </table>
        <a class="plus" href="add.php"><i class="fas fa-plus fa-2x"></i></a>
    </div>
  </div>






@endsection
