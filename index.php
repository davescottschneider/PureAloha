<?php
$pageTitle="Pure Aloha! A Hawaiian Paradise";
$section="home";
$pageDesc="The meta description for the Pure Aloha home page.";
 include('inc/header.php'); ?>
	<div id="clouds"> 
		<div id="napaliCoast">
			 <div class="clearfix">
			 	<div class="right pausebg col-md-1">
			 		<button type="button" class="btn btn-pause btn-sm" onclick="pauseBG()">
			 			<span class="glyphicon glyphicon-pause"></span>
			 		</button>
			 	</div>
			 	<div id="welcome" class="homeblock">
			 		<object data="img/headline.svg" type="image/svg+xml" class="headline col-md-4">
						<!--[if lte IE 8 ]-->
							<img src="img/Horizontal_Logo/Color_Logo/Transparent_Background_Files/Pure-Aloha-Ocean-Adventures_Final_72.png" alt="Pure Aloha Ocean Adventures">
						<!--![endif]-->
					</object>
					<a class="starthere" href="#whale">
							<span class="glyphicon glyphicon-chevron-down"></span>
					</a>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<div id="fixedmenu" class="navscrollspy movenav">
							<ul class="nav nav-navbar">
								<li class="active"><a href="#whale">Whale Watching</a></li>
								<li><a href="#fishing">Fishing Charters</a></li>
								<li><a href="#napali">Na Pali Coast</a></li>
								<li><a href="#snorkeling">Snorkeling</a></li>
								<li><a href="#sunset">Sunset Tours</a></li>
							</ul>
						</div>
					</div>
			 	</div>
			 </div>
		</div>
	</div>
	<section class="srcollFade" id="content">
		 <section class="ocean">
		 	<div class="container clearfix tour" id="whale">
		 		<h2>Kauai Whale Watching Tours</h2>
		 		<div class="col-md-7 left">
		 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus dolor, faucibus eleifend suscipit vitae, auctor a urna. Maecenas ac quam quis mi sagittis hendrerit vel eget urna. Suspendisse ac ante magna. Cras varius posuere erat, fringilla venenatis ante bibendum eget. Ut at arcu a diam elementum fermentum. Integer a enim quis dui faucibus consectetur ac vitae odio.</p>
		 			<h3>A Great Time For The Whole Family</h3>
		 			<p>Sed sed diam vitae magna luctus aliquam. Nunc imperdiet leo et neque mollis accumsan. Fusce tempus velit at ante semper, in rhoncus neque volutpat. Aenean in urna sed massa lobortis porttitor. Proin eu blandit libero. Etiam id ligula et tellus tincidunt porttitor. Fusce mattis imperdiet pharetra. Maecenas lorem mauris, pulvinar nec est sit amet, tristique convallis quam. Maecenas lectus eros, iaculis ac bibendum nec, fringilla in justo.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="img/snorkel.png" title="" alt=""/>
		 			<a href="#" class="btn btn-lg btn-success col-md-5">Learn More</a>
		 			<a href="#" class="btn btn-lg btn-primary col-md-5">Book Now</a>
		 		</div>
		 	</div>
		 	<div class="container clearfix tour" id="fishing">
		 		<h2>Kauai Charter Fishing Tours</h2>
		 		<div class="col-md-7 block">
		 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus dolor, faucibus eleifend suscipit vitae, auctor a urna. Maecenas ac quam quis mi sagittis hendrerit vel eget urna. Suspendisse ac ante magna. Cras varius posuere erat, fringilla venenatis ante bibendum eget. Ut at arcu a diam elementum fermentum. Integer a enim quis dui faucibus consectetur ac vitae odio.</p>
		 			<h3>A Great Time For The Whole Family</h3>
		 			<p>Sed sed diam vitae magna luctus aliquam. Nunc imperdiet leo et neque mollis accumsan. Fusce tempus velit at ante semper, in rhoncus neque volutpat. Aenean in urna sed massa lobortis porttitor. Proin eu blandit libero. Etiam id ligula et tellus tincidunt porttitor. Fusce mattis imperdiet pharetra. Maecenas lorem mauris, pulvinar nec est sit amet, tristique convallis quam. Maecenas lectus eros, iaculis ac bibendum nec, fringilla in justo.</p>
		 		</div>
		 		<div class="col-md-4 left">
		 			<img src="img/snorkel.png" title="" alt=""/>
		 			<img src="" title="" alt=""/>
		 		</div>
		 	</div>
		 	<div class="container clearfix tour" id="napali">
		 		<h2>Na Pali Coast Tours</h2>
		 		<div class="col-md-7 left">
		 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus dolor, faucibus eleifend suscipit vitae, auctor a urna. Maecenas ac quam quis mi sagittis hendrerit vel eget urna. Suspendisse ac ante magna. Cras varius posuere erat, fringilla venenatis ante bibendum eget. Ut at arcu a diam elementum fermentum. Integer a enim quis dui faucibus consectetur ac vitae odio.</p>
		 			<h3>A Great Time For The Whole Family</h3>
		 			<p>Sed sed diam vitae magna luctus aliquam. Nunc imperdiet leo et neque mollis accumsan. Fusce tempus velit at ante semper, in rhoncus neque volutpat. Aenean in urna sed massa lobortis porttitor. Proin eu blandit libero. Etiam id ligula et tellus tincidunt porttitor. Fusce mattis imperdiet pharetra. Maecenas lorem mauris, pulvinar nec est sit amet, tristique convallis quam. Maecenas lectus eros, iaculis ac bibendum nec, fringilla in justo.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="img/snorkel.png" title="" alt=""/>
		 			<img src="" title="" alt=""/>
		 		</div>
		 	</div>
		 	<div class="container clearfix tour" id="snorkeling">
		 		<h2>Snorkeling Tours in Kauai</h2>
		 		<div class="col-md-7 right">
		 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus dolor, faucibus eleifend suscipit vitae, auctor a urna. Maecenas ac quam quis mi sagittis hendrerit vel eget urna. Suspendisse ac ante magna. Cras varius posuere erat, fringilla venenatis ante bibendum eget. Ut at arcu a diam elementum fermentum. Integer a enim quis dui faucibus consectetur ac vitae odio.</p>
		 			<h3>A Great Time For The Whole Family</h3>
		 			<p>Sed sed diam vitae magna luctus aliquam. Nunc imperdiet leo et neque mollis accumsan. Fusce tempus velit at ante semper, in rhoncus neque volutpat. Aenean in urna sed massa lobortis porttitor. Proin eu blandit libero. Etiam id ligula et tellus tincidunt porttitor. Fusce mattis imperdiet pharetra. Maecenas lorem mauris, pulvinar nec est sit amet, tristique convallis quam. Maecenas lectus eros, iaculis ac bibendum nec, fringilla in justo.</p>
		 		</div>
		 		<div class="col-md-5">
		 			<img src="img/snorkel.png" title="" alt=""/>
		 			<img src="" title="" alt=""/>
		 		</div>
		 	</div>
		 	<div class="container clearfix tour" id="sunset">
		 		<h2>Sunset Cruises</h2>
		 		<div class="col-md-7 left">
		 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus dolor, faucibus eleifend suscipit vitae, auctor a urna. Maecenas ac quam quis mi sagittis hendrerit vel eget urna. Suspendisse ac ante magna. Cras varius posuere erat, fringilla venenatis ante bibendum eget. Ut at arcu a diam elementum fermentum. Integer a enim quis dui faucibus consectetur ac vitae odio.</p>
		 			<h3>A Great Time For The Whole Family</h3>
		 			<p>Sed sed diam vitae magna luctus aliquam. Nunc imperdiet leo et neque mollis accumsan. Fusce tempus velit at ante semper, in rhoncus neque volutpat. Aenean in urna sed massa lobortis porttitor. Proin eu blandit libero. Etiam id ligula et tellus tincidunt porttitor. Fusce mattis imperdiet pharetra. Maecenas lorem mauris, pulvinar nec est sit amet, tristique convallis quam. Maecenas lectus eros, iaculis ac bibendum nec, fringilla in justo.</p>
		 		</div>
		 		<div class="col-md-4">
		 			<img src="img/snorkel.png" title="" alt=""/>
		 			<img src="" title="" alt=""/>
		 		</div>
		 	</div>
	 	</section>
	</section>
	<div id="bubble-container">
	  <span class="bubble bubble-sm" id="bubble-1"></span>
	  <span class="bubble bubble-md" id="bubble-2"></span>
	  <span class="bubble bubble-lg" id="bubble-3"></span>
	  <span class="bubble bubble-md" id="bubble-4"></span>
	  <span class="bubble bubble-md" id="bubble-5"></span>
	  <span class="bubble bubble-sm" id="bubble-6"></span>
	  <span class="bubble bubble-lg" id="bubble-7"></span>
	  <span class="bubble bubble-md" id="bubble-8"></span>
	  <span class="bubble bubble-sm" id="bubble-9"></span>
	  <span class="bubble bubble-sm" id="bubble10"></span>
	  <span class="bubble bubble-md" id="bubble11"></span>
	  <span class="bubble bubble-lg" id="bubble12"></span>
	  <span class="bubble bubble-md" id="bubble13"></span>
	  <span class="bubble bubble-md" id="bubble14"></span>
	</div>
 <?php include('inc/footer.php'); ?>