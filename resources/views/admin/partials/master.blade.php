<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ovde - Admin</title>

    <!-- Latest compiled and minified CSS -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    @yield("header")
</head>
<body>
<div class="container-fluid">

    @yield("content")

    {{--Scripts--}}
    @yield("script")
</div>
</body>
</html>