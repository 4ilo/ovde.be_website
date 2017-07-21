<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield("titel")</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ mix("/css/app.css") }}">

    <script async type="text/javascript" src="{{ mix("js/projecten.js") }}"></script>
    <script async src="{{ mix("/js/app.js") }}"></script>

    @yield("header")

</head>
<body class="home" @yield("bodyAttr")>

    <div class="container-fluid">
        @yield("content")
        
    </div>

</body>
</html>
