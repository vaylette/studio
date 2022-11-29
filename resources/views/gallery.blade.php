@extends('layouts/layout')

@section('content')


        <!-- content begin -->
        <div id="content" class="no-top no-bottom" data-bgimage="url(images/background/5.jpg)" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50 no-bottom">
                <!-- subheader -->
                <section id="subheader" class="dark no-top no-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Portfolio</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- subheader close -->
                <div id="subheader" class="button">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('Corporates')"> Photos</button>
      <button class="btn" onclick="filterSelection('Potraits')"> Videos</button>
      <button class="btn" onclick="filterSelection('Activities')"> Animations</button>
    </div>

                <section aria-label="section-services">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_3_cols row sequence">

                                    <!-- gallery item -->
                                    <div class="item gallery-item col-md-4 mb30 corporates">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="images/gallery/a(1).jpg">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="images/gallery/pf%20(a(1)).jpg" class="wow" alt=""/>
										</a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item gallery-item col-md-4 mb30">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="images/gallery/pf%20(a(2)).jpg">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="images/gallery/pf%20(2).jpg" class="wow" alt="" />
										</a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item gallery-item col-md-4 mb30">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="images/gallery/pf%20(3).jpg">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="images/gallery/pf%20(3).jpg" class="wow" alt="" />
										</a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item gallery-item col-md-4 mb30">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="images/gallery/a(1).jpg">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="images/gallery/pf%20(4).jpg" class="wow" alt="" />
										</a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item gallery-item col-md-4 mb30">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="images/gallery/pf%20(5).jpg">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="images/gallery/pf%20(5).jpg" class="wow" alt="" />
										</a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                    <!-- gallery item -->
                                    <div class="item gallery-item col-md-4 mb30">
                                        <div class="picframe wow">
                                            <a class="image-popup" href="images/gallery/pf%20(6).jpg">
											<span class="overlay">
												<span class="pf_text">
													<span class="project-name">Project Name</span>
												</span>
											</span>
											<img src="images/gallery/pf%20(6).jpg" class="wow" alt="" />
										</a>
                                        </div>
                                    </div>
                                    <!-- close gallery item -->

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- content close -->
@endsection