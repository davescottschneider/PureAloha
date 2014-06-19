	<footer>
		<div class="container clearfix">
		<p></p>
		</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script>
		function StartMove() {
		var cssBGImage=new Image();
		cssBGImage.src="css/img/clouds2.png";

		window.cssMaxWidth=cssBGImage.width;
		window.cssXPos=0;
		setInterval("MoveBackGround()",70);
		}

		function MoveBackGround () {
		window.cssXPos=window.cssXPos+1;
		if (window.cssXPos>=window.cssMaxWidth) {
		window.cssXPos=0;
		}
		toMove=document.getElementById("clouds");
		toMove.style.backgroundPosition=window.cssXPos+"px 0px";

		}
	</script>
	<body onload="StartMove();">
	</footer>
</body>
</html>