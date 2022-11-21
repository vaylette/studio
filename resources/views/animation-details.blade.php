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
                                <h1>2D & 3D Animation</h1>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- subheader close -->
            <section aria-label="section-services">
                    <div class="container">
                       <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <p>Traditional animation, 2D Vector-based animation,
                                     3D computer animation Motion graphics and Stop motion.
                             </p>
                         </div>

                         <div class="spacer-single"></div>

                      
              <section id="subheader" class="dark no-top no-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="underline"><h2>Our Works</h2></span>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="video-container">
                    <div class="video"><video src="video/1.mp4" muted ></video></div>
            
                    <div class="video"> <video src="video/2.mp4" muted></video></div>
                 
                    <div class="video"> <video src="video/3.mp4" muted></video></div>
                 
                    <div class="video"> <video src="video/4.mp4" muted></video></div>
                    <div class="video"><video src="video/5.mp4" muted></video></div>
                 
                    <div class="video"> <video src="video/6.mp4" muted></video></div>
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
                </section>
            </div>
        </div>
        <!-- content close -->
@endsection