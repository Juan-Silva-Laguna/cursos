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
                        <p for="descripcion" class="input-p" >Descripción</p>
                        <textarea class="input-field" id="descripcion" name="descripcion" required cols="5" rows="4"></textarea>
                        <br><br>
                        <label class="input-label" >Satisfación</label>
                        <input type="range" max="5" min="1" name="satisfacion" id="satisfacion" required>
                        <b id="viewSatisfacion"></b>
                    <br><br>
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
         
        <table class="table mt-4">
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
           @if(count($testimonios) == 0)
            <span>No se encontraron registros</span>
            @endif
                
    </div>
    <script>
        $(document).ready(function()
		{
            $('#satisfacion').change(function() {
                $('#viewSatisfacion').html($(this).val());
            });
        });
    </script>
@endsection

