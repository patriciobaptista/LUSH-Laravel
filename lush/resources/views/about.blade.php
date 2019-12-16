@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/about.css') }}">
    <title>LUSH - About us</title>
  </head>
    <body>
    <main id="main" class="container">
      <div class="row">
        <div class="col-12 text-center pt-5 mt-5">
          <h1>about us</h1>
          </div>
          <div id="feature" class="feature_divider">
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="feature_divider_small">
          </div>
         </div>
         <div class="row">
           <article class="texto col-12 text-center">
             <h2>our history</h2>
             <div class="feature_divider_small">
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </article>
          </div>
          <div class="feature_divider_small">
          </div>
          <div class="row">
            <article class="texto col-12 text-center">
              <h2>our team</h2>
              <div class="feature_divider_small">
              </div>
            </article>
          </div>
          <div class="team row">
            <div class="col-12 col-md-12 col-lg-6 text-center">
              <img class="imagen" src="{{asset('/storage/pato.png')}}" alt="foto">
              <h3>Patricio Baptista</h3>
              <div class="feature_divider_small">
              </div>
              <p>Marketing Director</p>
            </div>
            <div class="col-12 col-md-12 col-lg-6 text-center">
              <img class="imagen" src="{{asset('storage/leo.png')}}" alt="foto">
              <h3>Leo Bagiu</h3>
              <div class="feature_divider_small">
              </div>
              <p>Product Manager</p>
            </div>
            <div class="feature_divider_small">
            </div>
           </div>
           <div class="row">
             <article class="texto col-12 text-center">
               <h2>our mission</h2>
               <div class="feature_divider_small">
               </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             </article>
            </div>
      </main>
    </body>
@endsection
