<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/2d4451ea4e.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
</head>
<body>
    <div id="app">
            @include('inside.layouts.header')
            @yield('inside')
            @include('inside.layouts.footer')
    </div>
</body>
</html>
