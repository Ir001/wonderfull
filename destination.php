<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/font/css/all.css">
	<title>Wonderfull - Home</title>
</head>
<body>
	<nav>
		<ul class="navbar">
			<div class="logo">
				<a href="index.php"><img src="assets/img/logo.webp"></a>
			</div>
			<li><a href="#"><i class="fa fa-mobile-alt"></i> Get App</a></li>
			<li><a href="#">English <i class="fa fa-angle-down"></i></a></li>
			<li><a href="#">IDR <i class="fa fa-angle-down"></i></a></li>
			<li><a href="login.php">Login / Sign Up</a></li>
		</ul>
	</nav>
	<section class="header bg-des-1 fade">
		<div class="container">
			<div class="head">
				
			</div>
		</div>	
	</section>
	<section class="row">
		<div class="container flex">
			<section class="main-content">
				<span class="d-title">
					Tour Bali
				</span>
				<span class="d-detail">
					<span class="duration"><i class="fa fa-clock"></i> 7 Hours</span> |
					<span class="languge"><i class="fa fa-globe"></i> Guided Language : English, Indonesia</span>
				</span>
				<span class="content">
					<h3>The Exprience</h3>
					<ul>
						<li>Try ‘sea walking’ and gaze upon vibrant corals</li>
						<li>Enjoy a thrilling parasailing experience</li>
						<li>Snorkel in the crystal-clear water </li>
 						<li>Witness the natural beauty of Coral Island on a banana boat</li>	<li>Savor an exclusive seafood lunch in a glass-wall restaurant by booking through KKday</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
					<!--  -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</span>
			</section>
			<section class="sidebar">
				<div class="booking">
					<h3>Trip to Bali</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>IDR.1.000.000</p>
					<button class="btn-book">Booking</button>
				</div>
			</section>
		</div>
	</section>
	<section class="row footer">
		<div class="container">	
			<div class="foot-parent">
				<div class="foot-child">	
						<span class="foot-title">
							About
						</span>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Terms & Condition</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
				</div>
				<div class="foot-child">	
						<span class="foot-title">
							Parent 2
						</span>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Terms & Condition</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
				</div>
				<div class="foot-child">	
						<span class="foot-title">
							Parent 3
						</span>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Terms & Condition</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
				</div>
				<div class="foot-child">	
						<span class="foot-title">
							Parent 4
						</span>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Terms & Condition</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
				</div>

			</div>
			<div class="footer-bottom">	
					<p>	&copy; 2019 Wonderfull Copyright All Reversed</p>
			</div>	
		</div>	
	</section>
<script type="text/javascript" src="assets/font/js/all.js"></script>
<script type="text/javascript">
	function destination(id=1){
		window.location="destination.php?ref=home&id="+id;
	}
	let slideIndex = 0;
	showSlides();
	function showSlides(){
		let i;
		let slides = document.getElementsByClassName("header");
		for(i=0; i< slides.length;i++){
			slides[i].style.display='none';
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}
		slides[slideIndex-1].style.display  = 'block';
		setTimeout(showSlides, 3000);
	}
</script>
</body>
</html>