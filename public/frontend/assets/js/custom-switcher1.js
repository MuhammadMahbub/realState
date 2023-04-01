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

/*-----------Start Switcher js--------------*/

// ---------------Start LTR-----------------//
$('#myonoffswitch23').click(function () {
	if (this.checked) {
		$("#global-loader").fadeOut("slow");
		// checkDir();
		$('body').addClass('ltr');
		$("html[lang=en]").attr("dir", "ltr");
		$('body').removeClass('rtl');
		localStorage.setItem('reallistltr', true)
        localStorage.removeItem('reallistrtl')
		$("head link#style").attr("href", $(this));
		(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap-5/css/bootstrap.min.css"));
		var carousel = $('.owl-carousel');
		$.each(carousel, function (index, element) {
			// element == this
			var carouselData = $(element).data('owl.carousel');
			carouselData.settings.rtl = false; //don't know if both are necessary
			carouselData.options.rtl = false;
			$(element).trigger('refresh.owl.carousel');
			// directionCheck('ltr');
		});
	}
});
// ---------------End LTR-----------------//

// ---------------Start RTL-----------------//
$('#myonoffswitch24').click(function () {
	if (this.checked) {
		$("#global-loader").fadeOut("slow");
		$('body').addClass('rtl');
		$("html[lang=en]").attr("dir", "rtl");
		$('body').removeClass('ltr');
		localStorage.setItem('reallistrtl', true)
        localStorage.removeItem('reallistltr')
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
});
// ---------------End RTL-----------------//



// ---------------Start Light-mode-----------------//
$(document).on("click", '#myonoffswitch1', function () {
	if (this.checked) {
		$('body').addClass('light-mode');
		$('body').removeClass('dark-mode');
		$('body').removeClass('transparent-mode');

		// remove dark theme properties	
		localStorage.removeItem('reallistdarkPrimary')
		localStorage.removeItem('reallistdarksecondary')
		// remove transparent theme properties	
		localStorage.removeItem('reallisttransparentPrimary')
		localStorage.removeItem('reallisttransparentsecondary')

		// remove light theme properties
		localStorage.removeItem('reallistprimaryColor')
		localStorage.removeItem('reallistprimaryHoverColor')
		localStorage.removeItem('reallistprimaryBorderColor')
		localStorage.removeItem('reallistprimaryTransparent')
		localStorage.removeItem('reallistsecondaryColor')
		localStorage.removeItem('reallistsecondaryHoverColor')
		localStorage.removeItem('reallistsecondaryTransparentColor')
		localStorage.removeItem('reallisttransparentcolor')
		localStorage.removeItem('reallisttransparentcolor2')

		localStorage.setItem('reallistlightMode', true);
        localStorage.removeItem('reallistdarkMode');
        localStorage.removeItem('reallisttransparentMode');


		// $('#myonoffswitch1').prop('checked', true);
		// $('#myonoffswitch2').prop('checked', false);
		// $('#myonoffswitch3').prop('checked', false);

		const root = document.querySelector(':root');
		root.style = "";
		names()
	} else {
		$('body').removeClass('light-mode');
		localStorage.removeItem("light-mode");
	}
	localStorageBackup();
});
// ---------------End Light-mode-----------------//

// ---------------Start Dark-mode-----------------//
$(document).on("click", '#myonoffswitch2', function () {
	if (this.checked) {
		$('body').addClass('dark-mode');
		$('body').removeClass('light-mode');
		$('body').removeClass('transparent-mode');

		// remove dark theme properties	
		localStorage.removeItem('reallistdarkPrimary')
		localStorage.removeItem('reallistdarksecondary')
		// remove transparent theme properties	
		localStorage.removeItem('reallisttransparentPrimary')
		localStorage.removeItem('reallisttransparentsecondary')

		// remove light theme properties
		localStorage.removeItem('reallistprimaryColor')
		localStorage.removeItem('reallistprimaryHoverColor')
		localStorage.removeItem('reallistprimaryBorderColor')
		localStorage.removeItem('reallistprimaryTransparent')
		localStorage.removeItem('reallistsecondaryColor')
		localStorage.removeItem('reallistsecondaryHoverColor')
		localStorage.removeItem('reallistsecondaryTransparentColor')
		localStorage.removeItem('reallisttransparentcolor')
		localStorage.removeItem('reallisttransparentcolor2')

		localStorage.setItem('reallistdarkMode', true);
        localStorage.removeItem('reallistlightMode');
        localStorage.removeItem('reallisttransparentMode');


		// $('#myonoffswitch1').prop('checked', false);
		// $('#myonoffswitch2').prop('checked', true);
		// $('#myonoffswitch3').prop('checked', false);
		const root = document.querySelector(':root');
		root.style = "";
		names()
	} else {
		$('body').removeClass('dark-mode');
		localStorage.removeItem("dark-mode");
	}
	localStorageBackup()
});
// ---------------End Dark-mode-----------------//

// ---------------Start Transparent -mode-----------------//
$(document).on("click", '#myonoffswitch3', function () {
	if (this.checked) {
		$('body').addClass('transparent-mode');
		$('body').removeClass('dark-mode');
		$('body').removeClass('light-mode');

		// remove dark theme properties	
		localStorage.removeItem('reallistdarkPrimary')
		localStorage.removeItem('reallistdarksecondary')
		// remove transparent theme properties	
		localStorage.removeItem('reallisttransparentPrimary')
		localStorage.removeItem('reallisttransparentsecondary')

		// remove light theme properties
		localStorage.removeItem('reallistprimaryColor')
		localStorage.removeItem('reallistprimaryHoverColor')
		localStorage.removeItem('reallistprimaryBorderColor')
		localStorage.removeItem('reallistprimaryTransparent')
		localStorage.removeItem('reallistsecondaryColor')
		localStorage.removeItem('reallistsecondaryHoverColor')
		localStorage.removeItem('reallistsecondaryTransparentColor')
		localStorage.removeItem('reallisttransparentcolor')
		localStorage.removeItem('reallisttransparentcolor2')

		localStorage.setItem('reallisttransparentMode', true);
        localStorage.removeItem('reallistlightMode');
        localStorage.removeItem('reallistdarkMode');


		// $('#myonoffswitch1').prop('checked', false);
		// $('#myonoffswitch2').prop('checked', false);
		// $('#myonoffswitch3').prop('checked', true);
		const root = document.querySelector(':root');
		root.style = "";
		names()
	} else {
		$('body').removeClass('transparent-mode');
		localStorage.removeItem("transparent-mode");
	}
	localStorageBackup()
});
// ---------------End Transparent-mode-----------------//

/*-----------End Switcher js--------------*/

(function () {
	"use strict";
	let bodyRtl = $('body').hasClass('rtl');
	if (bodyRtl) {
		$("html[lang=en]").attr("dir", "rtl");
		$('body').removeClass('ltr');
		localStorage.setItem('reallistrtl', true)
        localStorage.removeItem('reallistltr')
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


function resetData() {
	$('#myonoffswitch1').prop('checked', true);
	$('#myonoffswitch23').prop('checked', true);
	names();
	$('body')?.removeClass('light-mode');
	$('body')?.removeClass('dark-mode');
	$('body')?.removeClass('transparent-mode');
	$('body')?.removeClass('rtl');
	names();



	$('body').addClass('ltr');
	$("html[lang=en]").attr("dir", "ltr");
	$('body').removeClass('rtl');
	localStorage.setItem('reallistltr', true)
	localStorage.removeItem('reallistrtl')
	$("head link#style").attr("href", $(this));
	(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap-5/css/bootstrap.min.css"));
	var carousel = $('.owl-carousel');
	$.each(carousel, function (index, element) {
		// element == this
		var carouselData = $(element).data('owl.carousel');
		carouselData.settings.rtl = false; //don't know if both are necessary
		carouselData.options.rtl = false;
		$(element).trigger('refresh.owl.carousel');
		// directionCheck('ltr');
	});
}