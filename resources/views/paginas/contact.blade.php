@extends("app")

@section("titel","Ovde - Contact")

@section("header")
    <script src='https://www.google.com/recaptcha/api.js'></script>
@stop

@section("bodyAttr")
    id="contact"
@stop

@section("content")
    <div class="row header">
        <div class="col-sm-7">
            <a class="left" href="{{ url("/") }}"><img class="img-responsive" src="{{ asset("images/logo_hoek.png") }}" alt="logo" /></a>
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
                    Required fields <span>*</span>.
                    @endif
                    </p><br/>
                <form action="{{ url("mail") }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p>
                        Name:<span>*</span> <br/>
                        <input type="text" required name="naam" id="naam" onchange="check()" placeholder="Name" />
                        &nbsp;<span id="errorN">Your name is required.</span>
                    </p>

                    <p>
                        Email:<span>*</span> <br/>
                        <input type="text" required name="email" id="email" onchange="check()" placeholder="Email" />
                        &nbsp;<span id="errorE">Your Email is required.</span>
                    </p>

                    <p>
                        Vraag:<span>*</span>&nbsp;<span id="errorV">Your question.</span> <br/>
                        <textarea rows="5" required cols="40" name ="vraag" id="vraag" onchange="check()"></textarea>

                    </p>

                    <div class="g-recaptcha" data-sitekey="{{ env("RE_CAP_SITE") }}"></div>

                    <input id="knop" class="knoppen" name="verzenden" type="submit" value="Send" />
                </form>
            </div>
        </div>


    </div>

@stop
