@extends("admin.partials.master")

@section("header")
    <style>
        .red {
            color: red;
        }
        .inline {
            display: inline;
        }
    </style>
@stop

@section("content")
    <h1>Ovde.be</h1>

    <div class="row">
        <div class="col-sm-3">
            @include("admin.klanten.partials.menu")
        </div>

        <div class="col-sm-7">
            @include("admin.partials.errors")
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $klant->naam }}
                    <a href="/klant/{{ $klant->id }}/edit">
                        <span class="glyphicon glyphicon-edit pull-right"></span>
                    </a>
                </div>
                <div class="panel-body">{{ $klant->adres }}</div>
            </div>

            <Password value="{{ $klant->password }}"></Password>

            <h3>Afspraken:</h3>
            <?php \Carbon\Carbon::setLocale("nl") ?>
            @forelse($klant->afspraken as $afspraak)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $afspraak->datum->format("d/m/Y") }}
                        <span class="pull-right">{{ $afspraak->datum->diffForHumans() }}</span>
                    </div>
                    <div class="panel-body">
                        <form action="/klant/{{ $klant->id }}/afspraak/{{ $afspraak->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field("DELETE") }}
                            <button class="btn-link inline pull-right" type="submit"><span class="glyphicon glyphicon-remove red"></span></button>
                        </form>
                        {{ $afspraak->opmerkingen }}
                    </div>
                </div>
            @empty
                <p>Nog geen afspraken geregistreerd.</p>
            @endforelse

            <a href="/klant/{{ $klant->id }}/afspraak/create" class="btn btn-success">Afspraak toevoegen</a>
        </div>
    </div>

@stop