<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jquery/jquery-3.6.1.slim.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jquery/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jquery/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fontawesome/41b4cd8ba8.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>

@yield('content')

</body>
</html>