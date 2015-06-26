<?php

	$params = array_keys($_GET);

	if (count($params) > 0) {
		$album = $params[0];
		include 'album.php';
		exit();
	}
?>

<!DOCTYPE HTML>

<html>
<head>

	<title>Photos</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/jquery.scrollex.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script>

	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-wide.css" />
		<link rel="stylesheet" href="css/style-normal.css" />
	</noscript>

	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

</head>
<body>


	<header id="header">

		<h1 id="logo"><a href="/photos/">Photos</a></h1>

		<nav id="nav">
			<ul>
				<li><a href="http://cristian.sulea.net">My Webpage</a></li>
				<li><a href="http://cristian.sulea.net/blog/">Blog</a></li>
			</ul>
		</nav>

	</header>

	<section id="intro" class="main style1 dark fullscreen">
		<div class="content container 75%">
			<header>
				<h2>Albums</h2>
			</header>
			<footer>
				<a href="#work" class="button style2 down">Albums</a>
			</footer>
		</div>
	</section>


	<section id="work" class="main style3 primary">
		<div class="content container">
			<div class="container 75%">

				<div class="row 0% images">
					<div class="4u">
						<a href="?album" class="image fit from-left"><img src="albums/album/intro.jpg" title="" alt="" /></a>
					</div>
					<div class="4u">
						<a href="albums/album/photos/02.jpg" class="image fit from-top"><img src="albums/album/thumbs/02.jpg" title="" alt="" /></a>
					</div>
					<div class="4u">
						<a href="albums/album/photos/03.jpg" class="image fit from-right"><img src="albums/album/thumbs/03.jpg" title="" alt="" /></a>
					</div>
				</div>
				<div class="row 0% images">
					<div class="4u">
						<a href="albums/album/photos/04.jpg" class="image fit from-left"><img src="albums/album/thumbs/04.jpg" title="" alt="" /></a>
					</div>
					<div class="4u">
						<a href="albums/album/photos/05.jpg" class="image fit from-top"><img src="albums/album/thumbs/05.jpg" title="" alt="" /></a>
					</div>
					<div class="4u">
						<a href="albums/album/photos/06.jpg" class="image fit from-right"><img src="albums/album/thumbs/06.jpg" title="" alt="" /></a>
					</div>
				</div>

			</div>
		</div>
	</section>


	<footer id="footer">

		<ul class="actions">
			<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
			<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
			<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
		</ul>

		<ul class="menu">
			<li>&copy; <a href="http://cristian.sulea.net">Cristian Sulea</a></li>
			<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>

	</footer>


</body>
</html>