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
			<li><a href="#">Login / Sign Up</a></li>
		</ul>
	</nav>
<!-- 	<section class="header bg-des-1 fade">
		<div class="container">
			<div class="head">
				
			</div>
		</div>	
	</section> -->
	<section class="row login">
		<div class="container ">
			<div class="box-login has-shadow bg-white">
				<form>
					<h3>Login</h3>
					<div>
						<label>Email:</label>
						<input type="email" class="l-input" name="email" placeholder="Email Address" required>
					</div>
					<div>
						<label>Password:</label>
						<input type="email" class="l-input" name="email" placeholder="Password" required>
					</div>
					<div>
						<button>Login</button>
					</div>
				</form>
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