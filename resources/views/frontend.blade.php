<!DOCTYPE HTML>
<html lang="zxx">

<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Moviepoint - Online Movie,Vedio and TV Show HTML Template</title>
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="assets/img/favcion.png" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slicknav.min.css')}}" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/icofont.css')}}" media="all" />
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/responsive.css')}}" media="all" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="header-area">
					<div class="logo">
						<a href="index-2.html"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="logo" /></a>
					</div>
					<div class="header-right">


					</div>
					<div class="menu-area">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="page-scroll" class="active" href="#lastest">Lasted</a></li>
                                <li><a href="movies.html">Movies</a></li>
                                <li><a href="celebrities.html">CelebritiesList</a></li>
                                <li><a href="top-movies.html">Top Movies</a></li>
                                <li><a href="blog.html">News</a></li>
								<li><a href="#">Pages <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="blog-details.html">Blog Details</a></li>
										<li><a href="movie-details.html">Movie Details</a></li>
									</ul>
								</li>
                                <li><a class="theme-btn" href="#"><i class="icofont icofont-ticket"></i> Tickets</a></li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>
		<div class="login-area">
			<div class="login-box">
				<a href="#"><i class="icofont icofont-close"></i></a>
				<h2>LOGIN</h2>
				<form action="#">
					<h6>USERNAME OR EMAIL ADDRESS</h6>
					<input type="text" />
					<h6>PASSWORD</h6>
					<input type="text" />
					<div class="login-remember">
						<input type="checkbox" />
						<span>Remember Me</span>
					</div>
					<div class="login-signup">
						<span>SIGNUP</span>
					</div>
					<a href="#" class="theme-btn">LOG IN</a>
					<span>Or Via Social</span>
					<div class="login-social">
						<a href="#"><i class="icofont icofont-social-facebook"></i></a>
						<a href="#"><i class="icofont icofont-social-twitter"></i></a>
						<a href="#"><i class="icofont icofont-social-linkedin"></i></a>
						<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
						<a href="#"><i class="icofont icofont-camera"></i></a>
					</div>
				</form>

			</div>
		</div>
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-area-content">
                            <h1>Movies Page</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- hero area start -->

        <section id="lastest" class="video ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title pb-20">
                            <h1><i class="icofont icofont-film"></i> Lastest</h1>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-slider mt-20">
                            <?php
                            $videos = DB::select('SELECT * FROM videos WHERE filter = "A" ');
                            foreach($videos as  $video)
                            {
                                ?>
                            <div class="video-area">
                                <img src="{{ URL::asset("images/".$video->image) }}" alt="video" />
                                <a href="{{$video->link}}" class="popup-youtube">
                                    <i class="icofont icofont-ui-play"></i>
                                </a>
                            </div>
                                <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title pb-20">
                            <h1><i class="icofont icofont-film"></i>Educational</h1>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-slider mt-20">
                            <?php
                            $videos = DB::select('SELECT * FROM videos WHERE filter = "A" ');
                            foreach($videos as  $video)
                            {
                                ?>
                            <div class="video-area">
                                <img src="{{ URL::asset("images/".$video->image) }}" alt="video" />
                                <a href="{{$video->link}}" class="popup-youtube">
                                    <i class="icofont icofont-ui-play"></i>
                                </a>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title pb-20">
                            <h1><i class="icofont icofont-film"></i> Music</h1>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-slider mt-20">
                            <?php
                            $videos = DB::select('SELECT * FROM videos WHERE filter = "A" ');
                            foreach($videos as  $video)
                            {
                                ?>
                            <div class="video-area">
                                <img src="{{ URL::asset("images/".$video->image) }}" alt="video" />
                                <a href="{{$video->link}}" class="popup-youtube">
                                    <i class="icofont icofont-ui-play"></i>
                                </a>
                            </div>
                                <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="video ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title pb-20">
                            <h1><i class="icofont icofont-film"></i> Sports</h1>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-slider mt-20">
                            <?php
                            $videos = DB::select('SELECT * FROM videos WHERE filter = "A" ');
                            foreach($videos as  $video)
                            {
                            ?>
                            <div class="video-area">
                                <img src="{{ URL::asset("images/".$video->image) }}" alt="video" />
                                <a href="{{$video->link}}" class="popup-youtube">
                                    <i class="icofont icofont-ui-play"></i>
                                </a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>


		<!-- footer section start -->
		<footer class="footer">
			<div class="container">
				<div class="row">
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<img src="assets/img/logo.png" alt="about" />
							<p>7th Harley Place, London W1G 8LZ United Kingdom</p>
							<h6><span>Call us: </span>(+880) 111 222 3456</h6>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Legal</h4>
							<ul>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Security</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Account</h4>
							<ul>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Watchlist</a></li>
								<li><a href="#">Collections</a></li>
								<li><a href="#">User Guide</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Newsletter</h4>
							<p>Subscribe to our newsletter system now to get latest news from us.</p>
							<form action="#">
								<input type="text" placeholder="Enter your email.."/>
								<button>SUBSCRIBE NOW</button>
							</form>
						</div>
                    </div>
				</div>
				<hr />
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 text-center text-lg-left">
							<div class="copyright-content">
								<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
							</div>
						</div>
						<div class="col-lg-6 text-center text-lg-right">
							<div class="copyright-content">
								<a href="#" class="scrollToTop">
									Back to top<i class="icofont icofont-arrow-up"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- footer section end -->
		<!-- jquery main JS -->
		<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
		<!-- Slick nav JS -->
		<script src="{{asset('frontend/assets/js/jquery.slicknav.min.js')}}"></script>
		<!-- owl carousel JS -->
		<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
		<!-- Popup JS -->
		<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Isotope JS -->
		<script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
		<!-- main JS -->
		<script src="{{asset('frontend/assets/js/main.js')}}"></script>
	</body>

</html>
