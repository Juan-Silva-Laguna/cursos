<section class="testimonials" id="testimonials">

<div class="slider mt-5 mb-5">

<h2 class="text--primary text-center" >Testimonios   </h2>
    <div class="slide">
      <div class="testimonial">
        <blockquote>“{{$testimonios[0]['descripcion']}}”</blockquote>
        <p class="author">{{$testimonios[0]['name']}}
          <div class="container" style="width: 300px">
            <div class="row">
            @for ($i = 0; $i < 5; $i++)
                @if($i < $testimonios[0]['satisfacion'])
                <div class="col-md-2"><img class="image" src="{{Vite::asset('resources/images/ok.png')}}" alt="estrella"></div>
                @else
                <div class="col-md-2"><img class="image" src="{{Vite::asset('resources/images/nook.png')}}" alt="estrella"></div>
                @endif
            @endfor
            </div>
          </div>
        </p>
      </div>

      <div class="slider-img">
        <img src="{{Vite::asset('resources/images/image-tanya.jpeg')}}" alt="Author Image">
      </div>

    </div>
    <div class="slide">
      <div class="testimonial">
      <blockquote>“{{$testimonios[1]['descripcion']}}”</blockquote>
        <p class="author">{{$testimonios[1]['name']}}
        <div class="container" style="width: 300px">
            <div class="row">
            @for ($i = 0; $i < 5; $i++)
                @if($i < $testimonios[1]['satisfacion'])
                <div class="col-md-2"><img class="image" src="{{Vite::asset('resources/images/ok.png')}}" alt="estrella"></div>
                @else
                <div class="col-md-2"><img class="image" src="{{Vite::asset('resources/images/nook.png')}}" alt="estrella"></div>
                @endif
            @endfor
            </div>
        </div>
        </p>
      </div>

      <div class="slider-img">
        <img src="{{Vite::asset('resources/images/image-john.jpeg')}}" alt="Author Image">
      </div>

    </div>
    <div class="slide">
      <div class="testimonial">
      <blockquote>“{{$testimonios[2]['descripcion']}}”</blockquote>
        <p class="author">{{$testimonios[2]['name']}}
        <div class="container" style="width: 300px">
            <div class="row">
            @for ($i = 0; $i < 5; $i++)
                @if($i < $testimonios[2]['satisfacion'])
                <div class="col-md-2"><img class="image" src="{{Vite::asset('resources/images/ok.png')}}" alt="estrella"></div>
                @else
                <div class="col-md-2"><img class="image" src="{{Vite::asset('resources/images/nook.png')}}" alt="estrella"></div>
                @endif
            @endfor
            </div>
        </div>
        </p>
      </div>

      <div class="slider-img">
        <img src="{{Vite::asset('resources/images/image-juan.jpeg')}}" alt="Author Image">
      </div>

    </div>
    <div class="buttons">
      <div class="previous"></div>
      <div class="next"></div>
    </div>
</div>
</section>
