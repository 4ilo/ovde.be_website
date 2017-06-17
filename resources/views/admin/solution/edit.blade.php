@extends("admin.partials.master")

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.solution.partials.menu")
        </div>

        <div class="col-sm-7">
            @include("admin.partials.errors")
            <form method="POST" action="/solution/{{ $solution->id }}">
                {{ csrf_field() }}
                {{ method_field("PATCH") }}
                <div class="form-group">
                    <label for="titel">Titel:</label>
                    <input type="text" class="form-control" value="{{ $solution->titel }}" name="titel" id="titel">
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea class="form-control" name="body" rows="10" id="body">{{ $solution->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Wijzigen</button>
            </form>
        </div>
    </div>

@stop