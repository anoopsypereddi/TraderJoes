<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Trader Joe's MockTrading</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="https://wiki.illinois.edu/wiki/display/cs411sp18/Trader+Joe%2527s" class="logo"><strong>Trader Joe's</strong></a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="search.html">Search</a>
						<a href="portfolio.php">Portfolio</a>
						<?php
						echo $_SESSION['login_user'];
						if(strcmp($_SESSION['login_user'], "") == 0) {
								echo '<button onclick="location.href = \'login.html\'" class="button alt">Login</button>';
						} else {
								echo '<button onclick="location.href = \'login.html\'" class="button alt">Logout</button>';
						}
						?>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to MockTrading</h1>
					</header>

					<div class="flex ">

						<div>
							<span class="icon fa-money"></span>
							<h3>Virtual Money</h3>
							<p>Buy & Sell Stocks 100% Risk Free</p>
						</div>

						<div>
							<span class="icon fa-database"></span>
							<h3>Real Time Data</h3>
							<p>Market Data Returned In Nanoseconds</p>
						</div>

						<div>
							<span class="icon fa-line-chart"></span>
							<h3>Up Your Game</h3>
							<p>Earn a Spot on the Leaderboard</p>
						</div>

					</div>

					<footer>
						<a href="login.html" class="button big">Get Started</a>
					</footer>
				</div>
			</section>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>
							<div class="image round">
								<img src="images/pic01.jpg" alt="Pic 01" />
							</div>
							<header>
								<h3>Lorem ipsum<br /> dolor amet nullam</h3>
							</header>
							<p>Morbi in sem quis dui placerat ornare. Pellentesquenisi<br />euismod in, pharetra a, ultricies in diam sed arcu. Cras<br />consequat  egestas augue vulputate.</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
						</article>
						<article>
							<div class="image round">
								<img src="images/pic02.jpg" alt="Pic 02" />
							</div>
							<header>
								<h3>Sed feugiat<br /> tempus adipicsing</h3>
							</header>
							<p>Pellentesque fermentum dolor. Aliquam quam lectus<br />facilisis auctor, ultrices ut, elementum vulputate, nunc<br /> blandit ellenste egestagus commodo.</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; <a href="https://wiki.illinois.edu/wiki/display/cs411sp18/Trader+Joe%2527s">Trader Joe's</a>.
						 Developers: <a href="https://github.com/JackDeDobb">Jackson DeDobbelaere</a>,
						 <a href="https://github.com/rshah98626">Rahul Shah</a>,
						 <a href="https://github.com/anoopsypereddi">Anoop Sypereddi</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
