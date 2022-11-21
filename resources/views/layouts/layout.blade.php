<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Smart Studio</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/png">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="agency, business, clean, creative, fullscreen, fullscreen photography, fullscreen portfolio, gallery, photo, photographer, photography, photography theme, portfolio, responsive">
    <meta name="author" content="">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/filter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/videobtn.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet" type="text/css">


    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <link href="{{ asset('css/css.css') }}" rel="stylesheet" type="text/css">
   
    <!-- background -->
    <link rel="stylesheet" href="{{ asset('css/bg.css')}}" type="text/css">

    <!-- color scheme -->
    <link href="{{ asset('css/colors/red.css')}}" rel="stylesheet" id="colors" type="text/css">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css')}}">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css')}}">

    <link rel="stylesheet" href="{{ asset('css/rev-settings.css')}}" type="text/css">

</head>

<body id="homepage">
    <div id="wrapper">

        <!-- header begin -->
        <header>

        <div class="container" style="width: 100%; height:60px">
            <div class="row" style="width: 100%; height:60px">
                <div class="col-md-12" style="width: 100%; height:60px">
                <!-- logo begin -->
                <div id="logo">
                    <a href="{{ asset('/')}}">
                        <img class="logo" src="images/logo.png" alt="">
                    </a>
                </div>
                <!-- logo close -->

                <!-- small button begin -->
                <span id="menu-btn"></span>
                <!-- small button close -->

                <!-- mainmenu begin -->
                <nav>
                    <ul id="mainmenu">
                        <li><a href="{{ asset('/')}}">Home<span></span></a>
                            <!--<ul>
                                <li><a href="{{ asset('video')}}">Home Video</a></li>
                            </ul>-->
                        </li>
                        <li><a href="{{ asset('about')}}">About<span></span></a></li>
                        <li><a href="{{ asset('services')}}">Services<span></span></a>
                          <!--  <ul>
                                <li><a href="{{ asset('details')}}">Details</a></li>
                            </ul>-->
                        </li>
                        <li><a href="{{ asset('works')}}">Works<span></span></a>
                          <!--  <ul>
                                <li><a href="{{ asset('album')}}"></a></li>
                                <li><a href="{{ asset('gallery')}}">Gallery</a></li>
                            </ul>-->
                        </li>
                        <li><a href="{{ asset('contact-us')}}">Contact<span></span></a></li>
                    </ul>
                </nav>
                <!-- mainmenu close -->

            </div>

        </div>
    </div>
    </header>
    <!-- header close -->
    @yield('content')

    <footer class="s1">
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            &copy; Copyright 2022 - Smart Studio 
                        </div>

                        <div class="col-md-6 text-right">
                            <div class="social-icons">
                                <a href="https://instagram.com/smartstudiotz"><i class="fa fa-instagram fa-lg"></i></a>
                                <a href="https://facebook.com/smartstudiotz"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="https://twitter.com/smartstudiotz"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="https://vimeo.com/smartstudiotz"><i class="fa fa-vimeo fa-lg"></i></a>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="s1">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
 <!-- Javascript Files
    ================================================== -->
 
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('js/easing.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    <script src="{{ asset('js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('js/validation.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/enquire.min.js')}}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('js/jquery.plugin.js')}}"></script>
    <script src="{{ asset('js/typed.js')}}"></script>
    <script src="{{ asset('js/typed-custom.js')}}"></script>
    <script src="{{ asset('js/designesia.js')}}"></script>

    <!-- RS5.0 Core JS Files -->
    <script src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

    <!-- RS5.0 Extensions Files -->
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <!-- current page only scripts -->
    
    <script src="js/typed.js"></script>
    <script src="js/typed-custom.js"></script>

    <!--pop-up video-->
    
    <script>
        jQuery(document).ready(function () {
            // revolution slider
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                delay: 5000,
                navigation: {
                    arrows: { enable: true }
                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 600,
                disableProgressBar: "on"
            });
        });
    </script>
    
</body>

</html>