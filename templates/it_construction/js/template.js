(function($) {
	// Move the Offcanvas Toggle button in the Header
	$(document).ready(function() {
		$("div.g-offcanvas-toggle:not(.offcanvas-toggle-particle)").prependTo($("#g-header"));
	});

	// Logo Height
	$(document).ready(function() {
		var logoimg = $(".g-logo-height");
		var logoHeight = logoimg.height();

		$(".g-logo").css({'height': logoHeight});
	});

	// Fixed Footer
	$(document).ready(function() {
		if( $('.fixed-footer').length ) {
			fixedFooter();

			$(window).resize(function() {
				fixedFooter();
			});
		}

		function fixedFooter() {
			var siteContainer = $("#g-container-site");
			var footerContainer = $(".fixed-footer");
			var footerHeight = $(footerContainer).height();

			$(siteContainer).css("margin-bottom", footerHeight);
		}
	});
})(jQuery);