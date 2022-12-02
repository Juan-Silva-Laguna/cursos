@extends('inside.layouts.body')
@section('dashboard')
<div class="container  bg-dark">
    <div class="col-12 mt-5">
        <div class="card-title mb-4">
             <h5 class="m-0"><b> {{strtoupper($titulo)}}</b></h5>
        </div>      
        <table id="users_table" class="table mt-4">
            <thead>
                <tr>
                    <th class="text-center" >Nombre </th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Celular</th>
                    <th class="text-center">Whatsapp</th>
                    @if(Auth::user()->id < 6 )
                        <th class="text-center">Estado</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th class="text-center">{{$user->name}}</th>
                    <th class="text-center">{{$user->email}}</th>
                    <th class="text-center">{{$user->celular}}</th>
                    <th class="text-center"> <a href="https://wa.me/57{$user->name}}">Click Aquí</a></th>
                    @if( Auth::user()->id < 6 )
                        @if($user->activo==0)
                        <th class="text-center"> <a class="btn btn-danger" href="/activar/{{$user->id}}">Activar</a></th>
                        @else
                        <th class="text-center"> <a class="btn btn-success" href="inactivar/{{$user->id}}">Inactivar</a></th>
                        @endif
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
  $(document).ready( function () {
    $('#users_table').DataTable({
        language: spanish(),
        searching: false,
        bLengthChange: false
    });
} );
</script>
@endsection
