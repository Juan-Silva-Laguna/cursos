<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts ICON ASOWEMO -->
    <script src="https://kit.fontawesome.com/2d4451ea4e.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    @vite(['resources/sass/_dashboard.scss'])
    @vite(['resources/js/bootstrap.js'])
    <!-- Scripts -->
</head>
<body>
     <div id="dashboard">
            @include('inside.layouts.header')
            @yield('dashboard')
            @include('inside.layouts.footer')
    </div>
</body>
</html>
