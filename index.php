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
				<h2>Find Your Special Local Exprience</h2>
				<p>Holiday expert for travel.</p>
				<form method="get" action="search.php">
					<div class="form-group">	
							<input type="text" class="search" name="q" placeholder="Search by desctination, activity, or etc" required>
							<button class="btn-search"><i class="fa fa-search"></i></button>
					</div>	
				</form>
			</div>
		</div>	
	</section>
	<!--  -->
	<section class="row bg-white">
			<div class="container">	
				<h2>Top Destination</h2>
				<div class="parrent-box f-row">
					<div class="child-box box-destination bg-des-1" onclick="destination(1)" id="bali">
						<div class="box-destination-content">	
								<h3>Mountain Prau</h3>
								<span class="tags">
									Indonesia
								</span>
						</div>
					</div>
					<div class="child-box box-destination bg-des-2" onclick="destination(2)">
						<div class="box-destination-content">	
								<h3>Mountain Slamet</h3>
								<span class="tags">
									Indonesia
								</span>
						</div>
					</div>
					<div class="child-box box-destination bg-des-3" onclick="destination(3)">
						<div class="box-destination-content">	
								<h3>Mountain Sindoro</h3>
								<span class="tags">
									Indonesia
								</span>
						</div>
					</div>
					<div class="child-box box-destination bg-des-4" onclick="destination(4)">
						<div class="box-destination-content">	
								<h3>Bali</h3>
								<span class="tags">
									Indonesia
								</span>
						</div>
					</div>
					
				</div>
			</div>			
	</section>
	<section class="row tour bg-white">
		<div class="container">
			<h2>Get Tour & Trip</h2>
			<div class="parrent-box">
				<div class="box-tour has-shadow" onclick="destination(1)">
					<div class="bg-des-2 box-tour-header">
						<span class="love"><i class="fa fa-heart"></i></span>
					</div>
					<div class="box-tour-content">
						<span class="title-tour">Paket Trip Ke Jogja</span>
						<span class="booked"><i class="fa fa-users"></i> 218 Booked</span>
						<span class="location"><i class="fa fa-location-arrow"></i> Tokyo</span>
					</div>
					<div class="box-tour-footer">
						<div class="star">
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star-half yel"></i>
							<span>(190)</span>
						</div>
						<div class="price">
							IDR. <span>1.000.000</span>
						</div>
					</div>
				</div>
				<div class="box-tour has-shadow"  onclick="destination(1)">
					<div class="bg-des-3 box-tour-header">
						<span class="love"><i class="fa fa-heart"></i></span>
					</div>
					<div class="box-tour-content">
						<span class="title-tour">Paket Trip Ke Bali</span>
						<span class="booked"><i class="fa fa-users"></i> 218 Booked</span>
						<span class="location"><i class="fa fa-location-arrow"></i> Tokyo</span>
					</div>
					<div class="box-tour-footer">
						<div class="star">
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star-half yel"></i>
							<span>(190)</span>
						</div>
						<div class="price">
							IDR. <span>1.000.000</span>
						</div>
					</div>
				</div>
				<div class="box-tour has-shadow" onclick="destination(1)">
					<div class="bg-des-1 box-tour-header">
						<span class="love"><i class="fa fa-heart"></i></span>
					</div>
					<div class="box-tour-content">
						<span class="title-tour">Paket Trip Ke Sindoro</span>
						<span class="booked"><i class="fa fa-users"></i> 218 Booked</span>
						<span class="location"><i class="fa fa-location-arrow"></i> Tokyo</span>
					</div>
					<div class="box-tour-footer">
						<div class="star">
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star-half yel"></i>
							<span>(190)</span>
						</div>
						<div class="price">
							IDR. <span>1.000.000</span>
						</div>
					</div>
				</div>
				<div class="box-tour has-shadow" onclick="destination(1)">
					<div class="bg-des-4 box-tour-header">
						<span class="love"><i class="fa fa-heart"></i></span>
					</div>
					<div class="box-tour-content">
						<span class="title-tour">Paket Trip Ke Bali</span>
						<span class="booked"><i class="fa fa-users"></i> 218 Booked</span>
						<span class="location"><i class="fa fa-location-arrow"></i> Tokyo</span>
					</div>
					<div class="box-tour-footer">
						<div class="star">
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star yel"></i>
							<i class="fa fa-star-half yel"></i>
							<span>(190)</span>
						</div>
						<div class="price">
							IDR. <span>1.000.000</span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	
	<section class="row why bg-warning">
		<div class="container box-why">
			<div class="why-right">	
			</div>
			<div class="why-left">
				 <h2 style="color: #fff">Why Wonderfull?</h2>
				 <p>See why millions of travelers choose to experience the world as part of our strong and secure Wonderfull community. </p>
				 <button>Learn More</button>	
			</div>
		</div>
	</section>

	<section class="row promotion">
		<div class="container">
			<h2>Latest Travel Promo</h2>
			<div class="parrent-box">
				<div class="child-box box-promo bg-promo-1">
					<div class="promo-content">
						<a href="#">Learn More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="child-box box-promo bg-promo-2">
					<div class="promo-content">
						<a href="#">Learn More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="child-box box-promo bg-promo-3">
					<div class="promo-content">
						<a href="#">Learn More <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
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