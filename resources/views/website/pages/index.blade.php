<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Beauty Salon a Beauty Category Bootstrap Responsive website Template | Home :: w3layouts</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Beauty Salon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style Sheets -->
	<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-CSS -->
	<link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
	<!--// Owl-Carousel-CSS -->
	<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //Style Sheets -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800"
		rel="stylesheet">
	<!--// web-fonts -->
	<style>
		html,
		body {
			overflow: hidden;
		}
	</style>
</head>

<body>
	<!-- banner -->
	<div class="banner jarallax" id="home">
		<div class="contentVideo">
			<video autoplay loop muted class="videoLabel">
				<source src="{{ asset('background.mp4')}}" type="video/mp4">
				Tu navegador no soporta el formato de video.
			</video>
		</div>
		<!--- <img class="jarallax-img" src="images/22.jpg" alt=""> -->
		<!-- navigation -->

		<div>
			<div class="col-lg-6 col-md-4 col-sm-3">
				<div class="w3-logo">

				</div>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-9">
				<div class="">
					<nav class="navbar navbar-default shift">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a class="active" href="index.html">Inicio</a></li>
								<li><a href="{{ route('website.about-us') }}">Acerca de Nosotros</a></li>
								<li>
									<a href="{{ route('website.services') }}" class="active" aria-label="Toggle navigation">
										Nuestros Servicios
									</a>
								</li>
								<li>
									<a href="{{ route('website.inspirate') }}" class="active" aria-label="Toggle navigation">
										Inspírate
									</a>
								</li>
								<li>
									<a href="{{ route('website.contact') }}" aria-label="Toggle navigation">Contacto</a>
								</li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
		</div>
		<!-- //navigation -->
	</div>
	<!-- //Logo centrado -->
	<div class="logoCenter">
		<img src="{{ asset('images/logoBlanco.svg')}}" class="img-responsive  p-98" alt="" />
	</div>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
		</span></a>
	<!-- //smooth scrolling -->
	<script type='text/javascript' src="{{ asset('js/jquery-2.2.3.min.js')}}"></script>
	<!-- start-smoth-scrolling -->


	<script src="{{ asset('js/jarallax.js')}}"></script>

	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- flexSlider -->
	<script defer src="{{ asset('js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->

	<!-- Owl-Carousel-JavaScript -->
	<script src="{{ asset('js/owl.carousel.js')}}"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 2,
				lazyLoad: true,
				autoPlay: false,
				pagination: true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->
	<script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- stats -->
	<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!--js for bootstrap working-->
	<script src="{{ asset('js/bootstrap.js')}}"></script>
	<!-- //for bootstrap working -->
</body>

</html>
