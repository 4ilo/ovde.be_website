@extends("app")

@section("titel","Ovde - Login")

@section("header")
    <link rel="stylesheet" href="{{ asset("css/over.css") }}">
@stop

@section("content")
    <div class="row header">
        <div class="col-sm-7">
            <a href="{{ url("/") }}"><img class="img-responsive" src="{{ asset("images/logo_hoek.png") }}" alt="logo" /></a>
        </div>
        <div class="col-sm-5">
            @include("partials.menu")
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <h1>Login</h1>
            @include("admin.partials.errors")
            <form method="POST" action="/login">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="white" for="username">Usernaam:</label>
                    <input class="form-control" type="text" value="{{ old("username") }}" id="username" name="name" />
                </div>
                <div class="form-group">
                    <label class="white" for="password">Password:</label>
                    <input class="form-control" type="password" id="password" name="password" />
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>

@stop