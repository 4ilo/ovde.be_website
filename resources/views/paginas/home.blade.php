
@extends("app")

@section("titel","Ovde - Home")

@section("content")
    <div class="row">
        <div class="col-sm-7"></div>
        <div class="col-sm-5">
            @include("partials.menu")
        </div>
    </div>
    <img class="img-responsive" id="logo_home" src="{{ asset("images/logo_home.png") }}" alt="logo"/>
@stop