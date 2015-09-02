<?php

	if (!isset($album) || !file_exists('albums/' . $album . '/config.json')) {
		header('Location: /photos/');
		exit();
	}

	$json  = json_decode(file_get_contents('albums/' . $album . '/config.json'), TRUE);

	$title = $json['title'] . ' (' . $json['route'] . ')';
	$intro = $json['intro'];
?>

<!DOCTYPE HTML>

<html>
<?php include '_head.php'; ?>
<body>


	<header id="header">

		<h1 id="logo"><a href="/photos/">Photos</a></h1>

		<nav id="nav">
			<ul>
				<li><?php echo $json['route']; ?></li>
			</ul>
		</nav>

	</header>


	<section id="intro" class="main style1 fullscreen<?php if ($json['dark'] == 'true') echo ' dark'; ?>">
		<div class="content container 75%">
			<header>
				<h2><?php echo $json['title']; ?></h2>
				<h3><?php echo $json['route']; ?></h3>
				<p>(<?php echo $json['date']; ?>)</p>
			</header>
<?php if (isset($json['description'])) { ?>
			<p><?php echo $json['description']; ?></p>
<?php } ?>
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

  foreach (array_diff(scandir('albums/' . $album . '/photos', 0), array('.', '..')) as $file) {

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
    echo '						<a href="albums/' . $album . '/photos/' . $file . '" class="image fit ' . $from . '"><img src="albums/' . $album . '/thumbs/' . $file . '" title="" alt="" /></a>' . "\r\n";
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


<?php include '_footer.php'; ?>

</body>
</html>