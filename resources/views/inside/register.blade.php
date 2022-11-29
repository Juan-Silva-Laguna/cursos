@extends('outside.layouts.body')

@section('content')
    <div class="slide"></div>
    </div>
      <div class="previous"></div>
      <div class="next"></div>
    </div>

    <h1>{{ $mensaje }}</h1>
    <a href="https://wa.me/57{{ $celular }}">click aquí</a>
    
    <form action="{{ route('registrar') }}" method="POST" accept-charset="UTF-8">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input name="codigo" type="hidden" value="{{ $codigo }}"/>
        <label for="nombre">Nombre:</label>
        <input name="nombre" type="text" value=""/>
        <label for="celular">celular:</label>
        +57<input name="celular" type="text" value=""/>
        <label for="correo">correo:</label>
        <input name="correo" type="text" value=""/>
        <label for="clave">Contraseña:</label>
        <input name="clave" type="text" value=""/>
        <button type="submit">Send</button>
    </form>
@endsection

