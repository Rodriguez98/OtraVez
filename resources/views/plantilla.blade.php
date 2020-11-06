<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    @yield('menu',View::make('navegacion.menu'))
    <div class="container mt-3">
        @yield('contenido')
    </div>

    <script src="{{ asset('static/vendor/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('static/bootstrap/js/bootstrap.js') }}"></script>
</body>

</html>