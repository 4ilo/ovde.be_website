@extends("admin.partials.master")

@section("header")
    <style>
        .red {
            color: red;
        }
    </style>
@stop

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.solution.partials.menu")
        </div>

        <div class="col-sm-5">
            <h3>Tags:</h3>
            <ul class="list-group">
                @foreach($tags as $tag)
                    <li class="list-group-item">
                        {!! $tag->getLabel() !!}
                        <a href="/tag/{{ $tag->id }}/delete" class="red">
                            <span class="pull-right glyphicon glyphicon-remove"></span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@stop