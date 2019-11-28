@extends("app")

@section("titel","Ovde - About Me")

@section("header")
    {{-- <link rel="stylesheet" href="css/over.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
@stop

@section("bodyAttr")
    id="over"
@stop

@section("content")
    <div class="row header">
        <div class="col-sm-7">
            <a href="{{ url("/") }}"><img class="img-responsive" src="{{ asset("images/logo_hoek.png") }}" alt="logo"/></a>
        </div>
        <div class="col-sm-5">
            @include("partials.menu")
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1>About Olivier</h1>
            <p>
                I am Olivier Van den Eede (4ilo), a Industrial Engineer in electronics-ICT graduated from the KU Leuven on Campus de Nayer.

                </br>
                I work as embedded Linux engineer at Nalys. Nalys is specialized in embedded consultancy.
            </p>

            <br>
            <br>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <span class="fa fa-github logo-small"></span>
                    <a href="https://github.com/4ilo"><h4>Find me on Github</h4></a>
                </div>
            </div>
        </div>
    </div>

@stop
