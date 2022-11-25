@extends('layouts/layout')

@section('content')

     <!-- content begin -->
         <div id="content" class="no-top no-bottom" data-bgimage="url(images/background/4.jpg)" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50 no-bottom">
             <!-- subheader -->
              <section id="subheader" class="dark no-top no-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Videography</h1>
                            </div>
                        </div>
                   
                </section>
            <!-- subheader close -->
            <section aria-label="section-services">
                  <div class="container">
                       <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <p>Video is one of the ways that today's audience absorb information, whether it'll be for entertainment, learning, or advertising. 
                                 We use videos to tell a story, at the same time connecting and captivating the audience.
                             
                             </p>
                         </div>
                          </div>
                         <div class="spacer-single"></div>
                                  
                                    <!--end item-->
                   <div class="video-container">
                                   
                               <div class="video"> <button class="active play-button"></button><video poster="images/slider/a.jpg" src="video/1.mp4" muted ></video></div>

                                  
                                      <div class="video"> <button class="active play-button"></button><video src="video/2.mp4" muted></video></div>
                                   
                                      <div class="video"> <button class="active play-button"></button><video src="video/3.mp4" muted></video></div>
                                   
                                      <div class="video"> <button class="active play-button"></button> <video src="video/4.mp4" muted></video></div>
                                      <div class="video"> <button class="active play-button"></button><video src="video/5.mp4" muted></video></div>
                                   
                                      <div class="video"> <button class="active play-button"></button> <video src="video/6.mp4" muted></video></div>
                                    </div>
                                  <div class="pop-upvideo">
                                    <span>&times;</span>
                                    <video src="video/1.mp4" muted autoplay controls></video>
                              
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
                            
									
                            </div>

            
                            </div>

                        </div>
                      </div>
                 </div>
                </section>
            </div>
        </div>
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
        <!-- content close -->
@endsection
