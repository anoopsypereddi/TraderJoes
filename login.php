<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
		<header id="header">
			<div class="inner">
				<a href="https://wiki.illinois.edu/wiki/display/cs411sp18/Trader+Joe%2527s" class="logo"><strong>Trader Joe's</strong></a>
				<nav id="nav">
					<a href="index.php">Home</a>
					<a href="search.php">Search</a>
					<a href="portfolio.php">Portfolio</a>
					<a href="history.php">History</a>
					<?php
						session_start();
						if(empty($_SESSION['login_user'])) {
							echo '<a href="login.php"><u>Login</u></a>';
						} else {
							echo '<a href="logout.php"><u>Logout</u></a>';
						}
					?>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Login</h2>
						<p>Enter Your Username & Password</p>
					</header>
			</section>


			<body>
		<table width="100%" border = "1" cellpadding="10">



			<tr>
			<td align="center" width="41%">
				<table width="640" border="0" cellpadding="3">
					<td width="45%">
						<div class="center">
							<h4>Sign In:</h4>
							<form action="sign_in.php" method="get">
								<p align= "left">
								 Username:&nbsp <input name="username" type="text" /><br/>
								 Password:&nbsp <input name="password" type="password" /><br/>
								<input name="Sign In" type="submit" value="Sign In" /><br/>
								</p>
							</form>

							<h4>Sign Up:</h4>
							<form action="sign_up.php" method="get">
								<p align= "left">
								Requested Username:<br/> <input name="username" type="text" /><br/>
								Requested Password:<br/> <input name="password" type="password" /><br/>
								Email:<br/> <input name="email" type="text" /><br/>
								<input name="Sign Up" type="submit" value="Sign Up" />
								</p>
								<br/>
							</form>
						</div>
					</td>
					<td width="41%">
						<div class="center">
							<br/> <br/> <br/>
						</div>
					</td>
				</table>
			    </td>
			</tr>
		</table>
		<br/>
	</body>

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
