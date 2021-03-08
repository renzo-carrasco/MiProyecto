$(document).ready(function(){
	$('#btn-menu').click(function(){
		if ( $ ('.btn-menu span').attr('class') == 'icon-menu') {
			$ ('.btn-menu span').removeClass('icon-menu').addClass('icon-cross');
			$ ('.menu-link').css({'left': '0'});
		} else {
			$ ('.btc-menu span').removeClass('icon-cross').addClass('icon-menu');
			$ ('.menu-link').css({'left': '-100%'});
		}

	})

})