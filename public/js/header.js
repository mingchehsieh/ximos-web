;(function($){

	var num = 50; //number of pixels before modifying styles

	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > num) {
	        $('.header-fixed').css("top", "-50px");
	    } else {
			$('.header-fixed').css("top", "0");
		}
	});

})(jQuery);
