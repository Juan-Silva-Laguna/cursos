@extends('inside.layouts.body')
@section('dashboard')

<div class="container  bg-dark">
    <div class="row">
    <div class="col-6">    
        <main class="main" style="overflow: hidden">
        <img class="background-item-1" style="position: absolute; height: 100% !important;" src="{{Vite::asset('resources/images/background-item-1.svg')}}" alt="" />
        <div class="container" style="position: relative;">
            <section class="wrapper">
                <div class="heading">
                    <h1 class="text text-large">Crear Testimonio</h1>
                </div>
                <form class="form" action="{{ route('testimonios_save') }}" method="POST" accept-charset="UTF-8">
                   <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="input-control">
                        <label for="descripcion" class="input-label" hidden>Descripción</label>
                        <input class="input-field" placeholder="Descripción" id="descripcion" type="text" class="form-control" name="descripcion" required>
                    </div>
                    <div class="input-control">
                        <label for="password" class="input-label" hidden>Satisfación</label>
                        <input class="input-field" placeholder="Satisfación" id="satisfacion" type="number"  min="1" max="5" class="form-control" name="satisfacion" required>
                    </div>
                    <div class="input-control">
                        <input type="submit" name="submit" class="input-submit" value="Guardar">
                    </div>
                </form>
            </section>
        </div>
    </main>
    </div>
    <div class="col-6 mt-5">
         <h1>{{ $mensaje }}</h1>
        <div class="card-title">
             <h5 class="m-0"><b> TESTIMONIOS </b></h5>
        </div>
         
        <table id="testimonio_table" class="table mt-4">
            <thead>
                <tr>
                    <th>Testimonio</th>
                    <th>Usuario</th>
                    <th>Nivel Satisfacion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($testimonios as $test)
                <tr>
                    <th>{{$test->descripcion}}</th>
                    <th>{{$test->name}}</th>
                    <th>{{$test->satisfacion}}</th>
                    <th><a target="_blank" href="https://wa.me/57{{ $test->celular }}">Click Aquí</a></th>
                </tr>
            @endforeach
                
            </tbody>
        </table>                
    </div>
<script>
  $(document).ready( function () {
    $('#testimonio_table').DataTable({
        language: spanish(),
        searching: false,
        bLengthChange: false
    });
} );
</script>
@endsection


