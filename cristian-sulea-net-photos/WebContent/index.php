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


<!-- 	<section id="intro" class="main style1 dark fullscreen"> -->
<!-- 		<div class="content container 75%"> -->
<!-- 			<header> -->
<!-- 				<h2>Albums</h2> -->
<!-- 			</header> -->
<!-- 			<footer> -->
<!-- 				<a href="#work" class="button style2 down">Albums</a> -->
<!-- 			</footer> -->
<!-- 		</div> -->
<!-- 	</section> -->


	<section id="work" class="main style3 primary">
		<div class="content container">
			<div class="container 75%">

<?php

  $counter = 0;

  foreach (array_diff(scandir('albums', 1), array('.', '..')) as $file) {

	$json  = json_decode(file_get_contents('albums/' . $file . '/config.json'), TRUE);

    echo '				<div class="row 0%">' . "\r\n";
    echo '					<div class="3u">' . "\r\n";
    echo '						<a href="?' . $file . '" class="image"><img src="albums/' . $file . '/thumbs/' . $json['intro'] . '" title="" alt="" /></a>' . "\r\n";
    echo '					</div>' . "\r\n";
    echo '				</div>' . "\r\n";

    echo '				<div class="row 0%" style="text-align: left;">' . "\r\n";
    echo '					<div class="12u">' . "\r\n";
    echo '						<a href="?' . $file . '">' . $json['date'] . ' - ' . $json['title'] . ' ( ' . $json['route'] . ' )</a>' . "\r\n";
    echo '					</div>' . "\r\n";
    echo '				</div>' . "\r\n";

    echo '				<div class="row 0%">' . "\r\n";
    echo '					<div class="12u">' . "\r\n";
    echo '						&nbsp;' . "\r\n";
    echo '					</div>' . "\r\n";
    echo '				</div>' . "\r\n";
  }

?>

			</div>
		</div>
	</section>


<?php include '_footer.php'; ?>

</body>
</html>