<!DOCTYPE html>
<html>

<head>
    <title> USTP EGAMES REG SITE </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/boostrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('mini_lib/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('mini_lib/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('mini_lib/css/hover.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mini_lib/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        @yield('content')
        <img src="{{ asset('img/lol.jpg') }}" class="w-100 img-fluid" />
    </div>

    <script src="{{ asset('mini_lib/js/jquery.min.js') }}"></script>
    <script src="{{ asset('mini_lib/js/bootstrap.min.js') }}"></script>
</body>

</html>
