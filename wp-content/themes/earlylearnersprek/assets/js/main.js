
// Add your nice, nice JavaScript here
// And minify! Time to check out Grunt or Gulp - what else to you have to do this weekend?

$(document).ready( function() {

	// Put some nice JavaScript in here.
	var $nav_main = $('#nav-main'),
		$nav_link = $('#nav-link'),
		$nav_drop = $('#nav-drop');

	$nav_link.click( function(e) {
		$nav_main.toggleClass('active');
		$nav_link.toggleClass('active');
		return false;
	});

	$('.nav-items').children('li').children('a').click(function(e) {
		e.preventDefault();
		if ($(this).parent().children('ul').length > 0) {
		$(this).parent().children('ul').toggle();

	}else{
		location.href = $(this).attr('href');
	}
	});

});

