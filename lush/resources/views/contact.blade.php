@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/contact.css') }}">
    <title>Contacto</title>
  </head>
  <body>
    <main id="main" class="container-fluid">
      <section class="container pt-5">
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <h1 class="title">let's chat</h1>
              <div class="feature_divider mt-4">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6 pt-5">
            <div class="text p-5">
              <h1>Leave a message</h1>
              <p>We promise that we get every message sent through this form. We do our best to respond promptly, sometimes within the hour</p>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <div class="form pt-5">
              <form class="contact-form" action="index.html" method="post">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <label for="name">Name</label>
                    <br>
                    <input type="text" name="name" placeholder="Name"value="">
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <label for="message">email</label>
                    <br>
                    <input type="text" name="email" placeholder="email" value="">
                  </div>
                  <div class="col-12">
                    <label for="message">Message</label>
                    <textarea name="message" rows="8" cols="60" placeholder="Message"></textarea>
                    <button class="contact-submit mt-2" type="submit" name="button">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="map container-fluid mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d821.1588586500919!2d-58.42733617079159!3d-34.588090094708505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb587b49e0501%3A0x35f8478b0e0400fd!2sTemple%20Palermo!5e0!3m2!1sen!2sar!4v1574908017291!5m2!1sen!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <div class="our_home">
          <h1>our home</h1>
          <p>Nuestra casa es en Temple Palermo</p>
          <p>Costa Rica 4667, Palermo</p>
          <p>CABA, Buenos Aires, Argentina</p>
          <p>Tel: xxx xxxx xxxx</p>
          <p>email: lush@lush.com</p>
        </div>
      </section>
    </main>
  </body>
@endsection
