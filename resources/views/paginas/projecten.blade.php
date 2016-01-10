
@extends("app")

@section("header")
    <link rel="stylesheet" href="css/projecten.css">
    <script type="text/javascript" src="js/projecten.js"></script>
@stop

@section("content")

    <div id="pagina1">
        <div class="row header">
            <div class="col-sm-7">
                <a href="{{ url("/") }}"><img src="images/logo_hoek.png" alt="logo" /></a>
            </div>
            <div class="col-sm-5">
                @include("partials.menu")
            </div>
        </div>

        <div id="achtergrond">
            <div id="nav2">
                <ul>
                    <li><a class="menu2 huidig" id="pagina1link" href="">Top</a></li>
                    <li><a class="menu2" id="pagina2link" href="">Led Cube</a></li>
                    <li><a class="menu2" id="pagina3link" href="">Thermostaat</a></li>
                    <li><a class="menu2" id="pagina4link" href="">Hdd-Clock</a></li>
                    <li><a class="menu2" id="pagina5link" href="">Thermo Website</a></li>
                    <li><a class="menu2" id="pagina6link" href="">Websites</a></li>
                </ul>
            </div>
            <img src="images/achtergrond2.png" alt="achtergrond"/>
        </div>
    </div>

    <div id="pagina2" class="pagina grijs">
        <img src="images/cube.png" alt="led cube">
        <div class="inhoud">
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

    </div>

    <div id="pagina3" class="pagina wit">
        <img src="images/thermostaat.png" alt="thermostaat">
        <div class="inhoud">
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
    </div>



    <div id="pagina4" class="pagina grijs">
        <img src="images/clock.png" alt="pov-clock">
        <div class="inhoud">
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
    </div>

    <div id="pagina5" class="pagina wit">
        <img src="images/website-thermo.png" alt="website thermostaat"/>

        <div class="inhoud">
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
    </div>

    <div id="pagina6" class="pagina grijs">
        <div class="inhoud">
            <h1>Websites</h1>

            <p>
                Samen met mijn vriendin heb ik verschillende websites gemaakt voor famillie en vrienden die een eigen zaak hebben en nood hadden aan een goede website.
            </p>
            <br/>
            <A HREF="http://click-design.tk/" class="grijs">Click-design</A>
        </div>
    </div>

@stop