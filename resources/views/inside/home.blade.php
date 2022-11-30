@extends('inside.layouts.body')
@section('dashboard')
<section class="container mt-5" >
      <div class="row" >
        <div class="col-6">
             <video id="myVideo" type="video/mp4" playsinline controls="controls" controlsList="nodownload" src="{{Vite::asset('resources/videos/')}}{{ Auth::user()->videos_vistos }}.mp4" width="90%" autoplay poster="{{Vite::asset('resources/images/section_mobile_illu.webp')}}">
            Tu navegador no admite el elemento <code>video</code>.
            </video>
        </div>
       
        <div class="col-6">
        
            <h2>Curso Traider de 0 a Experto</h2>
            <ul>
                <li>Introduccion
                    <ul>
                        <li style="cursor: pointer" onClick="colocarVideo(0)">Bienvenida {{ (Auth::user()->videos_vistos==0 ? " - Reproduciendo -": (Auth::user()->videos_vistos>0?" - Terminado - ": "")) }}</li>
                        <li style="cursor: pointer" onClick="colocarVideo(1)">Herramientad {{ (Auth::user()->videos_vistos==1 ? " - Reproduciendo -": (Auth::user()->videos_vistos>1?" - Terminado - ": "")) }}</li>
                    </ul>
                </li>
                <li>Bolsa de valores
                    <ul>
                        <li style="cursor: pointer" onClick="colocarVideo(2)">que es? {{ (Auth::user()->videos_vistos==2 ? " - Reproduciendo -": (Auth::user()->videos_vistos>2?" - Terminado - ": "")) }}</li>
                        <li style="cursor: pointer" onClick="colocarVideo(3)">Como operar? {{ (Auth::user()->videos_vistos==3 ? " - Reproduciendo -": (Auth::user()->videos_vistos>3?" - Terminado - ": "")) }}</li>
                    </ul>
                </li>
                <li>Tipos de operaciones
                    <ul>
                        <li style="cursor: pointer" onClick="colocarVideo(4)">A corto plazo {{ (Auth::user()->videos_vistos==4 ? " - Reproduciendo -": (Auth::user()->videos_vistos>4?" - Terminado - ": "")) }}</li>
                        <li style="cursor: pointer" onClick="colocarVideo(5)">A medio plazo {{ (Auth::user()->videos_vistos==5 ? " - Reproduciendo -": (Auth::user()->videos_vistos>5?" - Terminado - ": "")) }}</li>
                        <li style="cursor: pointer" onClick="colocarVideo(6)">A largo plazo {{ (Auth::user()->videos_vistos==6 ? " - Reproduciendo -": (Auth::user()->videos_vistos>6?" - Terminado - ": "")) }}</li>
                    </ul>
                </li>
                </ul>
        </div>
      </div>
</section>
<script>
        document.getElementById('myVideo').onended = function(e) {
        alert("termino video");
        let video = document.getElementById('myVideo').getAttribute('src');
        let partes = video.split('/videos/');
        let numVideo = partes[1].split('.mp4');
        numVideo = Number(numVideo[0]);
        let top = {{ Auth::user()->videos_vistos }};
        if (numVideo == top) {
            location.href = '{{ route("videos_update") }}';   
        }
    };

    function colocarVideo(num) {
        let top = {{ Auth::user()->videos_vistos }};
        if (num > top) {
            alert("Aun te falta desbloquear algunos videos");
            return;
        }
        document.getElementById('myVideo').setAttribute('src', `{{Vite::asset('resources/videos/')}}${num}.mp4`);
    }
</script>
@endsection
