<!doctype html>
<html lang="en">
<head>
	@section('head')
	<meta charset="UTF-8">
	<meta name="description" content="Forum Fitness Blog">
	<meta name="author" content="Yann Nogueira">
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<link rel="stylesheet" href="css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      @show
</head>
<body>
<div class="navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{ URL::route('home') }}" class="navbar-brand">NCI Fitness Forum</a>
			</div>
			<div class="navbar-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::route('home') }}">Home</a></li>
				<li><a href="{{ URL::route('forum-home') }}">Forums</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contacts">Contact</a></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				@if(!Auth::check())
					<li><a href="{{ URL::route('getCreate') }}">Register</a></li>
					<li><a href="{{ URL::route('getLogin') }}">Login</a></li>
				@else
					<li><a href="{{ URL::route('getLogout') }}">Logout</a></li>
				@endif
			</ul>
		</div>
		</div>
	</div>

	

	@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
	@elseif (Session::has('fail'))
		<div class="alert alert-danger">{{ Session::get('fail') }}</div>
	@endif
	
	<div class="container">@yield('content')</div>

	@section('footer')
	<footer>
		<section id="footer" class="section footer">
			<div class="container">
				<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
					<div class="col-sm-12 align-center">
						<ul class="social-network social-circle">
							<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>				
					</div>
				</div>
				<div class="row align-center copyright">
					<div class="col-sm-12"><p>Copyright &copy; 2014 Yann Nogueira - by <a href="http://smytweb.com">NCI Student</a></p></div>
				</div>
			</div>
		</section>
		<a href="#" class="scrollup"><i class="fa fa-chevron-up"> </i></a>
	</footer>	
	@show

	@section('javascript')
		<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"> </script>
		
	@show
</body>
</html>
