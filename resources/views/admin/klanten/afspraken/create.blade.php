@extends("admin.partials.master")

@section("header")

@stop

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.klanten.partials.menu")
        </div>

        <div class="col-sm-5">
            @include("admin.partials.errors")
            <h3>Afspraak met <a href="/klant/{{ $klant->id }}">{{ $klant->naam }}</a> toevoegen:</h3>
            <form action="/klant/{{ $klant->id }}/afspraak" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="datum">Datum:</label>
                    <input type="text" class="form-control" name="datum" id="datum" value="{{ \Carbon\Carbon::now()->format("d/m/Y") }}"/>
                </div>
                <div class="form-group">
                    <label for="opmerkingen">Opmerkingen:</label>
                    <textarea class="form-control" rows="5" name="opmerkingen" id="opmerkingen">{{ old("opmerkingen") }}</textarea>
                </div>

                <div class="form-group">
                    <label for="tijd">Gewerkte tijd:</label>
                    <input type="number" id="tijd" step="0.5" name="tijd" value="1" class="form-control" />
                </div>

                <button type="submit" class="btn btn-primary">Opslaan</button>
            </form>
        </div>
    </div>

@stop
