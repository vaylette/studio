@extends('layouts/layout')

@section('content')

<div id="content" class="no-top no-bottom" data-bgimage="url(images/background/services.jpg)" data-stellar-background-ratio=".2">
  <div class="overlay-bg t50 no-bottom">

<section id="subheader" class="dark no-top no-bottom">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <h1>Portfolio</h1>
          </div>
      </div>
  </div>
</section>
  <div id="subheader" class="button">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('photos')"> Photos</button>
      <button class="btn" onclick="filterSelection('videos')"> Videos</button>
      <button class="btn" onclick="filterSelection('animations')"> Animations</button>
    </div>
    
<!-- Portfolio Gallery Grid -->
<section>
  <div class="container">
  <div class="row">
    
    <!-- <div class="column col-md-4 photos">
      <div class="content">

      <img src="/images/services/b.jpg" alt="Lights">
      

      </div>
    </div>
    <div class="column col-md-4 photos">
      <div class="content">
     
      <img src="/images/services/c.jpg" alt="Nature">
       
      </div>
    </div> -->
    <div class="video-container">
    <div class="column col-md-4 animations videos">
      <div class="content">
      <button class="active"></button>
        <div class="video"> <video src="video/2.mp4" muted></video></div>
     
      </div>
    </div>

                                  <script>
                                    document.querySelectorAll('.video-container video').forEach(vid => {
                                    
                                      vid.onclick = () => {
                                        document.querySelector('.pop-upvideo').style.display = 'block';
                                        document.querySelector('.pop-upvideo video').src = vid.getAttribute('src');
                                      }
                                     
                                    });
                            
                                    document.querySelector('.pop-upvideo span').onclick = () =>{
                                      document.querySelector('.pop-upvideo').style.display = 'none';
                                    }
                                  </script>

                    <!-- Button script -->
                    <script>
                     $( document ).ready(function() {
                      var ctrlVideo = document.getElementById("video"); 
                      
                      $('buttons').click(function(){
                        if ($('buttons').hasClass("active")){
                          
                              ctrlVideo.play();
                          
                          $('buttons').html("Pause");
                          $('buttons').toggleClass("active");
                        } else {
                          
                              ctrlVideo.pause();
                          
                          $('buttons').html("play");
                          $('buttons').toggleClass("active");
                        }
                        });
                        
                        });
                      </script>
                            
  <!-- END MAIN -->
  <script src="{{ asset('js/scripts.js') }}"></script>
@endsection