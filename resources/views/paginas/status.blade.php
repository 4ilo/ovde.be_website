@extends("app")

@section("titel","Ovde - Status")

@section("header")
    <link rel="stylesheet" href="{{ asset("css/over.css") }}">
@stop

@section("content")
    <div class="row header">
        <div class="col-sm-7">
            <a href="{{ url("/") }}"><img src="{{ asset("images/logo_hoek.png") }}" alt="logo"/></a>
        </div>
        <div class="col-sm-5">
            @include("partials.menu")
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-3">
            <h1>Server status:</h1>
            <div class="deel">
                Ram:
                <div class="progress">
                    <div class="progress-bar {{ $vps->statusColor("ram") }} progress-bar-striped active"
                         role="progressbar"
                         aria-valuenow="{{ $vps->ramUsage() }}" aria-valuemin="0" aria-valuemax="100"
                         style="width: {{ $vps->ramUsage() }}%">
                        {{ $vps->ramUsage() }}%
                    </div>
                </div>
            </div>

            <div class="deel">
                Cpu:
                <div class="progress">
                    <div class="progress-bar {{ $vps->statusColor("cpu") }} progress-bar-striped active"
                         role="progressbar"
                         aria-valuenow="{{ $vps->cpuUsage() }}" aria-valuemin="0" aria-valuemax="100"
                         style="width:{{ $vps->cpuUsage() }}%">
                        {{ $vps->cpuUsage() }}%
                    </div>
                </div>
            </div>

            <div class="deel">
                Hdd:
                <div class="progress">
                    <div class="progress-bar {{ $vps->statusColor("hdd") }} progress-bar-striped active"
                         role="progressbar"
                         aria-valuenow="{{ $vps->hddUsage() }}" aria-valuemin="0" aria-valuemax="100"
                         style="width:{{ $vps->hddUsage() }}%">
                        {{ $vps->hddUsage() }}%
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop