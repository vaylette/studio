@extends('layouts/layout')

@section('content')

        <!-- content begin -->
        <div id="content" class="no-top no-bottom" data-bgimage="url(images/background/sb1.jpg)" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50 no-bottom">
                <!-- subheader -->
                <section id="subheader" class="dark no-top no-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Works</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- subheader close -->

                <section aria-label="section-services">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mask">
                                    <div class="cover">
                                        <h3>Photography</h3><span class="count"></span>
                                        <div class="clearfix"></div>
                                         <a href="{{asset('gallery')}}" class="btn-link"></a>
                                        
                                    </div>
                                    <img src="images/slider/a.jpg" alt="" class="img-responsive">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mask">
                                    <div class="cover">
                                        <h3>Potraits</h3><span class="count"></span>
                                        <div class="clearfix"></div>
                                         <a href="{{asset('gallery')}}" class="btn-link"></a>
                                      
                                    </div>
                                    <img src="images/slider/cc.jpg" alt="" class="img-responsive">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mask">
                                    <div class="cover">
                                        <h3>Videos</h3><span class="count"></span>
                                        <div class="clearfix"></div>
                                        <a href="{{asset('gallery')}}" class="btn-link"></a>
                                       
                                    </div>
                                    <img src="images/slider/ee.jpg" alt="" class="img-responsive">
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- content close -->

@endsection