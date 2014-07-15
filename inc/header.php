<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php echo $pageTitle; ?></title>
	<meta name="description" content="<?php echo $pageDesc; ?>">
	<?php include('inc/functions.php'); ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/datepicker.css"/>
	<link rel="stylesheet" href="css/screen.css"/>
	<!--[if IE]>
 	<link href="css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
 	<![endif]-->
</head>
<body data-spy="scroll" data-target="#fixedmenu" class="<?php echo $pageClass; ?>">
	<header class="<?php echo $pageClass; ?>">
		<div class="clearfix">
			<div class="navbar" role="navigation">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav nav-pills">
						<li <?=echoActiveClassIfRequestMatches("index")?>><a href="/">Home</a></li>
						<li <?=echoActiveClassIfRequestMatches("about")?>><a href="about.php">About</a></li>
						<li <?=echoActiveClassIfRequestMatches("booking")?>><a href="booking.php">Booking</a></li>
						<li <?=echoActiveClassIfRequestMatches("findus")?>><a href="findus.php">Find Us</a></li>
					</ul>
				</div>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
				</button>
				<div id="logo">
					<a href="/">
						<object data="img/pureAlohaLogo.svg" type="image/svg+xml" class="logo">
							<!--[if lte IE 8 ]-->
								<img src="img/Horizontal_Logo/Color_Logo/Transparent_Background_Files/Pure-Aloha-Ocean-Adventures_Final_72.png" alt="Pure Aloha Ocean Adventures">
							<!--![endif]-->
						</object>
					</a>
				</div>
			</div>
		</div>
	</header>