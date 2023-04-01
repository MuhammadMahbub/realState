(function () {
	"use strict";

	var slideMenu = $('.side-menu');

	// Toggle Sidebar
	$('[data-bs-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	$(window).on('load resize',function(){
        if($(window).width() < 739){
            $('.my-dash').hover(function(event) {
			event.preventDefault();
			$('.app').addClass('sidenav-toggled');
			});
					}
			if($(window).width() > 739){
						$('.my-dash').hover(function(event) {
			event.preventDefault();
			$('.app').removeClass('sidenav-toggled');
			});
			}
		});
	
	// Activate sidebar slide toggle
	$("[data-bs-toggle='slide']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			slideMenu.find("[data-bs-toggle='slide']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});
	
	$("[data-bs-toggle='sub-slide']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			slideMenu.find("[data-bs-toggle='sub-slide']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-bs-toggle='slide.'].is-expanded").parent().toggleClass('is-expanded');
	
	// ______________ Sidebar
	$(".my-dash a").each(function(e) {
	  var pageUrl = window.location.href.split(/[?#]/)[0];
		if (this.href == pageUrl) { 
			$(this).addClass("active");
			$(this).parent().addClass("active"); // add active to li of the current link
			$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
			$(this).parent().parent().prev().click(); // click the item to make it drop
		}
	});

})();