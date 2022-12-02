 @php
   $team = [
    [
      "nombre" => 'Juan Murcia',
      "cargo" => 'Marketing y Emprendimiento', 
      "relato" => 'Necesitas ciertos conocimientos básicos financieros, brindo educacion especializada en el sector financiero y manejo de capital de inversion ayudandote a crecer con tu emprendimiento personal.',
      "telefono" => '3173781049',
      "imagen" => 'lider-1.png',
      "link" => "https://api.whatsapp.com/send?phone=573173781049&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"
    ],
    [
      "nombre" => 'Jhon Barrera', 
      "cargo" => 'Trader Binarias',  
      "relato" => 'Traider profesional con más de 4 años de experiencia en obciones Binarias especializado en la construcción en bases sólidas a la gestión y administración en los mercados financieros.',
      "telefono" => '3114972859',
      "imagen" => 'lider-2.png',
      "link" => "https://api.whatsapp.com/send?phone=573114972859&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"

    ],
    [
      "nombre" => 'Daniel Gonzalez',  
      "cargo" => 'Trader Binarias',
      "relato" => 'Con experiencia y habilidades  en el mundo del trading, especializado en Psicologia y  análisis de riesgo, con la toma de decisiones centrada en la creación de valor y la administración estratégica de portafolios de inversión.',
      "telefono" => '3132487859',
      "imagen" => 'lider-3.png',
      "link" => "https://api.whatsapp.com/send?phone=573132487859&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"
    ],
    [
      "nombre" => 'Cristian Quintero',  
      "cargo" => 'Trader Senior - Agente financiero',
      "relato" => 'Asesor financiero y trader senior que mediante un amplio historial en los mercados financieros  ha logrado crear  bases y un recorrido sólido para la edificación y expansión del trading.',
      "telefono" => '3053928060',
      "imagen" => 'lider-4.png',
      "link" => "https://api.whatsapp.com/send?phone=573053928060&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"
    ],
    [
      "nombre" => 'Juan Silva',  
      "cargo" => 'Director TIC',
      "relato" => 'A lo largo de mi trayectoria profesional he desarrollado habilidades esenciales en el sector tecnologico, sobre todo, en el desarrollo de software como tambien, pensamiento estratégico en estudio y analisis del traiding operacional.',
      "telefono" => '3112119638',
      "imagen" => 'lider-5.png',
      "link" => "https://api.whatsapp.com/send?phone=573112119638&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"
    ],
    [
      "nombre" => 'German Collazos',  
      "cargo" => 'Trader senior',
      "relato" => 'Asesor financiero y Trader Senior con capacidades  de trabajar con grupos grandes o pequeños y saber dirigirlos según su condición.  brindando conocimiento en las finanzas entorno a los mercados financieros.',
      "telefono" => '3115369543',
      "imagen" => 'lider-6.png',
      "link" => "https://api.whatsapp.com/send?phone=573115369543&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20como%20adquirir%20educaci%C3%B3n%20para%20conseguir%20la%20Rentabilidad%20en%20el%20Trading"
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
          Descubre ideas educativas con la educacion en el trading de opciones binarias con las herramientas y acompañamietno  más potente de la industria, que te ayudará a mejorar tus
operaciones y tu proceso de aprendizaje, ademas de esto obtendras
acceso a increíbles metodos de inversión que te
ayudarán en tu proceso de formacion para que sea mucho más eficiente
y completo.
          </p>
          <p class="banner__text text text--small text--regular text--muted">
          Nos enfocamos en formar personas  capaces de liderar y enseñar atraves de estrategias y analisis para la construcción de  bases solidas  ayudándolas a alcanzar sus sueños, y contribuir así a la edificación de un mundo mejor por medio del camino al exito (traiding).
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