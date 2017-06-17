@extends("admin.partials.master")

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.solution.partials.menu")
        </div>

        <div class="col-sm-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $solution->titel }}
                    {!! $solution->tag->getLabel() !!}
                    <a href="/solution/{{ $solution->id }}/edit">
                        <span class="glyphicon glyphicon-edit pull-right"></span>
                    </a>
                </div>
                <div class="panel-body">{!! $solution->getHtmlInhoud() !!}</div>
            </div>
        </div>
    </div>

@stop