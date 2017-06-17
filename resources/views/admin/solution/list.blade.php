@extends("admin.partials.master")

@section("header")
    <style>
        .smaller {
            width: 20%;
            margin-bottom: 20px;
        }
    </style>
@stop

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.solution.partials.menu")
        </div>

        <div class="col-sm-7">
            <form method="get" action="/solution" class="form-inline smaller">
                <select class="form-control" name="sort">
                    <option value="0">Tag</option>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-default">Sorteer</button>
            </form>
            <ul class="list-group">
                @forelse($solutions as $solution)
                    <li class="list-group-item">
                        <a href="/solution/{{ $solution->id }}">{{ $solution->titel }}</a>
                        {!! $solution->tag->getLabel() !!}
                    </li>
                @empty
                    <p>Geen solutions in deze categorie.</p>
                @endforelse
            </ul>
        </div>
    </div>

@stop