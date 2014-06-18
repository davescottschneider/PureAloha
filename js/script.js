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