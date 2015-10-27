@extends('layouts.principal')
	@section('content')
				<div class="review-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="reviews-section">
				<h3 class="head">Movie Reviews</h3>
					<div class="col-md-9 reviews-grids">
					@foreach($movies as $movie)
							<div class="review">
								<div class="movie-pic">
									<img src="movies/{{$movie->path}}" alt="" />
								</div>
								<div class="review-info">
									<a class="span" href="single.html"> 
									<i>{{$movie->name}}</i></a>
									<p class="info">CAST:&nbsp;&nbsp;{{$movie->cast}}</p>
									<p class="info">DIRECTION:&nbsp;&nbsp;{{$movie->direction}}</p>
									<p class="info">GENRE:&nbsp;&nbsp;{{$movie->genre}}</p>
									<p class="info">DURATION:&nbsp;&nbsp;{{$movie->duration}}</p>
								</div>
								<div class="clearfix"></div>
							</div>
						@endforeach
						

						

					</div>


					<div class="clearfix"></div>
			</div>
			</div>
			
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			 	@foreach($movies as $movie)
				<li><img src="movies/{{$movie->path}}"</li>
				@endforeach
			</ul>	
		</div>	
		
	@endsection