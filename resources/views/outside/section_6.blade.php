
<section class="trade-securely" id="video-section" style="display: none; background-image: none !important;">
  <div class="card card--white col-12" style="max-width: 100% !important;text-align: initial;padding: 0;">
    <video id="video-free" type="video/mp4" playsinline 
        controls="controls" controlsList="nodownload" 
        src="{{Vite::asset('resources/videos/1.mp4')}}" width="100%" poster="{{Vite::asset('resources/images/poster.png')}}">
      Tu navegador no admite el elemento <code>video</code>.
      </video>
      <div class="detail-video">
        <a style="margin-right: 2%;" href="#courses"><button onClick="cerrar()" class="btn btn--accent" >
          <span class="text--standart text--medium">Cerrar</span>
        </button></a> 
        <div class="detail-text">
          <h4 id="title-video" class="title-video"></h4>
          <span id="description-video"></span>
        </div>
      </div>
      
  </div>
</section>
<script>
    function cerrar(){
      $("#video-section").css('display', 'none');
    }
    function colocarVideoFree(num, titulo, description) {
      console.log(description)
        $("#video-section").css('display', 'block');
        $("#title-video").html(titulo);
        $("#description-video").html(description);
        document.getElementById('video-free').setAttribute('src', `{{Vite::asset('resources/videos/')}}${num}.mp4`);
    }
</script>