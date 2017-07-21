//Open mobile nav
$(function() {
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });
  });


// Hide mobile nav on homepage at large size
$(document).ready(function(){
	var newURL = window.location.href;

	if ((newURL == "http://www.amble.us/BH_Weekly/index.php") && ($(window).width() >= 975)){
		$('aside').hide();
	}

	else {
		$('aside').show();
	}
});


// Back to top links for Past Issues section
$(document).ready(function(){
 	
 	$('.backToTop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });
});