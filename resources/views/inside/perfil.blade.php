@extends('inside.layouts.body')
@section('dashboard')

<div class="container  bg-dark">
    <div class="row">
    <div class="col-12">    
        <main class="main" style="overflow: hidden">
        <img class="background-item-1" style="position: absolute; height: 100% !important;" src="{{Vite::asset('resources/images/background-item-1.svg')}}" alt="" />
        <div class="col-6 mt-5">
            <div class="card-title">
                <h5 class="m-0"><b> MI PERFIL </b></h5>
            </div>   
        </div>
        <div class="container" style="position: relative;">
            <div class="row">
                <div class="col-md-4">
                    <section class="wrapper">
                        <div class="heading">
                            <h1 class="text text-large">LIDER: {{$patrocinador['codigo']}}</h1>
                        </div>
                        <form class="form">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="input-control">
                                <label for="descripcion" class="input-label" hidden>Nombre</label>
                                <input class="input-field" value="{{$patrocinador['name']}}" disabled>
                            </div>
                            <div class="input-control">
                                <label for="descripcion" class="input-label" hidden>Correo</label>
                                <input class="input-field" value="{{$patrocinador['email']}}"  disabled>
                            </div>
                            <div class="input-control">
                                <label for="descripcion" class="input-label" hidden>Celular</label>
                                <input class="input-field" value="{{$patrocinador['celular']}}"  disabled>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="wrapper">
                        <div class="heading">
                            <h1 class="text text-large">MI CODIGO: {{$users['codigo']}}</h1>
                        </div>
                        <form class="form" action="{{ route('actualizar_datos') }}" method="POST" accept-charset="UTF-8">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="input-control">
                                <label for="descripcion" class="input-label" hidden>Nombre</label>
                                <input class="input-field" placeholder="Descripción" id="nombre" type="text" value="{{$users['name']}}" name="nombre" required>
                            </div>
                            <div class="input-control">
                                <label for="descripcion" class="input-label" hidden>Correo</label>
                                <input class="input-field" placeholder="Descripción" id="correo" type="text" value="{{$users['email']}}" name="correo" required>
                            </div>
                            <div class="input-control">
                                <label for="descripcion" class="input-label" hidden>Celular</label>
                                <input class="input-field" placeholder="Descripción" id="celular" type="number" value="{{$users['celular']}}" name="celular" required>
                            </div>
                            <div class="input-control">
                                <input type="submit" name="submit" class="input-submit" value="ACTUALIZAR">
                            </div>
                        </form>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="wrapper">
                        <div class="heading">
                            <h1 class="text text-large">CAMBIAR CLAVE</h1>
                        </div>
                        <form class="form" action="{{ route('cambiar_clave') }}" method="POST" accept-charset="UTF-8">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="input-control">
                                <label for="descripcion" class="input-label" hidden>Nueva clave</label>
                                <input class="input-field" placeholder="Clave" type="password" name="clave" required>
                            </div>
                            <div class="input-control">
                                <input type="submit" name="submit" class="input-submit" value="CAMBIAR">
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>
    </div>
    
@endsection

