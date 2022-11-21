@extends('layouts/layout')

@section('content')


        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>

            <section class="full-height no-padding" data-speed="5" data-type="background">
                <div class="de-video-container">
                    <div class="de-video-content">
                        <div class="text-center">

                            <div class="spacer-single"></div>
							
							<h1>We are Smart Studio</h1>
							
                            <div class="spacer-single"></div>
                            <div class="teaser-text ls10 id-color">
                                 Creating Stories that matter...
                            </div>
                            <div class="spacer-single"></div>
                           
                            <div class="spacer-single"></div>
                            <a href="{{asset('gallery')}}" class="btn-line">View Our Works</a>
                        </div>
                    </div>

                    <div class="de-video-overlay"></div>

                    <!-- load your video here -->
                    <video autoplay="" loop="" muted="">
                        <source src="https://s3.envato.com/h264-video-previews/2c18749c-c15e-11e3-88a2-005056926838/7458402.mp4" type="video/mp4" />
                    </video>

                </div>

            </section>

            <section aria-label="section-services" class="no-top no-bottom">
                <div class="container-fluid">
                    <div class="row-fluid display-table">
                        <div class="col-md-4">
                            <!-- service item -->
                            <a href="service-details.html" class="f_box s3">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Corporate Photography<span class="underline"></span></span>
										<span class="f_text">Anything that involves photography that’s related to promoting a company’s product and services, we here for that.</span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/services/6.jpg" alt="" />
							</a>
                            <!-- close service item -->
                        </div>

                        <div class="col-md-4">
                            <!-- service item -->
                            <a href="service-details.html" class="f_box s3">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Hopsitality Photography<span class="underline"></span></span>
										<span class="f_text">It's more than simply taking pretty pictures of your spa, bar, restaurant, hotel or any other hospitality business photography. We capture the very essence of your hotel.
                                            </span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/services/6.jpg" alt="" />
							</a>
                            <!-- close service item -->
                        </div>

                        <div class="col-md-4">
                            <!-- service item -->
                            <a href="service-details.html" class="f_box s3">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Portrait Photography<span class="underline"></span></span>
										<span class="f_text">We focus towards capturing the personality of a person or group of people by using effective lighting, backdrops, and poses.</span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/services/6.jpg" alt="" />
							</a>
                            <!-- close service item -->
                        </div>


                    </div>
                </div>
            </section>


            <!-- section service begin -->
            <section id="section-side-1" class="side-bg no-padding">
                <div class="image-container col-md-6 pull-left">
                    <div class="background-image"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="inner-padding">
                            <div class="col-md-5 col-md-offset-7 wow fadeIn">
                                <h2>Who we are</h2>
                                <p>Smart Studio is an innovative content creation studio producing content that tells stories, crosses market boundaries and attracts customers for its brands, products and clients. Cooperating with other studios, content creators, agencies, and IP Stakeholders in transforming and growing businesses in general across the globe through innovation, technology and creativity.
             </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- section service close -->

            <section class="no-top no-bottom" aria-label="section" data-bgimage="url(images/background/1.jpg)" data-stellar-background-ratio=".2">
                <div class="overlay-bg no-top no-bottom t50">
                    <div class="padding30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="sequence">
                                    <div class="col-md-3 col-sm-6 col-xs-6 sq-item wow">
                                        <div class="de_count">
                                            <div class="padding40" data-bgcolor="rgba(255,255,255,.1)">
                                                <h3 class="timer" data-to="8240" data-speed="2500">0</h3>
                                                <span>Hours of Works</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 sq-item wow">
                                        <div class="de_count">
                                            <div class="padding40" data-bgcolor="rgba(255,255,255,.1)">
                                                <h3 class="timer" data-to="315">0</h3>
                                                <span>Projects Done</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 sq-item wow" data-wow-delay=".5s">
                                        <div class="de_count">
                                            <div class="padding40" data-bgcolor="rgba(255,255,255,.1)">
                                                <h3 class="timer" data-to="250">0</h3>
                                                <span>Satisfied Customers</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-6 sq-item wow">
                                        <div class="de_count">
                                            <div class="padding40" data-bgcolor="rgba(255,255,255,.1)">
                                                <h3 class="timer" data-to="32" data-speed="2500">0</h3>
                                                <span>Awards Winning</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top no-bottom" aria-label="section">
                <a href="service-details.html" class="f_box s3">
					<span class="f_cap_wrap">
						<span class="f_cap">
							<span class="h4">Hire Us For Your Next Project<span class="underline"></span></span>
						</span>
					</span>
					<span class="f_bg"></span>
					<img src="images/background/bg-click.jpg" alt="" />
				</a>
            </section>


        </div>
        <!-- content close -->

@endsection