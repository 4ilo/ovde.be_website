@extends("admin.partials.master")

@section("header")

@stop

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.klanten.partials.menu")
        </div>

        <div class="col-sm-7">
            <ul class="list-group">
                @foreach($klanten as $klant)
                    <li class="list-group-item">
                        <a href="/klant/{{ $klant->id }}">
                            {{ $klant->naam }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@stop