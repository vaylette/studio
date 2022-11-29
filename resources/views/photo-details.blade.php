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
                                <h1>Photography</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- subheader close -->
                <div class="spacer-single"></div>

                <section aria-label="section-services">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <p>We do photography that’s related to promoting a company’s product and services.<br>
                                We also focus towards capturing the personality of a person or group of people by using effective lighting, backdrops, and poses.
							    </p>
                            </div>

                            <div class="spacer-single"></div>
                            <div class="spacer-single"></div>
                            <div class="spacer-single"></div>

                            <div class="col-md-4">
                                <a href="{{ asset('album')}}" class="f_box s3">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Corporate Photography<span class="underline"></span></span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/background/corporate.jpg" alt="" />
							</a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{ asset('album2')}}" class="f_box s3">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Potrait Photography<span class="underline"></span></span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/background/photo.jpg" alt="" />
							</a>
                            </div>

                            <div class="col-md-4">
                                <a href="{{ asset('album3')}}" class="f_box s3">
								<span class="f_cap_wrap">
									<span class="f_cap"><span class="h4">Advertising Photography<span class="underline"></span></span>
									</span>
								</span>
								<span class="f_bg"></span>
								 <img src="images/background/portfolio1.jpg" alt="" />
							</a>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- content close -->
@endsection