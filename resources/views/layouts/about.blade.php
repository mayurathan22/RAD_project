<!DOCTYPE HTML>
<html>
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Architect Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="/index">Jayani Swimming Pools</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="/index">Home</a></li>
								<!-- <li class="has-dropdown">
									<a href="work.html">Projects</a>
									<ul class="dropdown">
										<li><a href="#">Commercial</a></li>
										<li><a href="#">Apartment</a></li>
										<li><a href="#">House</a></li>
										<li><a href="#">Building</a></li>
									</ul>
								</li> -->

								<li><a href="/services">Services</a></li>
                                <li><a href="/store">Store</a></li>
								<li><a href="/calculator">Calculator</a></li>
								<li><a href="/blog">Blog</a></li>
								<li class="active"><a href="/about">About</a></li>
								<li><a href="/contact">Contact</a></li>
                                <li><a href="/login">Sign Up/Sign In</a></li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Company Info</h2>
				   					<h1>About Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-about">
			<div class="container">
				.<div class="row row-pb-lg">
					<div class="col-md-6">
						<div class="about animate-box">
							<h2>Welcome to our Company</h2>
							<p>Professionals jayani Swimming pools Carry Out The Pool Construction From Commencement To Conclusion With Utmost Care Having Aesthetic And Technical Aspects In Mind. After A Careful Site Evaluation And After Studying The Client-Specific Needs,We Proposes The Most Suitable Design And Size Of The Pool And The Specifications.

The Designing Of Pools, Carrying Out Construction Work, Installation Of Equipment Etc. Are Carried Out In Professional Manner.</br>

Whether You Intend To Build A New Swimming Pool Or Would Like To Upgrade An Existing One,We Promises To Provide Quality Work, Strong Customer Service, And The Full Breadth Of Experience. We Can Help You Design A Project That Is As Complex Or Simple As Your Vision, The Site, And Your Budget Will Warrant.</br>

Our Service Team Is Fast, Efficient, And On Time So You Never Miss An Important Maintenance Task. We Provide Year Round Pool And Spa Care To Make Your Life Easier. We Take Care Of Your Pool, While You Are Doing What You Are Supposed To Do; Enjoying Your Pool.</p>
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="images/img_bg_4.jpeg" alt="Free HTML5 Bootstrap Template by colorlib.com">
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading animate-box">
						<span class="sm">Team</span>
						<h2><span class="thin">Our</span> <span class="thick">Engineers</span></h2>
						<p>We are Strong As One</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="staff"  style="background-image">
							<img src="{{$abouts->engineer_photo}}" height="350" width="375" > 
							<a href="#" class="desc">
								<h3>{{$abouts->engineer_name}}</h3>
								<span>Lead Engineer</span>
								<div class="parag">
									<p>{{$abouts->engineer_name}}</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image">
						<img src="{{$abouts->archi_photo1}}" height="350" width="375">
							<a href="#" class="desc">
								<h3>{{$abouts->archi_name1}}</h3>
								<span>Architect</span>
								<div class="parag">
									<p>{{$abouts->archi_review1}}</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="staff" class="staff-img" style="background-image">
						<img src="{{$abouts->archi_photo2}}" height="350" width="375">
							<a href="#" class="desc">
								<h3>{{$abouts->archi_name2}}</h3>
								<span>Architect</span>
								<div class="parag">
									<p>{{$abouts->archi_review2}}</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">Testimonial</span>
						<h2><span class="thin">What Our</span> <span class="thick">Client Says</span></h2>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row animate-box">
							<span class="icon"><i class="icon-quotes-left"></i></span>
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="{{$abouts->client_photo1}}" alt="user">
											</figure>
											<blockquote>
												<span>{{$abouts->client_name1}}</span>
												<p>{{$abouts->client_review1}}</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="{{$abouts->client_photo2}}" alt="user">
											</figure>
											<blockquote>
												<span>{{$abouts->client_name2}}</span>
												<p>{{$abouts->client_review2}}</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active">
										<div class="testimony-wrap">
											<figure>
												<img src="{{$abouts->client_photo3}}" alt="user">
											</figure>
											<blockquote>
												<span>{{$abouts->client_name3}}</span>
												<p>{{$abouts->client_review3}}</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		@include('others')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
	</body>
</html>

