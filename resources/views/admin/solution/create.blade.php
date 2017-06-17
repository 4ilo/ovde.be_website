@extends("admin.partials.master")

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.solution.partials.menu")
        </div>

        <div class="col-sm-7">
            @include("admin.partials.errors")
            <form method="POST" action="/solution">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="titel">Titel:</label>
                    <input type="text" class="form-control" value="{{ old("titel") }}" name="titel" id="titel">
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <select class="form-control" name="tag_id" id="tag" value="{{ old("tag_id") }}">
                        <option value="0">Kies een tag</option>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea class="form-control" name="body" rows="10" id="body">{{ old("body") }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Opslaan</button>
            </form>
        </div>
    </div>

@stop