<head>
	<title><?php echo $title; ?></title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/jquery.scrollex.min.js"></script>
	<script src="js/skel.min.js"></script>
<?php if (!isset($album)) { ?>
	<script src="js/init.js"></script>
<?php } else { ?>
	<script src="js/init.js.php?album=<?php echo $album; ?>"></script>
<?php } ?>

	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
<?php if (!isset($album)) { ?>
		<link rel="stylesheet" href="css/style.css" />
<?php } else { ?>
		<link rel="stylesheet" href="css/style.css.php?album=<?php echo $album; ?>" />
<?php } ?>
		<link rel="stylesheet" href="css/style-wide.css" />
		<link rel="stylesheet" href="css/style-normal.css" />
	</noscript>

	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
<?php if (!isset($album)) { ?>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<?php } else { ?>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css.php?album=<?php echo $album; ?>" /><![endif]-->
<?php } ?>
</head>
