<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- Fonts ICON ASOWEMO -->
    <script src="https://kit.fontawesome.com/2d4451ea4e.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    @vite(['resources/js/app.js'])

    <!-- Rellax JS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
      integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
      crossorigin="anonymous"
    ></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Scripts -->
</head>
<body>
    <div id="app">
            @include('outside.layouts.header')
            @yield('content')
            @include('outside.layouts.footer')
    </div>
     <script>
      new Rellax(".btc-illustration", {
        horizontal: true,
      });
      new Rellax("#gpu-illustration", {
        horizontal: true,
      });
    </script>
</body>
</html>
