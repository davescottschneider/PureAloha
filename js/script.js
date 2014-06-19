// You are viewing the jQuery script for Pure Aloha! developed
// by Dave Scott Schneider. To hire Dave call him at (734)755-8132. 

$(document).ready(function(){

tour = $('.tour');

   $(window).scroll(function () {
	   	tour.each(function(){
		var scrollTop     = $(window).scrollTop();
	    var elementOffset = $(this).offset().top;
	    var distance      = (elementOffset - scrollTop);

	       if (distance < 500) {
	        	$(this).stop().animate({opacity: 1}, 500);
	     	} else {
	     		$(this).stop().animate({opacity: 0}, 500);
	     	};

       });
    });
});

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

function pauseBG(){
	window.cssXPos=window.cssXPos;
}