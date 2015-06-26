<?php

	if (!isset($album) || !file_exists('albums/' . $album . '/info.json')) {
		header('Location: /photos/');
		exit();
	}

	$json  = json_decode(file_get_contents('albums/' . $album . '/info.json'), TRUE);
?>

<!DOCTYPE HTML>

<html>
<head>

	<title><?php echo $json['title'] . ' (' . $json['route'] . ')'; ?></title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/jquery.scrollex.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js.php?album=<?php echo $album; ?>"></script>

	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css.php?album=<?php echo $album; ?>" />
		<link rel="stylesheet" href="css/style-wide.css" />
		<link rel="stylesheet" href="css/style-normal.css" />
	</noscript>

	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css.php?album=<?php echo $album; ?>" /><![endif]-->

</head>
<body>


	<header id="header">

		<h1 id="logo"><a href="/photos/">Photos</a></h1>

		<nav id="nav">
			<ul>
				<li><?php echo $json['route']; ?></li>
			</ul>
		</nav>

	</header>

	<section id="intro" class="main style1 dark fullscreen">
		<div class="content container 75%">
			<header>
				<h2><?php echo $json['title']; ?></h2>
				<h3><?php echo $json['route']; ?></h3>
				<p>(<?php echo $json['date']; ?>)</p>
			</header>
			<p><?php echo $json['description']; ?></p>
			<footer>
				<a href="#work" class="button style2 down">Photos</a>
			</footer>
		</div>
	</section>


	<section id="work" class="main style3 primary">
		<div class="content container">
			<div class="container 75% gallery">

<?php

  $counter = 0;

  foreach (new DirectoryIterator('albums/' . $album . '/photos') as $file) {
    if($file->isDot()) continue;

    $counter++;

    if ($counter == 1) {
      echo '				<div class="row 0% images">' . "\r\n";
    }

    $from = "from-top";

    if ($counter == 1) {
      $from = "from-left";
    } else if ($counter == 3) {
      $from = "from-right";
    }

    echo '					<div class="4u">' . "\r\n";
    echo '						<a href="albums/' . $album . '/photos/' . $file->getFilename() . '" class="image fit ' . $from . '"><img src="albums/' . $album . '/thumbs/' . $file->getFilename() . '" title="" alt="" /></a>' . "\r\n";
    echo '					</div>' . "\r\n";

    if ($counter == 3) {
      echo '				</div>' . "\r\n";
      $counter = 0;
    }
  }

  if ($counter != 0) {
    echo '				</div>' . "\r\n";
  }
?>

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