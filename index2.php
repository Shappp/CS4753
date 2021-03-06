<?php
	session_start();

	if(!isset($_SESSION['good']))
	{
		header("Location: notallowed.php");
	}
?>

<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Union | College Productivity</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index2.php">Members'<img src="images/logo_trans.png" height="30px;" />nion</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="index2.php">Home</a>
										<!--
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
										-->
									</li>
									<li><a href="inbox.php">Inbox</a></li>
									<li class="break"><a href="boards2.php">Bulletin Boards</a></li>
									<li><a href="logout.php">Log Out</a></li>
								</ul>
							</nav>

					</div>
					<!-- Hero -->
						<section id="hero" class="container">
							<header>
								<!--<h2>Logo-->
								<div class="row" id="hero-bullets">
									<div class="col-md-4">
										<ul>
											<li>Be more productive</li>
											<li>Connect with your peers</li>
											<li>Pursue hobbies and relax</li>
										</ul>
									</div>
									<div class="col-md-4">
										<img src="images/logo_trans.png" height="200px" />
									</div>
									<div class="col-md-4">
										<ul>
											<li>Decrease college stress</li>
											<li>Convenient local assistance</li>
											<li>Improve social life and happiness</li>
										</ul>
									</div>
								</div>
								<br />
								 <a href="http://html5up.net"></a></h2>
							</header>
							<p><strong>Welcome to your center for college productivity!</strong>
							<br />
							<a href="http://html5up.net/license"></a></p>
							<ul class="actions">
								<li><a href="boards2.php" class="button">Take a look at the services!</a></li>
							</ul><ul class="actions">
								<li><a href="post.php" class="button">Make a post!</a></li>
							</ul>
						</section>

				</div>

			<!-- Features 1 -->
				<!--
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<section class="6u 12u(narrower) feature">
								<div class="image-wrapper first">
									<a href="#" class="image featured first"><img src="images/pic01.jpg" alt="" /></a>
								</div>
								<header>
									<h2>Semper magna neque vel<br />
									adipiscing curabitur</h2>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
								sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
								adipiscing elit. Curabitur vel sem sit.</p>
								-->
								<!--<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
							<section class="6u 12u(narrower) feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
								</div>
								<header>
									<h2>Amet lorem ipsum dolor<br />
									sit consequat magna</h2>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
								sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
								adipiscing elit. Curabitur vel sem sit.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
				-->

			<!-- Promo -->
				<!--
				<div id="promo-wrapper">
					<section id="promo">
						<h2>Neque semper magna et lorem ipsum adipiscing</h2>
						<a href="#" class="button">Breach the thresholds</a>
					</section>
				</div>
				-->

			<!-- Features 2 -->
				
				<div class="wrapper">
					<section class="container">
						<!--<header class="major">
							<h2>Sed magna consequat lorem curabitur tempus</h2>
							<p>Elit aliquam vulputate egestas euismod nunc semper vehicula lorem blandit</p>
						</header>
						-->
						<div class="row features">
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper first">
									<a href="#" class="image featured"><img src="images/Tutoring.jpeg" alt="" /></a>
								</div>
								<p>Tutoring</p>
									<p style="font-size: 11pt">Meet your learning needs through our services!</p>
							</section>
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/cleaning.jpeg" alt="" /></a>
								</div>
								<p>Cleaning/Laundry</p>
								<p style="font-size: 11pt">Live cleanly and save time by having others clean for you!</p>
							</section>
							<section class="4u 12u(narrower) feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/general.jpeg" alt="" /></a>
								</div>
								<p>Other Services!</p>
								<p style="font-size: 11pt">Check out a wide array of other services provided!</p> 
							</section>
						</div>
						<!--<ul class="actions major">
							<li><a href="#" class="button">Elevate my awareness</a></li>
						</ul>
						-->
					</section>
				</div>
				

			<!-- Footer >
			
				<div id="footer-wrapper">
					
					<div id="footer" class="container">
						<header class="major">
							<h2>Euismod aliquam vehicula lorem</h2>
							<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
							dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
						</header>

						</div>

						
						<div class="row">
							<section class="6u 12u(narrower)">
								<form method="post" action="#">
									<div class="row 50%">
										<div class="6u 12u(mobile)">
											<input name="name" placeholder="Name" type="text" />
										</div>
										<div class="6u 12u(mobile)">
											<input name="email" placeholder="Email" type="text" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Send Message" /></li>
												<li><input type="reset" value="Clear form" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="6u 12u(narrower)">
								<div class="row 0%">
									<ul class="divided icons 6u 12u(mobile)">
										<li class="icon fa-twitter"><a href="#"><span class="extra">twitter.com/</span>untitled</a></li>
										<li class="icon fa-facebook"><a href="#"><span class="extra">facebook.com/</span>untitled</a></li>
										<li class="icon fa-dribbble"><a href="#"><span class="extra">dribbble.com/</span>untitled</a></li>
									</ul>
									<ul class="divided icons 6u 12u(mobile)">
										<li class="icon fa-instagram"><a href="#"><span class="extra">instagram.com/</span>untitled</a></li>
										<li class="icon fa-youtube"><a href="#"><span class="extra">youtube.com/</span>untitled</a></li>
										<li class="icon fa-pinterest"><a href="#"><span class="extra">pinterest.com/</span>untitled</a></li>
									</ul>
								</div>
							</section>
						</div>
					</div>
					>
					-->
					<div id="copyright" class="container" style="margin-top:-50px;">
						<ul class="menu">
							<li>ContactUnion@gmail.com</li>
							<li>(233)555-3459</li>
						</ul>
					</div>

				<!--
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
