@extends("app")

@section("titel","Ovde - Over")

@section("header")
    <link rel="stylesheet" href="{{ asset("css/over.css") }}">
@stop

@section("content")
    <div class="row header">
        <div class="col-sm-7">
            <a href="{{ url("/") }}"><img src="{{ asset("images/logo_hoek.png") }}" alt="logo"/></a>
        </div>
        <div class="col-sm-5">
            @include("partials.menu")
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1>Over Olivier</h1>
            <p>
                Ik ben Olivier Van den Eede, student Electronica-ICT met optie embedded-ict
                aan ThomasMore Mechelen, op Campus De Nayer.<br>
                Voor mijn studie moet ik in deze praktische richting een groot aantal projecten maken voor
                verschillende vakken. Deze website dient als een klein portfolio om al deze en mijn prive projecten te
                bundenlen en bespreken.
            </p>

            <h2>Wat kan ik voor jou betekenen:</h2>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-cloud logo-small"></span>
                    <h4>Webdesign</h4>
                    <p>Kwaliteitsvol webdesign met HTML5,CSS3,javascript en jquery</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-wrench logo-small"></span>
                    <h4>Webdevelopment</h4>
                    <p>Krachtige webapps opgebouwd in het Laravel Php framework</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-phone logo-small"></span>
                    <h4>Simple embedded systems</h4>
                    <p>8-bit gebaseerde embedded systemen op maat</p>
                </div>
            </div>
            <br><br>
            <div class="row text-center onder">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-duplicate logo-small"></span>
                    <h4>Simple C/C++</h4>
                    <p>Command line tools</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-education logo-small"></span>
                    <h4>Professioneel</h4>
                    <p>Een professionele aanpak en continue scholing van de laatste nieuwe technieken</p>
                </div>
            </div>
        </div>
    </div>

@stop