
<div class="grid bg-dark" style="padding: 1%;border-bottom: 1px solid #3f3f3f">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
  <a class="navbar-brand" href="/"> <b> ELITE <span style="color: #FFB801">ACADEMY</span>  </b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/home"> Cursos <span class="sr-only">(current)</span></a>
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
      <li class="nav-item"><a onClick="copiar('{{ Auth::user()->codigo }}')" class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801">(icono copiar) copiar mi link</span> </a>      </li>
      <li class="nav-item"><a href="{{ route('perfil') }}" class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801">(icono user) {{ Auth::user()->name}}</span> </a>      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        (icono cerra sesion)
        <button class="btn text--small text--medium" style="" type="submit"><span style="color: #FFB801">Salir</span> </button>
      </form>
      </li>
       
    </ul>
  </div>
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
