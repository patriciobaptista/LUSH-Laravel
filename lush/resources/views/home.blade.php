@extends('layout')

@section('main')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">LUSH LUXURY TRAVEl</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ya estas logueado, clickea aqui para volver al sitio

                </div>
                <button class"btn btn-primary" type="button" name="button"><a href="/lush">Volver</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
