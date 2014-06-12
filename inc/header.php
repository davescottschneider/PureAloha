<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php echo $pageTitle; ?></title>
	<meta name="description" content="<?php echo $pageDesc; ?>">
	<?php include('inc/functions.php'); ?>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="container clearfix">
			<div id="logo" class="col-md-4">
			<object data="img/pureAlohaLogo.svg" type="image/svg+xml" class="logo">
				<!--[if lte IE 8 ]-->
					<img src="img/Horizontal_Logo/Color_Logo/Transparent_Background_Files/Pure-Aloha-Ocean-Adventures_Final_72.png" alt="Smells Like Bakin">
				<!--![endif]-->
			</object>
			</div>
			<div class="navbar col-md-6 col-md-offset-2">
				<ul class="nav nav-pills">
					<li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php">Home</a></li>
					<li <?=echoActiveClassIfRequestMatches("about")?>><a href="about.php">About</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#missing">Tours<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Whale Watching</a></li>
							<li><a href="#">Na Pali Coast Tours</a></li>
							<li><a href="#">Sunset Cruise</a></li>
							<li><a href="#">Fishing Charters</a></li>
							<li><a href="#">Snorkeling</a></li>
						</ul>
					</li>
					<li <?=echoActiveClassIfRequestMatches("booking")?>><a href="booking.php">Booking</a></li>
					<li <?=echoActiveClassIfRequestMatches("findus")?>><a href="findus.php">Find Us</a></li>
				</ul>
			</div>
		</div>
	</header>