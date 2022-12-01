
<div class="grid bg-dark" style="border-bottom: 1px solid #3f3f3f ">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
  <a class="navbar-brand" href="#"> <b> ELITE <span style="color: #FFB801">ACADEMY</span>  </b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Cursos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/usuarios/0">Clientes por Activar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/usuarios/1">Mis Clientes Activos</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/testimonios">Testimonios</a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn--accent text--small text--medium" type="submit">Salir</button>
      </form>
    </ul>
  </div>
</nav>
</div>
