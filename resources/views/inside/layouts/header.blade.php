
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Curso <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Clientes por Activar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mis Clientes Activos</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Testimonios</a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn--accent text--small text--medium" type="submit">Salir</button>
      </form>
    </ul>
  </div>
</nav>