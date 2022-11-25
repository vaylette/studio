@extends('layouts/layout')

@section('content')


        <!-- content begin -->
        <div id="content" class="no-top no-bottom" data-bgimage="url(images/background/backgrounds.jpg)" data-stellar-background-ratio=".2">
            <div class="overlay-bg t50 no-bottom">

                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success') }}
                    </div>
                    @endif
                <!-- subheader -->
                <section id="subheader" class="dark no-top no-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Contact</h1>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- subheader close -->

                <section aria-label="section-services">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <h3>Main Office</h3>
                                    <address class="s1">
												<span><i class="fa fa-map-marker fa-lg"></i>House No. 346, Senga Road Mikocheni A
                                                    </span>
                                                    <span><i class="fa fa-map-marker fa-lg"></i>Dar es Salaam, Tanzania
                                                    </span>
												<span><i class="fa fa-phone fa-lg"></i>+255 786 675 487</span>
												<span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:info@smartstudio.co.tz">info@smartstudio.co.tz</a></span>
											</address>

                                    <div class="spacer-double"></div>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <form name="contactForm" id='contact_form' class="row form-s1" method="post" action='contact-us'>
                                    {{csrf_field()}}

                                    <div class="field-set col-md-6">
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                    </div>

                                    <div class="field-set col-md-6">
                                        <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                    </div>

                                    <div class="field-set col-md-6">
                                        <input type='text' name='phone_number' id='phone' class="form-control" placeholder="Phone">
                                    </div>

                                    <div class="field-set col-md-6">
                                        <input type='text' name='subject' id='subject' class="form-control" placeholder="Subject">
                                    </div>

                                    <div class="field-set col-md-12">
                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="spacer-half"></div>

                                    <div class="col-md-12">
                                        <div id='submit'>
                                            <input type='submit' id='send_messagle' value='Submit Form' class="btn btn-custom" style="color: #292c29">
                                        </div>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                                </form>

                                <div class="spacer-double"></div>


                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- content close -->
@endsection