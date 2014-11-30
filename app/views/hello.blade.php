@extends('layouts.master')

@section('head')
	@parent
	<title>Home Page</title>
@stop

@section('content')

	<div class="slider">		
		<!-- <img src="img/bg-main1.jpg" alt="" class="img-responsive" />-->
		{{HTML::image('img/slider3.jpg', 'alt text', ['title' => 'the title', 'class' => 'img-responsive'])}}
	</div>	
	<!-- column content -->
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="big-box">
					<div class="col-lg-12">
						<div class="col-md-4">
							<div class="box-bg">
								<div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.9s">
									<div class="align-center">
										{{HTML::image('img/ff1.jpg', 'alt text', ['title' => 'the title', 'class' => 'img-responsive'])}}
										<h4 class="text-bold">Total Body Workout</h4>
										<p>A total body workout routine is a great way to stay fit, healthy, and energetic.
										 Rather than focus on the same musclegroup every time you hit the gym
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-bg">
								<div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.6s">
									<div class="align-center">
										{{HTML::image('img/ff2.jpg', 'alt text', ['title' => 'the title', 'class' => 'img-responsive'])}}
										<h4 class="text-bold">Need workout motivation?</h4>
										<p>Can’t find a gym buddy? Don’t sweat it — new research shows that even a virtual exercise partner
										 might boost your motivation to exercise.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-bg">
								<div class="wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
									<div class="align-center">
										{{HTML::image('img/ff3.jpg', 'alt text', ['title' => 'the title', 'class' => 'img-responsive'])}}
										<h4 class="text-bold">Get off your butt</h4>
										<p>Dr David Agus is well known in the United States, having treated Steve Jobs, Ted Kennedy and Neil Young.
										 In his new book, A Short Guide to a Long Life
										</p>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>					
			</div>
		</div>	
		<div class="container">
			<div class="row">					
				<div class="wow bounceInRight">	
					<div class="col-lg-6">
						<h4>Twitter</h4>
						<p>This is a demo of how to use Twitter API - I will great a twitter for the forum shortly. For the moment please follow me!!</p>						
						<div id="tweet-feed-widget" >
							<a class="twitter-timeline" href="https://twitter.com/smytyann" data-widget-id="539105158257729536">Tweets by @smytyann</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>

					</div>
				</div>
				<div class="wow bounceInLeft">
					<div class="col-lg-6">
						<h4>Google Maps</h4>
						<p>Our Forum Head Office is located at the NCI College in Dublin - Ireland, please feel free to join us at anytime</p>
					
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>

			<script type="text/javascript">
			function initialize() {
				var mapOptions = {
				  center: new google.maps.LatLng(53.348729, -6.243568),
				  zoom: 15
				  	};
				var map = new google.maps.Map(document.getElementById("googleMap"),
				    mapOptions);
			}
				google.maps.event.addDomListener(window, 'load', initialize);
			</script>

			 <div id="googleMap" style=" height: 400px"></div>
							 
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- end column content -->	

		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"> </script>
		<!--Here is where I have the calls Tweet,Google Map,Flickr-->
		<script src="js/application.js"></script>				
	    <script src="js/bootstrap.js"></script>	


	@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
	@elseif (Session::has('fail'))
		<div class="alert alert-danger">{{ Session::get('fail') }}</div>
	@endif
@stop

