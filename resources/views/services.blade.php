@extends('layouts/layout')

@section('content')

        <!-- content begin -->
        <div id="content" class="no-top no-bottom" data-bgimage="url(images/background/services.jpg)" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50 no-bottom">
                <div class="container">
                <!-- subheader -->
                <section id="subheader" class="dark no-top no-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>What we do</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- subheader close -->

                <section aria-label="section-services">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- service item -->
                                <a href="{{ asset('photo-details')}}" class="f_box">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Photography<span class="underline"></span></span>
										<span class="f_text"></span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/slider/a.jpg" alt="" />
							</a>
                                <!-- close service item -->
                            </div>

                            <div class="col-md-4">
                                <!-- service item -->
                                <a href="{{ asset('video-details')}}" class="f_box">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Videography<span class="underline"></span></span>
										<span class="f_text"></span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/slider/ee.jpg" alt="" />
							</a>
                                <!-- close service item -->
                            </div>

                            <div class="col-md-4">
                                <!-- service item -->
                                <a href="{{ asset('animation-details')}}" class="f_box">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">2D & 3D Animation<span class="underline"></span></span>
									<!--	<span class="f_text">2D animation is the art of creating movement in a two-dimensional space. This includes characters, creatures, FX, and backgrounds.
                                        With 3D animation the process of creating moving three-dimensional images in a digital context.
                                        </span>-->
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/slider/bb.jpg" alt="" />
							</a>
                                <!-- close service item -->
                            </div>
                            <div class="spacer-single"></div>

                            

                            <div class="col-md-4">
                                <!-- service item -->
                                <a href="{{ asset('audio')}}" class="f_box">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Audio Production<span class="underline"></span></span>
										<span class="f_text"></span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/slider/dd.jpg" alt="" />
							</a>
                                <!-- close service item -->
                            </div>

                            <div class="col-md-4">
                                <!-- service item -->
                                <a href="{{ asset('content-details')}}" class="f_box">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Content Creation<span class="underline"></span></span>
										<span class="f_text"></span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/slider/cc.jpg" alt="" />
							</a>
                                <!-- close service item -->
                            </div>

                            <div class="col-md-4">
                                <!-- service item -->
                                <a href="{{ asset('film-details')}}" class="f_box">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Film making & TV Production<span class="underline"></span></span>
										<span class="f_text"></span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/slider/ee.jpg" alt="" />
							</a>
                                <!-- close service item -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
</div>
        </div>
        <!-- content close -->

@endsection