@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/faq.css') }}">
    <title>LUSH - FAQ</title>
  </head>
  <body class="body">

  <main id="main" class="container-fluid" style="background-image: url({{asset('/storage/bora.jpg')}})">
  <section class="container">
    <div class="row pt-5">
      <div class="col-12 text-center title pt-5">
        <h1>Preguntas Frecuentes</h1>
        <div class="feature_divider mt-3">
        </div>
      </div>
    </div>
    <button type="button" class="collapsible mt-3 mb-2"><h2>¿Cuales son las formas de Pago?</h2></button>
    <div class="content">
      <p>Las compras podrán abonarse con tarjeta de crédito, depósito bancario o transferencia electrónica a través de la web o bien en cualquiera de nuestras sucursales. Luego de elegir el paquete correspondiente, se te informarán las opciones para que realices el pago con tu tarjeta de crédito de forma fácil y segura. En caso de realizar la compra a través de Ventas Telefónicas o en una de Nuestras Sucursales, la misma podrá ser realizada en efectivo o con cualquiera de los medios de pagos mencionados anteriormente.</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>¿Como puedo cancelar mi reserva?</h2></button>
    <div class="content">
      <p>La cancelación de las reservas realizadas podrán hacerse por medio fehaciente. Dicha cancelación queda sujeta a lo establecido en el ítem cancelaciones, dentro de las Condiciones Generales de Contratación..</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>¿Que documentacion debo llevar para viajar al exterior?</h2></button>
    <div class="content">
      <p>En la web oficial de MIGRACIONES puede conocer cuales son los documentos válidos para viajes en el exterior.</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>¿En que momento recibo mi voucher?</h2></button>
    <div class="content">
      <p>Los voucher estan disponibles aproximadamente una semana antes de la fecha de Salida del viaje. Pueden ser retirados personalmente en nuestras oficinas o solicitar el envio del mismo
        por mail.</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>¿Los menores de edad abonan la misma tarifa?</h2></button>
    <div class="content">
      <p>Los menores de 2 años no abonan y no tienen servicio. Con 2 años cumplidos abonan la totalidad del tour. Se toma como referencia ela fecha de salida del viaje.</p>
    </div>
    <button type="button" class="collapsible mb-2"><h2>¿Se puede elegir la ubicacion del avion/bus?</h2></button>
    <div class="content">
      <p>No otorgamos numeros de butacas y ubicacion predestinada. El asiento lo otorga el coordinador en el momento de subir al bus. De todas maneras tratamos de tener en cuenta los requerimientos<br>
        de nuestros pasajeros en el armado de la taquilla.</p>
    </div>
    <button type="button" class="collapsible mb-3"><h2>¿Las comidas en el viaje estan incluidas?</h2></button>
    <div class="content mb-3">
      <p>Las comidas en el viaje no están incluidas dentro del paquete. En el viaje se realizan paradas en paradores turisticos donde brindan el servicio de comidas ya sea para desayuno, almuerzo o cena.</p>
    </div>
  </section>
  </main>

  <script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
  }
  </script>
  </body>
  @endsection
