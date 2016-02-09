@extends("app")

@section("titel","Ovde - Projecten")

@section("header")
    <link rel="stylesheet" href="css/projecten.css">
    <script type="text/javascript" src="js/projecten.js"></script>
@stop

@section("bodyAttr")
    data-spy="scroll" data-target="#myScrollspy" data-offset="125"
@stop

@section("content")
    <div class="row header" id="top">
        <div class="col-sm-7">
            <a href="{{ url("/") }}"><img class="img-responsive" src="{{ asset("images/logo_hoek.png") }}" alt="logo"/></a>
        </div>
        <div class="col-sm-5">
            @include("partials.menu")
        </div>
    </div>
    <div class="row top">
        <nav class="col-sm-2" id="myScrollspy">
            <ul class="nav nav-pills nav-stacked" id="menu" data-spy="affix" data-offset-top="0">
                <li><a href="#top">Top</a></li>
                <li><a href="#cube">Led Cube</a></li>
                <li><a href="#thermostaat">Thermostaat</a></li>
                <li><a href="#hdd">Hdd-Clock</a></li>
                <li><a href="#thermo">Thermo Website</a></li>
                <li><a href="#websites">Websites</a></li>
            </ul>
        </nav>
        <div class="col-sm-10 inhoud">         <!-- vanaf hier komen de pagina's -->
            <div id="cube">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Led Cube</h1>
                        <p>
                            In het eerste jaar van mijn studies vlak na het eerste semester en de eerste examens, begon ik aan mijn eerste project. De led cube.
                            Specificaties:
                        </p>
                        <ul>
                            <li>- 4x4x4 monochroom(Groen)</li>
                            <li>- Microcontroller gebaseerd (Atmega328p)</li>
                            <li>- Geprogrameerd in embedded-C (Atmel Studio)</li>
                            <li>- Shift registers voor de led-output</li>
                            <li>- Dip-switch voor programmakeuze</li>
                        </ul>

                        <a HREF="documenten/cube/schema_cube.png" class="grijs" target="_blank">Schema</a><br/>
                        <a HREF="documenten/cube/LedCube-prog.zip" class="grijs" target="_blank">Programma</a> <br/>
                        <a HREF="documenten/cube/cube-fotos.zip" class="grijs" target="_blank">Foto's</a>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset("images/cube.png") }}" class="img-responsive" alt="led cube">
                    </div>
                </div>
            </div>

            <div id="thermostaat">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Thermostaat</h1>
                        <p>
                            Elk jaar op school moeten we een half jaar lang een project maken om te presenteren, in het eerste jaar is mijn projectkeuze
                            een thermostaat geworden. Een thermostaat om de temperatuur van mijn kamer te regelen met een draadloze temperatuursensor.
                            Het project bestaat uit 3 modules: De hoofdmodule voor de instellingen, de temp-sensor voor het meten v/d temperatuur en de ventiel-module die de verwarming in en uitschakeld. De 3 modules comuniceren draadloos met elkaar via Rf-modules.
                            Specificaties:
                        </p>
                        <ul>
                            <li>- werkt op 6-20v dc (Onboard 5v-regulator)</li>
                            <li>- Microcontroller gebaseerd (Atmega328p)</li>
                            <li>- Volledig automatische regeling van temp</li>
                            <li>- In te stellen via lcd-scherm, knoppen en draaiknop</li>
                            <li>- Draadloze temperatuursensor</li>
                        </ul>

                        <A HREF="documenten/thermo/schemas-thermo.zip" class="wit" target="_blank">Schema + pcb</A><br/>
                        <A HREF="documenten/thermo/thermo-prog.zip" class="wit" target="_blank">Programma's</A> <br/>
                        <A HREF="documenten/thermo/thermo-verslag.pdf" class="wit" target="_blank">Verslag</A> <br/>
                        <A HREF="documenten/thermo/thermo-foto.zip" target="_blank" class="wit">Foto's</A>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset("images/thermostaat.png") }}" class="img-responsive" alt="led cube">
                    </div>
                </div>
            </div>

            <div id="hdd">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Hdd-clock</h1>
                        <p>
                            Na het eerste jaar van mijn studies na de examens ben ik begonnen met het maken van een Pov-clock. Dit is werkt door de traagheid van het oog te gebruiken om een beeld te creeëren. Het concept is simpel, een oude hardeschijf heeft een nieuwe schijf met nummers uitgesneden gekregen. Door de juiste timing en ledjes wordt er een klok getoond bij het ronddraaien van de schijf.
                            Specificaties:
                        </p>
                        <ul>
                            <li>- Oude hardeschijf met originele motor</li>
                            <li>- Nieuwe motordriver</li>
                            <li>- Microcontroller gebaseerd</li>
                            <li>- Snelheidsmeting schijf met hall-sensor en magneet</li>
                            <li>- Rtc om het uur bij te houden</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset("images/clock.png") }}" class="img-responsive" alt="led cube">
                    </div>
                </div>
            </div>

            <div id="thermo">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Thermo website</h1>
                        <p>
                            Voor het vak Web-engeneering heb ik een website gemaakt i.v.m. mijn project de thermostaat. Deze website moest representeren wat we allemaal geleerd hadden. Het moest voldoen aan een aantal voorwaarden en een aantal javascripts bevatten die liefst zelf geschreven waren.
                            Specificaties:
                        </p>
                        <ul>
                            <li>- Slideshow op voorpagina</li>
                            <li>- Interactieve afbeeldingen</li>
                            <li>- Informatie over het project</li>
                            <li>- Maakt gebruik van cookies</li>
                            <li>- Werkend contact-formulier (Gecontroleerd)</li>
                        </ul>

                        <A HREF="documenten/thermo-site/Website-thermo.zip" class="wit" target="_blank">Website</A><br/>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset("images/website-thermo.png") }}" class="img-responsive" alt="led cube">
                    </div>
                </div>
            </div>

            <div id="websites">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Websites</h1>

                        <p>
                            Samen met mijn vriendin heb ik verschillende websites gemaakt voor famillie en vrienden die een eigen zaak hebben en nood hadden aan een goede website.
                        </p>
                        <br/>
                        <A HREF="http://click-design.tk/" class="grijs">Click-design</A>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop