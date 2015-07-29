<?php

	$params = array_keys($_GET);

	if (count($params) > 0) {
		$album = $params[0];
		include 'album.php';
		exit();
	}

	$title = 'Photos';
?>

<!DOCTYPE HTML>

<html>
<?php include '_head.php'; ?>
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


<?php include '_footer.php'; ?>

</body>
</html>