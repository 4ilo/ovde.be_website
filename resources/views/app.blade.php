<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield("titel")</title>
    
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <script src="{{ asset("js/jquery.js") }}"></script>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>

    @yield("header")

</head>
<body class="home" @yield("bodyAttr")>

    <div class="container-fluid">
        @yield("content")
        
    </div>

</body>
</html>