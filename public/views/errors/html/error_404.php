<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>404 Page Not Found</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=vietnamese')
		@import url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese')
	::selection { background-color: #f07746; color: #fff; }
	::-moz-selection { background-color: #f07746; color: #fff; }

	body {
		background-color: #fff;
		margin: 40px auto;
		max-width: 1024px;
		font-family: 'Roboto', sans-serif;
		color: #a05d42;
	}

	a {
		color: #dd4814;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #fff;
		font-weight: bold;
		text-align: center;
		margin-top: 100px;
		font-size: 92px;
	}

	h2 {
		color:#404040;
		margin:0;
		padding:0 0 10px 0;
	}


	p {
		margin: 0 0 10px;
		padding:0;
	}

	#body {
		margin: 0 15px 0 115px;
		min-height: 96px;
		text-align: center;
		font-size: 24px;
		font-family: 'Montserrat', sans-serif;
	}
	</style>
</head>
<body style="background-image: url('../public/theme/images/404-error.jpg');background-repeat: no-repeat;background-size: cover">
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<div id="body">
			<?php echo "Keep calm, take a coffe and back to homepage";//$message; ?>
		</div>
	</div>
</body>
</html>
