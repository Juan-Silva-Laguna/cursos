<!-- Header-->
    <header class="header">
      <!-- Top Header -->
      <div class="header__top">
        <div class="logo">
          <img style="width:200px" src="{{Vite::asset('resources/images/logo.png')}}" alt="Elite academy logo" />
          <span class="text text--medium"><b> ELITE ACADEMY </b></span>
        </div>
        <nav>
          <ul class="list list--inline">
            <a href="#plans"> <li class="list__item text text--small text--regular">Planes</li></a>
            <a href="#us"> <li class="list__item text text--small text--regular">Nosotros</li></a>
            <a href="#videos"> <li class="list__item text text--small text--regular">Aprende</li></a>
          </ul>
          @if( isset(Auth::user()->name) )
          <a href="/home"> <button class="btn btn--accent text--small text--medium">{{Auth::user()->name}}</button></a>
          @else
          <a href="/ingresar"><button class="btn btn--link text text--small text--medium">Iniciar sesión</button></a>
          <span class="vertical-line"></span>
         <a href="/registrar/KAX1KJA"> <button class="btn btn--accent text--small text--medium">Registrarse</button></a>
          @endif
         
        </nav>
      </div>
      @include('outside.section_1')
    </header>