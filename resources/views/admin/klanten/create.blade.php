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
            <h3>Klant toevoegen:</h3>
            <form action="/klant" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="naam">Naam:</label>
                    <input type="text" class="form-control" name="naam" id="naam" value="{{ old("naam") }}" />
                </div>
                <div class="form-group">
                    <label for="adres">Adres:</label>
                    <textarea class="form-control" rows="5" name="adres" id="adres">{{ old("adres") }}</textarea>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" name="reputatie" value="true">Opnieuw bezoeken</label>
                </div>

                <button type="submit" class="btn btn-primary">Opslaan</button>
            </form>
        </div>
    </div>

@stop