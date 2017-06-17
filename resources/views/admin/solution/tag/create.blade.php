@extends("admin.partials.master")

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.solution.partials.menu")
        </div>

        <div class="col-sm-5">
            @include("admin.partials.errors")
            <h3>Tag toevoegen:</h3>
            <form method="post" action="/tags">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Naam:</label>
                    <input type="text" name="name" id="name" value="{{ old("name") }}" class="form-control" />
                </div>
                <!-- Kleur input form -->
                <div class="form-group">
                    <label for="color">Kleur</label>
                    <input type="color" name="color" id="color" value="{{ old("color") }}" class="form-control" />
                </div>

                <button type="submit" class="btn btn-primary">Opslaan</button>
            </form>
    </div>

@stop