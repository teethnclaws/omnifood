//this was practice to change the h1 to red when the user clicks on the h1 element on the page

/*
$(document).ready(function() {
    $('h1').click(function() {
        $(this).css('background-color', '#FF0000');
    })
});

*/

//creating sticky navigation where it will be hidden and available depending on the section of the page as we scroll
$(document).ready(function() {
	$('.js--section-features').waypoint(function(direction) {
		if (direction == "down") {
			$('nav').addClass('sticky');
		}	
		
		else {
			$('nav').removeClass('sticky');
		}
	}, {
		  offset: '60px;'/* means the sticky nav will appear 60pxs before the .js--section-features class */
		});
	
	/* This is the code copied from Waypoints jQuery section
	var waypoints = $('#handler-first').waypoint(function(direction) {
		  notify(this.element.id + ' hit 25% from top of window') 
		}, {
		  offset: '25%'
		})
	*/
    
//Scroll on Buttons	defining an animated scroll to the desired sections at 1sec or 1000ms
	$('.js--scroll-to-plans').click(function() {
		$('html, body'). animate({scrollTop: $('.js--section-plans').offset().top}, 1000);
	});
	
	$('.js--scroll-to-start').click(function() {
		$('html, body'). animate({scrollTop: $('.js--section-features').offset().top}, 1000);
	});
	
/* Navigation Scroll- Googled snippet example from video. Offered snippet did not work, used another student's snippet offered on
	the course's forum page */
	
	$('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
	
/* Animations on scroll using waypoint + animate.css of a fadeIn for features text */
	$('.js--wp-1').waypoint(function(direction) {
		$('.js--wp-1').addClass('animated fadeIn');
	}, {
		/* we have to create an offset in order to get the text to appear just slightly above where we want it to */
		offset: '50%'
	});
	
	
/* Animations on scroll using waypoint + animate.css for features text */	
	$('.js--wp-2').waypoint(function(direction) {
		$('.js--wp-2').addClass('animated fadeInLeft');
	}, {
		offset: '50%'
	});


/* Animations on scroll using waypoint + animate.css for cities */
	$('.js--wp-3').waypoint(function(direction) {
		$('.js--wp-3').addClass('animated fadeIn');
	}, {
		/* we have to create an offset in order to get the text to appear just slightly above where we want it to */
		offset: '50%'
	});
	
/* Animations on scroll using waypoint + animate.css for pricing plan */
	$('.js--wp-4').waypoint(function(direction) {
		$('.js--wp-4').addClass('animated tada');
	}, {
		offset: '50%'
	});	
	
	
/* Mobile Navigation */	
	$('.js--nav-icon').click(function() {
		/* defining the following variables so it doesn't have to be repeated */
		var nav = $('.js--main-nav');
		var icon = $('.js--nav-icon i');
		
		nav.slideToggle(200);/* duration*/
		/* replacing the type of icon we are using for mobile nav with an if else */
			if (icon.hasClass('ion-navicon-round')) { 
				icon.addClass('ion-close-round');
				icon.removeClass('ion-navicon-round');
			} 
			
			else {
				icon.addClass('ion-navicon-round');
				icon.removeClass('ion-close-round');
			}
	});
	

	
//end of script	
});





