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
            <h3>Klant bijwerken:</h3>
            <form action="/klant/{{ $klant->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field("patch") }}

                <div class="form-group">
                    <label for="naam">Naam:</label>
                    <input type="text" class="form-control" name="naam" id="naam" value="{{ $klant->naam }}" />
                </div>
                <div class="form-group">
                    <label for="adres">Adres:</label>
                    <textarea class="form-control" rows="5" name="adres" id="adres">{{ $klant->adres }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Opslaan</button>
            </form>
        </div>
    </div>

@stop