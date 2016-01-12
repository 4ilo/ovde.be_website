
@extends("app")

@section("titel","Ovde - Contact")

@section("header")
    <link rel="stylesheet" href="{{ asset("css/contact.css") }}">
    <script type="text/javascript" src="{{ asset("js/contact.js") }}"></script>
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
        <div class="col-sm-4 text-right contact">
            <img alt="contact" src="{{ asset("images/contact.png") }}">
        </div>

        <div class="col-sm-4">

            <div id="formulier">
                <p id="verplicht">
                    @if(session()->has("flash_message"))
                        <span>{{ session("flash_message") }}</span>
                    @else
                    Velden met een <span>*</span> zijn verplicht.
                    @endif
                    </p><br/>
                <form action="{{ url("mail") }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p>
                        Naam:<span>*</span> <br/>
                        <input type="text" required name="naam" id="naam" onchange="check()" placeholder="Naam" />
                        &nbsp;<span id="errorN">Geef uw naam op.</span>
                    </p>

                    <p>
                        Email:<span>*</span> <br/>
                        <input type="text" required name="email" id="email" onchange="check()" placeholder="Email" />
                        &nbsp;<span id="errorE">Geef uw Email juist in.</span>
                    </p>

                    <p>
                        Vraag:<span>*</span>&nbsp;<span id="errorV">Geef een vraag op.</span> <br/>
                        <textarea rows="5" required cols="40" name ="vraag" id="vraag" onchange="check()"></textarea>

                    </p>

                    <input id="knop" class="knoppen" name="verzenden" type="button" value="Verzenden" onclick="controleer()" />
                    <input class="knoppen" type="button" onclick="leeg()" value="Leegmaken" />
                </form>
            </div>
        </div>


    </div>

@stop