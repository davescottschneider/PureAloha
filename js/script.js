// You are viewing the jQuery script for Pure Aloha! developed
// by Dave Scott Schneider. To hire Dave call him at (734)755-8132. 

$(document).ready(function(){

	applyNavigation();
});

/* NAVIGATION FUNCTIONS */

function applyNavigation()
{
	applyClickEvent();
	applyNavigationFixForPhone();
	applyScrollSpy();
	applyStickyNavigation();
}

function applyClickEvent()
{
	$('a[href*=#]').on('click', function(e)
	{
		e.preventDefault();
		
		if( $( $.attr(this, 'href') ).length > 0 )
		{
			$('html, body').animate(
			{
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 400);
		}
		return false;
	});
}
function applyNavigationFixForPhone()
{
	$('.navbar li a').click(function(event) 
	{
		$('.navbar-collapse').removeClass('in').addClass('collapse');
	});
}


function applyScrollSpy()
{
	$('.navscrollspy').on('activate.bs.scrollspy', function() 
	{
		window.location.hash = $('.nav .active a').attr('href').replace('#', '#/');
	});
}

function applyStickyNavigation()
{
	lnStickyNavigation = $('.starthere').offset().top + 20;
	
	$(window).on('scroll', function() 
	{  
		stickyNavigation();  
	});  
	
	stickyNavigation();
}

function stickyNavigation()
{  

	menupos = $() ;

	if($(window).scrollTop() > lnStickyNavigation) 
	{   
		$('#fixedmenu').addClass('fixednav');
	}
	else 
	{
		$('#fixedmenu').removeClass('fixednav');
	}  
}

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

$(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });

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
