<!-- Header-->
    <header class="header">
      
      <!-- Top Header -->
      <div class="header__top">
        <div class="logo">
          <span class="text text--medium">ELITE ACADEMY</span>
        </div>
        <nav>
          <ul class="list list--inline">
            <li class="list__item text text--small text--regular">Curso</li>
            <li class="list__item text text--small text--regular">Clientes por Activar</li>
            <li class="list__item text text--small text--regular">Mis Clientes Activos</li>
            <li class="list__item text text--small text--regular">Testimonios</li>
          </ul>
          <button class="btn btn--link text text--small text--medium">{{ Auth::user()->name }}</button>
          <span class="vertical-line"></span>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn--accent text--small text--medium" type="submit">Salir</button>
          </form>
        </nav>
      </div>
    </header>