 @php
   $team = [
    [
      "nombre" => 'Juan Murcia',
      "cargo" => 'Marketing y Emprendimiento', 
      "relato" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      "telefono" => '3173781049',
      "imagen" => 'lider-1.png',
      "link" => "https://api.whatsapp.com/send?phone=573173781049&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"
    ],
    [
      "nombre" => 'Jhon Barrera', 
      "cargo" => 'Trader Binarias',  
      "relato" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      "telefono" => '3114972859',
      "imagen" => 'lider-2.png',
      "link" => "https://api.whatsapp.com/send?phone=573114972859&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"

    ],
    [
      "nombre" => 'Otto Ramirez',  
      "cargo" => 'Trader Binarias',
      "relato" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      "telefono" => '3132487859',
      "imagen" => 'lider-3.png',
      "link" => "https://api.whatsapp.com/send?phone=573132487859&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"
    ]
    ];

   $team = collect($team)->shuffle();

 @endphp
 
 <!-- Features -->
    <section class="features" id="us">
      <h2>¿Quiénes somos?</h2>
      <div class="grid grid--1x2 grid--centered banner-bottom-margin">
         <div class="banner banner--left">
          <h2 class="banner__title">ELITE ACADEMY</h2>
          <p class="banner__text text text--small text--regular text--muted">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
            make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of 
            Lorem Ipsum.
          </p>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($team as $item)
                    <div class="swiper-slide">
                        <div class="img">
                         <img class="img-team" src="{{Vite::asset('resources/images/' . $item['imagen'])}}" alt="">
                        </div>
                        <div class="name">{{$item['nombre']}}</div>
                        <div class="title">{{$item['cargo']}}</div>
                        <div class="desc">{{$item['relato']}}</div>
                        <a href="{{$item['link']}}" target="_blank" rel="noopener noreferrer">
                        <button class="btn btn--accent">
                            <span class="text--standart text--medium">Contactar</span>
                        </button>
                        </a>
                    </div>  
                @endforeach
            </div>
        </div>
      </div>
    </section>