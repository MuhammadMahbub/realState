/*-----------Start layout-setting  js--------------*/

$('.layout-setting').on("click", function (e) {
	if (!(document.querySelector('body').classList.contains('dark-mode'))) {
		$('body').addClass('dark-mode');
		$('body').removeClass('transparent-mode');

		localStorage.setItem('reallistdarkMode', true);
		localStorage.removeItem('reallistlightMode');
		localStorage.removeItem('reallisttransparentMode');

		$('#myonoffswitch2').prop('checked', true);

	} else {
		$('body').removeClass('dark-mode');
		$('body').addClass('light-mode');
		$('body').removeClass('transparent-mode');

		localStorage.setItem('reallistlightMode', true);
		localStorage.removeItem('reallistdarkMode');
		localStorage.removeItem('reallisttransparentMode');

		$('#myonoffswitch1').prop('checked', true);
	}
});

/*-----------End layout-setting  js--------------*/

/* RTL version Start */
		// $('body').addClass('rtl');
/* RTL version End */

/* Light Theme Start */
	// $('body').addClass('light-mode');
/* Light Theme End */

/* Dark Theme Start */
	// $('body').addClass('dark-mode');
/* Dark Theme End */

/* Transparent Theme Start */
	// $('body').addClass('transparent-mode');
/* Transparent Theme End */

(function () {
	"use strict";
	let bodyRtl = $('body').hasClass('rtl');
	if (bodyRtl) {
		$("html[lang=en]").attr("dir", "rtl");
		$('body').removeClass('ltr');
		$("head link#style").attr("href", $(this));
		(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap-5/css/bootstrap.rtl.min.css"));
		var carousel = $('.owl-carousel');
		$.each(carousel, function (index, element) {
			// element == this
			var carouselData = $(element).data('owl.carousel');
			carouselData.settings.rtl = true; //don't know if both are necessary
			carouselData.options.rtl = true;
			$(element).trigger('refresh.owl.carousel');
		}); 
	}
})();