@extends("app")

@section("titel","Ovde - Projecten")

@section("header")
    
@stop

@section("bodyAttr")
    {{--data-spy="scroll" data-target="#myScrollspy" data-offset="125"--}}
    id="projecten"
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
                <li class="link"><a href="#top">Top</a></li>
                <li class="link"><a href="#cube">Led Cube</a></li>
                <li class="link"><a href="#thermostaat">Thermostaat</a></li>
                <li class="link"><a href="#hdd">Hdd-Clock</a></li>
                <li class="link"><a href="#thermo">Thermo Website</a></li>
                <li class="link"><a href="#websites">Websites</a></li>
                <li class="link"><a href="#serialwrite">Serial Write</a></li>
                <li class="link"><a href="#jukebox">Wireless-Jukebox</a></li>
                <li class="link"><a href="#bachelorproef">Bachelorproef</a></li>
                <li class="link"><a href="#komfortkost">KomfortKost</a></li>
                <li>
                    <a target="_blank" href="https://www.vultr.com/?ref=7159849">
                        <img src="https://www.vultr.com/media/banner_3.png" width="200">
                    </a>
                </li>
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
                        <A HREF="/contact" class="grijs">Vraag voor voorbeelden</A>
                    </div>
                </div>
            </div>
            <div id="serialwrite">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>SerialWrite V1.1</h1>
                        <p>
                            Door het ontbreken aan een programma om seriele communicatie te kunnen doen met mijn embedded projecten
                            heb ik zelf een Qt-programma geschreven dat voldoet aan mijn normen.
                        </p>
                        <ul>
                            <li>- StandAlone</li>
                            <li>- Universeel (windows/mac)</li>
                            <li>- Eenvoudige configuratie</li>
                            <li>- input veld met geschiedenis (up/down-key)</li>
                            <li>- Print hele lijnen in 1 keer</li>
                        </ul>
                        <br/>
                        <a href="https://github.com/4ilo/serialWrite" target="_blank" class="grijs">Github repo</a><br/>
                        <A HREF="/documenten/serialwrite/serialWrite v1.1.dmg" class="grijs">Mac</A><br/>
                        <A HREF="/documenten/serialwrite/SerialWriteSetup v1.1.exe" class="grijs">Windows</A>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset("/images/serialwrite.png") }}" class="img-responsive" alt="serialWrite">
                    </div>
                </div>
            </div>

            <div id="jukebox">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Wireless-Jukebox</h1>
                        <p>
                            Voor het 2de jaar van mijn studie Embedded-Ict heb ik een project gemaakt, namelijk de wireless-jukebox.<br/>
                            Dit is een module die aan een stereo installatie gekoppeld wordt in een ruimte waar zich een aantal mensen bevinden. Als deze mensen verbonden zijn met het wifi netwerk, kunnen ze naar een website op de wireless jukebox surfen en daar stemmen op het liedje dat als volgend afgespeeld zal worden. <br/>

                            De module maakt gebruik van een μc met een sdio interface voor de communicatie met een sd-kaart waarop alle liedjes opstaan. De module is met een wifi netwerk verbonden via een esp-8266 wifi module waarop ook de website draait.
                            Voor het afspelen van muziek wordt er gebruik gemaakt van een PWM output die verbonden is aan een jack-connector.
                        </p>
                        <ul>
                            <li>- Stand Alone</li>
                            <li>- Sd-kaart</li>
                            <li>- Esp8266 webserver</li>
                            <li>- Stm32F4 microcontroller</li>
                            <li>- Custom pcb</li>
                        </ul>
                        <br/>
                        <a href="https://github.com/4ilo/Wireless-Jukebox" target="_blank" class="grijs">Github repo</a><br/>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset("/images/jukebox.png") }}" class="img-responsive" alt="Wireless-Jukebox">
                    </div>
                </div>
            </div>

            <div id="bachelorproef">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Iot in gebouwenautomatisatie</h1>
                        <p>
                            In dit werkstuk gaan we onderzoeken wat de mogelijkheden zijn van “Internet Of
                            things” in de gebouwenautomatisatie.
                        </p>
                        <p>
                            De integratie van IoT in combinatie met domotica kan heel wat voordelen bieden, denk
                            maar aan het sturen van elektrische apparaten afhankelijk van over/onder productie
                            van elektriciteit. Of het automatisch bedienen van uw huis via een gsm of zelfs via
                            voice control of Siri. Het zou zelfs mogelijk moeten zijn om te detecteren of mensen
                            thuis zijn, en op basis van deze informatie het huis anders te bedienen.
                        </p>
                        <p>
                            Voor dit onderzoek zal er ook een praktische realisatie gemaakt worden die meerdere
                            van dit soort toepassingen mogelijk moet maken op hetzelfde platform. Het hele
                            platform zal gebaseerd zijn op een embedded Linux systeem dat communiceert met de
                            KNX domotica bus.
                        </p>
                        <ul>
                            <li>- Stand Alone</li>
                            <li>- Open source</li>
                            <li>- KNX uitbreidbaar via plugins</li>
                            <li>- Communicatie via UDP-sockets</li>
                            <li>- Verschillende programeertalen mogelijk</li>
                        </ul>
                        <br/>
                        <a href="https://github.com/4ilo/Bachelorproef_E-ICT" target="_blank" class="grijs">Github repo</a><br/>
                        <a href="https://github.com/4ilo/Bachelorproef_E-ICT/raw/master/Administratie/Scriptie/scriptie_Olivier_VandenEede_eict.pdf" target="_blank" class="grijs">Uitgebreide documentatie</a><br/>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset("/images/bachelorproef.jpg") }}" class="img-responsive" alt="Bachelorproef">
                    </div>
                </div>
            </div>

            <div id="komfortkost">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>KomfortKost webshop</h1>
                        <p>
                            In de zomer van 2017 heb ik mijn grootste webproject tot dan toe gemaakt.
                            Een volledig op maat gemaakte webshop die effectief in productie gebruikt wordt.
                        </p>
                        <p>
                            KomfortKost is een lokaal bedrijf dat huiselijk eten maakt tegen een betaalbare prijs.
                            Elke week kunnen klanten dag per dag eten bestellen en betalen via de webshop,
                            op het juiste tijdstip moeten ze dan hun versgemaakte bestelling afhalen.
                        </p>
                        <ul>
                            <li>- Nieuw design</li>
                            <li>- Volledig configureerbaar door de klant</li>
                            <li>- Gemaakt in in Laravel-PHP</li>
                            <li>- Betalingen via stripe</li>
                            <li>- Custom server opgezet bij Vultr</li>
                            <li>- Cloudflare DNS</li>
                        </ul>
                        <br/>
                        <a href="https://komfortkost.be" target="_blank" class="grijs">KomfortKost website</a><br/>
                        <a href="/contact" class="grijs">Source code op aanvraag</a>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset("/images/komfortkost.png") }}" class="img-responsive" alt="Bachelorproef">
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop

@section("script")
    <script src="{{ mix("js/projecten.js") }}"></script>
@stop