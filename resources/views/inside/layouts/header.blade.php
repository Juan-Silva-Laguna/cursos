
<!-- Header-->
    <header class="header">
      <!-- Top Header -->
      <div class="header__top">
        <div class="logo">
          <img style="width:200px" src="{{Vite::asset('resources/images/logo.png')}}" alt="Elite academy logo" />
          <span class="text text--standart"><b> ELITE ACADEMY </b></span>
        </div>
        <nav>
          <ul class="list list--inline">
      <li class="nav-item active">
        <a class="nav-link" href="/home" style="padding: 1rem 1.3rem;"> Cursos <span class="sr-only">(current)</span></a>
      </li>
      @if( Auth::user()->activo != 0 )
      @if( Auth::user()->id < 6 )
      <li class="nav-item">
        <a class="nav-link" href="/usuarios/0">Clientes por Activar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/usuariosAll">Todos los Usuarios</a>
      </li>
      
      @endif
      <li class="nav-item">
        <a class="nav-link" href="/usuarios/1">Mis Clientes Activos</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/testimonios">Testimonios</a>
      </li>
      @endif
      <li class="nav-item"><a onClick="copiar('{{ Auth::user()->codigo }}')" class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801"><i class="fa fa-sharp fa-solid fa-link"></i> Copiar mi link</span> </a>      </li>
      <li class="nav-item"><a href="{{ route('perfil') }}" class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801"><i class="fa fa-sharp fa-solid fa-user"></i> {{ Auth::user()->name}}</span> </a>      </li>
      <form id="logout-form button-right" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801"><i class="fa fa-solid fa-sign-out"></i> Salir</span> </button>
      </form>
      </li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="pos-f-t p-3 d-sm-block d-md-none" >
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
           <ul class="list list--inline">
      <li class="nav-item active">
        <a class="nav-link" href="/home" style="padding: 1rem 1.3rem;"> Cursos <span class="sr-only">(current)</span></a>
      </li>
      @if( Auth::user()->activo != 0 )
      @if( Auth::user()->id < 6 )
      <li class="nav-item">
        <a class="nav-link" href="/usuarios/0" style="padding: 1rem 1.3rem;">Clientes por Activar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/usuariosAll" style="padding: 1rem 1.3rem;">Todos los Usuarios</a>
      </li>
      
      @endif
      <li class="nav-item">
        <a class="nav-link" href="/usuarios/1" style="padding: 1rem 1.3rem;">Mis Clientes Activos</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/testimonios" style="padding: 1rem 1.3rem;">Testimonios</a>
      </li>
      @endif
      <li class="nav-item"><a onClick="copiar('{{ Auth::user()->codigo }}')" class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801"><i class="fa fa-sharp fa-solid fa-link"></i> Copiar mi link</span> </a>      </li>
      <li class="nav-item"><a href="{{ route('perfil') }}" class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801"><i class="fa fa-sharp fa-solid fa-user"></i> {{ Auth::user()->name}}</span> </a>      </li>
      <form id="logout-form button-right" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801"><i class="fa fa-solid fa-sign-out"></i> Salir</span> </button>
      </form>
      </li>
          </ul>

        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
    </div>
<script>
  function copiar(code) {
    let link = "{{ route('registrar') }}/"+code ;
    var aux = document.createElement("input");
    aux.setAttribute("value", link);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
  }
</script>
