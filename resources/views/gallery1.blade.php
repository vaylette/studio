@extends('layouts/layout')

@section('content')
<div id="content" class="no-top no-bottom" data-bgimage="url(images/background/d.jpg)" data-stellar-background-ratio=".2">
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

<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<div id="subheader" class="button">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('corporates')"> Corporates</button>
      <button class="btn" onclick="filterSelection('potraits')"> Potraits</button>
      <button class="btn" onclick="filterSelection('activities')"> Activities</button>
    </div>
	
<section>
<div class="gallery">
	
	<div class="gallery__column">
			<figure class="gallery__thumb filter corporates">
				<img src="images/slider/a.jpg" alt="" class="gallery__image">
			</figure>
		
		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter corporates">
				<img src="images/slider/a.jpg" alt="" class="gallery__image">
			</figure>
		</a>

		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter potraits">
				<img src="images/slider/a.jpg" alt="" class="gallery__image">
			</figure>
		</a>
	</div>
	
	<div class="gallery__column">
		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter activities">
				<img src="images/slider/b.jpg" alt="" class="gallery__image">
			</figure>
		</a>

		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter corporates">
				<img src="images/slider/b.jpg" alt="" class="gallery__image">
			</figure>
		</a>
		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter potraits">
				<img src="images/slider/b.jpg" alt="" class="gallery__image">
			</figure>
		</a>

		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter activities">
				<img src="images/slider/c.jpg" alt="" class="gallery__image">
			</figure>
		</a>
	</div>
	
	<div class="gallery__column">
		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter potriats">
				<img src="d" alt="" class="gallery__image">
			</figure>
		</a>
		
		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter corporates">
				<img src="images/slider/b.jpg" alt="" class="gallery__image">
			</figure>
		</a>

		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter activities">
				<img src="images/slider/c.jpg" alt="" class="gallery__image">
			</figure>
		</a>
	</div>
	
	<div class="gallery__column">
		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter potriats">
				<img src="images/slider/e.jpg" alt="" class="gallery__image">
			</figure>
		</a>

		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter corporates">
				<img src="images/slider/b.jpg" alt="" class="gallery__image">
			</figure>
		</a>
		
		<a href="#" target="_blank" class="gallery__link">
			<figure class="gallery__thumb filter potraits">
				<img src="images/slider/d.jpg" alt="" class="gallery__image">
			</figure>
		</a>
	</div>
</div>
</section>

<script src="{{ asset('js/scripts.js') }}"></script>


    @endsection