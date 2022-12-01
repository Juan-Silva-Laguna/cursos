
<section class="container" id="video-section" style="margin-bottom: 8%; display: none;">
  <div class="card card--white col-12" style="max-width: 100% !important;text-align: initial;padding: 0;">
    <video id="video-free" type="video/mp4" playsinline 
        controls="controls" controlsList="nodownload" 
        src="{{Vite::asset('resources/videos/1.mp4')}}" width="100%" autoplay poster="{{Vite::asset('resources/images/logo.png')}}">
      Tu navegador no admite el elemento <code>video</code>.
      </video>
      <div class="detail-video">
        <a href="#courses" style="width: 10%; float-right"><button onClick="cerrar()" class="btn btn--accent" >
          <span class="text--standart text--medium">Cerrar</span>
        </button></a> 
        <h3 id="title-video"></h3>
      </div>
      
  </div>
</section>
<script>
    function cerrar(){
      $("#video-section").css('display', 'none');
    }
    function colocarVideoFree(num, titulo) {
        $("#video-section").css('display', 'block');
        $("#title-video").html(titulo);
        document.getElementById('video-free').setAttribute('src', `{{Vite::asset('resources/videos/')}}${num}.mp4`);
    }
</script>