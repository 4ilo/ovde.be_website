
@extends("app")

@section("titel","Ovde - 503")

@section("header")
    <link rel="stylesheet" href="{{ asset("css/over.css") }}">
@stop

@section("content")
    <div class="row header">
        <div class="col-sm-7">
            <a href="{{ url("/") }}"><img class="img-responsive" src="{{ asset("images/logo_hoek.png") }}" alt="logo" /></a>
        </div>
        <div class="col-sm-5">
            @include("partials.menu")
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1>403 - Toegang niet toegestaan</h1>
            <p>
                De pagina die u heeft opgevraagd verboden.<br/>
                Indien deze melding na een link komt contacteer dan de beheerder.
            </p>
        </div>
    </div>

@stop