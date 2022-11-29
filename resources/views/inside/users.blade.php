@extends('inside.layouts.body')
@section('content')
<section class="why-elite">
      <div class="grid grid--1x1 grid--centered">
        <h1>{{$titulo}}</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Whatsap</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->celular}}</th>
                    <th> <a href="https://wa.me/57{$user->name}}">click aquí</a></th>
                </tr>
            @endforeach
                
            </tbody>
        </table>
      </div>
      <img class="background-item-3" src="{{Vite::asset('resources/images/background-item-3.svg')}}" alt="" />
      <img class="background-item-4" src="{{Vite::asset('resources/images/background-item-4.svg')}}" alt="" />
      <img class="background-item-5" src="{{Vite::asset('resources/images/background-item-5.svg')}}" alt="" />
</section>
<div class="slide"></div>
    </div>
      <div class="previous"></div>
      <div class="next"></div>
    </div>
    
@endsection
