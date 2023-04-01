(function () {
	"use strict";

	var slideMenu = $('.side-menu');
	
	$(".app-sidebar").hover(function() {
		if ($('.app').hasClass('sidenav-toggled')) {
			$('.app').addClass('sidenav-toggled1');
		}
	}, function() {
		if ($('.app').hasClass('sidenav-toggled')) {
			$('.app').removeClass('sidenav-toggled1');
		}
	});

	// Toggle Sidebar
	$(document).on('click',".app-sidebar__toggle",function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});
	
	// Activate sidebar slide toggle
	$("[data-bs-toggle='slide']").on('click', function(e) {
		var $this = $(this);
		var checkElement = $this.next();
		var animationSpeed = 300,
		slideMenuSelector = '.slide-menu';
		if (checkElement.is(slideMenuSelector) && checkElement.is(':visible')) {
		  checkElement.slideUp(animationSpeed, function() {
			checkElement.removeClass('open');
		  });
		  checkElement.parent("li").removeClass("is-expanded");
		}
		 else if ((checkElement.is(slideMenuSelector)) && (!checkElement.is(':visible'))) {
		  var parent = $this.parents('ul').first();
		  var ul = parent.find('ul:visible').slideUp(animationSpeed);
		  ul.removeClass('open');
		  var parent_li = $this.parent("li");
		  checkElement.slideDown(animationSpeed, function() {
			checkElement.addClass('open');
			parent.find('li.is-expanded').removeClass('is-expanded');
			parent_li.addClass('is-expanded');
		  });
		}
		if (checkElement.is(slideMenuSelector)) {
		  e.preventDefault();
		}
	});

	// Activate sidebar slide toggle
	$(".sub-slide-show").on('click', function(e) {
		var $this = $(this);
		var checkElement = $this.next();
		var animationSpeed = 300,
		slideMenuSelector = '.child-sub-menu';
		if (checkElement.is(slideMenuSelector) && checkElement.is(':visible')) {
		  checkElement.slideUp(animationSpeed, function() {
			checkElement.removeClass('open');
		  });
		  checkElement.parent("li").removeClass("is-expanded");
		}
		 else if ((checkElement.is(slideMenuSelector)) && (!checkElement.is(':visible'))) {
		  var parent = $this.parents('ul').first();
		  var ul = parent.find('ul:visible').slideUp(animationSpeed);
		  ul.removeClass('open');
		  var parent_li = $this.parent("li");
		  checkElement.slideDown(animationSpeed, function() {
			checkElement.addClass('open');
			parent.find('li.is-expanded').removeClass('is-expanded');
			parent_li.addClass('is-expanded');
		  });
		}
		if (checkElement.is(slideMenuSelector)) {
		  e.preventDefault();
		}
	});

	// Activate sidebar slide toggle
	$(".sub-slide2-show").on('click', function(e) {
		var $this = $(this);
		var checkElement = $this.next();
		var animationSpeed = 300,
		slideMenuSelector = '.child-sub-menu2';
		if (checkElement.is(slideMenuSelector) && checkElement.is(':visible')) {
		  checkElement.slideUp(animationSpeed, function() {
			checkElement.removeClass('open');
		  });
		  checkElement.parent("li").removeClass("is-expanded");
		}
		 else if ((checkElement.is(slideMenuSelector)) && (!checkElement.is(':visible'))) {
		  var parent = $this.parents('ul').first();
		  var ul = parent.find('ul:visible').slideUp(animationSpeed);
		  ul.removeClass('open');
		  var parent_li = $this.parent("li");
		  checkElement.slideDown(animationSpeed, function() {
			checkElement.addClass('open');
			parent.find('li.is-expanded').removeClass('is-expanded');
			parent_li.addClass('is-expanded');
		  });
		}
		if (checkElement.is(slideMenuSelector)) {
		  e.preventDefault();
		}
	});




	//Activate bootstrip tooltips
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
	})


	
	// ______________Active Class
	var position = window.location.pathname.split('/');
	$(".app-sidebar li a").each(function () {
		var $this = $(this);
		var pageUrl = $this.attr("href");
		if (pageUrl) {
			if (position[position.length - 1] == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("is-expanded");
				$(this).parent().parent().prev().addClass("active");
				$(this).parent().parent().addClass("open");
				$(this).parent().parent().prev().addClass("is-expanded");
				$(this).parent().parent().parent().addClass("is-expanded");
				$(this).parent().parent().parent().parent().addClass("open");
				$(this).parent().parent().parent().parent().prev().addClass("active");
				$(this).parent().parent().parent().parent().parent().addClass("is-expanded");
				$(this).parent().parent().parent().parent().parent().parent().prev().addClass("active");
				$(this).parent().parent().parent().parent().parent().parent().parent().addClass("is-expanded");
				return false;
			}
		}
	});
	if($('.slide-item').hasClass('active')){
		$('.app-sidebar3').animate({
			scrollTop: $('a.slide-item.active').offset().top - 600
		}, 600);
	}
	if($('.sub-slide-item').hasClass('active')){
		$('.app-sidebar3').animate({
			scrollTop: $('a.sub-slide-item.active').offset().top - 600
		}, 600);
	}

	$('.app-sidebar').scroll(function() {
		var s = $(".app-sidebar .ps__rail-y");
		if (s[0].style.top.split('px')[0] <= 30) {
			$('.app-sidebar').removeClass('sidemenu-scroll')
		} else {
			$('.app-sidebar').addClass('sidemenu-scroll')
		}
	
	})
	
})();

