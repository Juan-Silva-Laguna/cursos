

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
    @vite(['resources/sass/_login.scss'])
    <!-- Scripts -->
</head>
<body>
    <div id="app">
            
    <main class="main" style="overflow: hidden">
        <img class="background-item-1" style="position: absolute; height: 100% !important;" src="{{Vite::asset('resources/images/background-item-1.svg')}}" alt="" />
        <div class="container" style="position: relative;">
            <section class="wrapper">
                <div class="heading">
                    <h1 class="text text-large">Iniciar Sesión</h1>
                    <p class="text text-normal">Nueva cuenta? <span><a href="/registrar/1234" class="text text-links">Crear cuenta</a></span>
                    </p>
                </div>
                  <p>{{ $mensaje }}</p>
                  <div class="input-control">
                      <a  href="https://wa.me/57{{ $celular }}" class="text text-links">Whatsapp</a>
                      <input type="submit" name="submit" class="input-submit" value="Ingresar">
                  </div>
                 <form name="signin" class="form"action="{{ route('registrar') }}" method="POST" accept-charset="UTF-8">
                  @csrf
                    <div class="input-control">
                        <label for="nombre" class="input-label" hidden>Nombre</label>
                        <input class="input-field" placeholder="Nombre" id="nombre" type="text" name="nombre" required>
                    </div>
                    <div class="input-control">
                        <label for="celular" class="input-label" hidden>Celular</label>
                        <input class="input-field" placeholder="Celular" id="celular" type="text" name="celular" required>
                    </div>
                    <div class="input-control">
                        <label for="correo" class="input-label" hidden>Correo electronico</label>
                        <input class="input-field" placeholder="Correo electronico" id="nombre" type="email" name="correo" required>
                    </div>
                    <div class="input-control">
                        <label for="clave" class="input-label" hidden>Contraseña</label>
                        <input class="input-field" placeholder="Nombre" id="clave" type="password" name="clave" required>
                    </div>
                    <div class="input-control">
                        <label for="password" class="input-label" hidden>Contraseña</label>
                        <input class="input-field" placeholder="Nombre" id="nombre" type="text" name="nombre" required>
                    </div>
                    <div class="input-control">
                        <a href="/" class="text text-links">Volver</a>
                        <input type="submit" name="submit" class="input-submit" value="Ingresar">
                    </div>
                </form>
            </section>
        </div>
    </main>
</div>
</body>
</html>

