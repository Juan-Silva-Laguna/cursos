@extends('inside.layouts.body')
@section('dashboard')
<section class="row bg-dark" >
      <div class="row" >
        <div class="col-8 p-0">
             <video id="myVideo" type="video/mp4" playsinline 
             controls="controls" controlsList="nodownload" 
             src="{{Vite::asset('resources/videos/')}}{{ Auth::user()->videos_vistos }}.mp4" width="100%" autoplay poster="{{Vite::asset('resources/images/logo.png')}}">
            Tu navegador no admite el elemento <code>video</code>.
            </video>
            <div id="welcome" class="col-12 p-4">
                <h6><b> Curso Traider de 0 a Experto</b></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <span class="badge bg-secondary">Emprendimiento</span>
                <span class="badge bg-secondary">Traiding</span>
                <span class="badge bg-secondary">Liderazgo</span>
            </div>
            <div id="detail-0" style="display: none" class="col-12 p-4">
                <h6><b> Bienvenida</b></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <span class="badge bg-secondary">Emprendimiento</span>
                <span class="badge bg-secondary">Traiding</span>
                <span class="badge bg-secondary">Liderazgo</span>
            </div>
            <div id="detail-1" style="display: none" class="col-12 p-4">
                <h6><b> Herramientas</b></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <span class="badge bg-secondary">Emprendimiento</span>
                <span class="badge bg-secondary">Traiding</span>
                <span class="badge bg-secondary">Liderazgo</span>
            </div>
            <div id="detail-2" style="display: none" class="col-12 p-4">
                <h6><b> que es?</b></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <span class="badge bg-secondary">Emprendimiento</span>
                <span class="badge bg-secondary">Traiding</span>
                <span class="badge bg-secondary">Liderazgo</span>
            </div>
            <div id="detail-3" style="display: none" class="col-12 p-4">
                <h6><b> Como operar?</b></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <span class="badge bg-secondary">Emprendimiento</span>
                <span class="badge bg-secondary">Traiding</span>
                <span class="badge bg-secondary">Liderazgo</span>
            </div>
            <div id="detail-4" style="display: none" class="col-12 p-4">
                <h6><b> A corto plazo?</b></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <span class="badge bg-secondary">Emprendimiento</span>
                <span class="badge bg-secondary">Traiding</span>
                <span class="badge bg-secondary">Liderazgo</span>
            </div>
            <div id="detail-5" style="display: none" class="col-12 p-4">
                <h6><b> A mediano plazo?</b></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <span class="badge bg-secondary">Emprendimiento</span>
                <span class="badge bg-secondary">Traiding</span>
                <span class="badge bg-secondary">Liderazgo</span>
            </div>
            <div id="detail-6" style="display: none" class="col-12 p-4">
                <h6><b> A largo plazo?</b></h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <span class="badge bg-secondary">Emprendimiento</span>
                <span class="badge bg-secondary">Traiding</span>
                <span class="badge bg-secondary">Liderazgo</span>
            </div>
        </div>
       
        <div hidden class="col-6" >
        
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
        <div class="col-4 p-0" style="border-left:1px solid #000">
            <div class="accordion accordion-flush" id="accordionFlushExample">  
                <div class="col-12 p-3 bg-dark" style="border-bottom: 1px solid #000">
                     <h4>Curso Traider de 0 a Experto</h4>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Introduccion
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="#" onClick="colocarVideo(0)" id="list-video-0" class="list-group-item list-group-item-action">Bienvenida 
                                @if (Auth::user()->videos_vistos==0) <i class="fa fa-play-circle" style="float: right" aria-hidden="true"></i> @endif
                                @if (Auth::user()->videos_vistos > 0) <i class="fa fa-check-circle" style="float: right" aria-hidden="true"></i> @endif
                            <a href="#" onClick="colocarVideo(1)" id="list-video-1" class="list-group-item list-group-item-action">Herramientas
                                @if (Auth::user()->videos_vistos==1) <i class="fa fa-play-circle" style="float: right" aria-hidden="true"></i> @endif
                                @if (Auth::user()->videos_vistos > 1) <i class="fa fa-check-circle" style="float: right" aria-hidden="true"></i> @endif
                            </a>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Bolsa de valores
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="#" onClick="colocarVideo(2)" id="list-video-2" class="list-group-item list-group-item-action">que es?
                                @if (Auth::user()->videos_vistos==2) <i class="fa fa-play-circle" style="float: right" aria-hidden="true"></i> @endif
                                 @if (Auth::user()->videos_vistos > 2) <i class="fa fa-check-circle" style="float: right" aria-hidden="true"></i> @endif
                            </a>
                            <a href="#" onClick="colocarVideo(3)" id="list-video-3" class="list-group-item list-group-item-action">Como operar?
                                @if (Auth::user()->videos_vistos==3) <i class="fa fa-play-circle" style="float: right" aria-hidden="true"></i> @endif
                                 @if (Auth::user()->videos_vistos > 3) <i class="fa fa-check-circle" style="float: right" aria-hidden="true"></i> @endif
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Tipos de operaciones
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="list-group">
                            <a href="#" onClick="colocarVideo(4)" id="list-video-4" class="list-group-item list-group-item-action">A corto plazo
                                @if (Auth::user()->videos_vistos==4) <i class="fa fa-play-circle" style="float: right" aria-hidden="true"></i> @endif
                                 @if (Auth::user()->videos_vistos > 4) <i class="fa fa-check-circle" style="float: right" aria-hidden="true"></i> @endif
                            </a>
                            <a href="#" onClick="colocarVideo(5)" id="list-video-5" class="list-group-item list-group-item-action">A mediano plazo
                                @if (Auth::user()->videos_vistos==5) <i class="fa fa-play-circle" style="float: right" aria-hidden="true"></i> @endif
                                 @if (Auth::user()->videos_vistos > 5) <i class="fa fa-check-circle" style="float: right" aria-hidden="true"></i> @endif
                            </a>
                            <a href="#" onClick="colocarVideo(6)" id="list-video-6" class="list-group-item list-group-item-action">A largo plazo
                                @if (Auth::user()->videos_vistos==6) <i class="fa fa-play-circle" style="float: right" aria-hidden="true"></i> @endif
                                 @if (Auth::user()->videos_vistos > 6) <i class="fa fa-check-circle" style="float: right" aria-hidden="true"></i> @endif
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>
<script>
    let lastVideo = null
    init()

    function init(){
      let = currentVideo = "{{ Auth::user()->videos_vistos }}"
      $("#welcome").css('display', 'none');
      $("#detail-" + currentVideo).css('display', 'block');
      $("#list-video-" + currentVideo).addClass("active");
    }

    document.getElementById('myVideo').onended = function(e) {

        let video = document.getElementById('myVideo').getAttribute('src');
        let partes = video.split('/videos/');
        let numVideo = partes[1].split('.mp4');
        console.log(numVideo[0])
        numVideo = Number(numVideo[0]);
        let top = {{ Auth::user()->videos_vistos }};
        if (numVideo == top) {
            Toastify({
                    text: "Video completado!",
                    className: "info",
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    },
            }).showToast();
            setTimeout(() => {
                location.href = '{{ route("videos_update") }}'
            }, 3000); 
        }
    };

    function colocarVideo(num) {
        let top = {{ Auth::user()->videos_vistos }};
        if (num > top) {
            Toastify({
                    text: "Aun te falta desbloquear algunos videos",
                    className: "error",
                    style: {
                        background: "linear-gradient(to right, #8d1414, #643d3d)",
                    },
            }).showToast();
            return;
        }
        $("#welcome").css('display', 'none');
        $("#detail-" + num).css('display', 'block');
        $("#list-video-" + num).addClass("active");
        $("#list-video-" + lastVideo).removeClass("active");
        if(lastVideo != null) {
            $("#detail-" + lastVideo).css('display', 'none');
            $("#list-video-" + lastVideo).removeClass("active");
        }
        lastVideo = num
        document.getElementById('myVideo').setAttribute('src', `{{Vite::asset('resources/videos/')}}${num}.mp4`);
    }
</script>
@endsection
