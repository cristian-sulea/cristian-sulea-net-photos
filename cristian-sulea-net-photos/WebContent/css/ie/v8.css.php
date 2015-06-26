<?php
    header("Content-type: text/css; charset: UTF-8");
?>

/*
	Big Picture by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

/*********************************************************************************/
/* Basic                                                                         */
/*********************************************************************************/

	/* Section/Article */

		section,
		article
		{
		}

			section > .last-child,
			article > .last-child
			{
				margin-bottom: 0;
			}

			section.last-child,
			article.last-child
			{
				margin-bottom: 0;
			}

	/* Form */

		form input[type="text"],
		form input[type="email"],
		form input[type="password"],
		form select,
		form textarea {
			position: relative;
			-ms-behavior: url('css/ie/PIE.htc');
			border: solid 1px #ccc;
		}

	/* Button */

		input[type="button"],
		input[type="submit"],
		input[type="reset"],
		.button {
			position: relative;
			-ms-behavior: url('css/ie/PIE.htc');
		}

			.button.down {
				text-indent: 0;
			}

/*********************************************************************************/
/* Intro                                                                         */
/*********************************************************************************/

	#intro {
		-ms-behavior: url('css/ie/backgroundsize.min.htc');
		background: url('../../albums/<?php echo $_GET["album"]; ?>/intro.jpg');
		background-size: cover;
	}

		#intro .content {
			position: relative;
			z-index: 1;
		}

		#intro:after {
			content: '';
			background: url('../images/overlay.png');
			width: 100%;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
		}

/*********************************************************************************/
/* One                                                                           */
/*********************************************************************************/

	#one {
		-ms-behavior: url('css/ie/backgroundsize.min.htc');
		background: url('../../images/one.jpg');
		background-size: cover;
	}

		#one .content {
			position: relative;
			z-index: 1;
		}

		#one.left:before,
		#one.right:after {
			content: '';
			background: url('../images/overlay.png');
			width: 100%;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
		}

/*********************************************************************************/
/* Two                                                                           */
/*********************************************************************************/

	#two {
		-ms-behavior: url('css/ie/backgroundsize.min.htc');
		background: url('../../images/two.jpg');
		background-size: cover;
	}

		#two .content {
			position: relative;
			z-index: 1;
		}

		#two.left:before,
		#two.right:after {
			content: '';
			background: url('../images/overlay.png');
			width: 100%;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
		}