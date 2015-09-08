<?php
    $version = "1.1.2"
?>
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
	<script src="js/init.js?v=<?php echo $version; ?>"></script>
<?php } else { ?>
	<script src="js/init.js.php?album=<?php echo $album; ?>&intro=<?php echo $intro; ?>&v=<?php echo $version; ?>"></script>
<?php } ?>

	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
<?php if (!isset($album)) { ?>
		<link rel="stylesheet" href="css/style.css?v=<?php echo $version; ?>" />
<?php } else { ?>
		<link rel="stylesheet" href="css/style.css.php?album=<?php echo $album; ?>&intro=<?php echo $intro; ?>&v=<?php echo $version; ?>" />
<?php } ?>
		<link rel="stylesheet" href="css/style-wide.css?v=<?php echo $version; ?>" />
		<link rel="stylesheet" href="css/style-normal.css?v=<?php echo $version; ?>" />
	</noscript>

	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
<?php if (!isset($album)) { ?>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<?php } else { ?>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css.php?album=<?php echo $album; ?>&intro=<?php echo $intro; ?>&v=<?php echo $version; ?>" /><![endif]-->
<?php } ?>

	<link rel="stylesheet" href="css/xxx.css?v=<?php echo $version; ?>" />

	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
