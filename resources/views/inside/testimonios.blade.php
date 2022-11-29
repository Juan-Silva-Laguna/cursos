@extends('outside.layouts.body')

@section('content')
    <div class="slide"></div>
    </div>
      <div class="previous"></div>
      <div class="next"></div>
    </div>

    <h1>{{ $mensaje }}</h1>
    
    
    <form action="{{ route('testimonios_save') }}" method="POST" accept-charset="UTF-8">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <label for="descripcion">descripcion:</label>
        <input name="descripcion" type="text" value=""/>
        <label for="satisfacion">satisfacion:</label>
        (5 estrellas o select)<input name="satisfacion" type="number" max="5" value=""/>
        <button type="submit">Send</button>
    </form>

    <table>
            <thead>
                <tr>
                    <th>Testimonio</th>
                    <th>Usuario</th>
                    <th>Nivel Satisfacion</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($testimonios as $test)
                <tr>
                    <th>{{$test->descripcion}}</th>
                    <th>{{$test->name}}</th>
                    <th>{{$test->satisfacion}}</th>
                    <th><a href="https://wa.me/57{{ $test->celular }}">click aquí</a></th>
                </tr>
            @endforeach
                
            </tbody>
        </table>
@endsection

