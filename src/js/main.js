const navToggle = document.querySelector('#nav-toggle');
const navMenuUl = document.querySelector('.nav-ul');
const navMenu = document.querySelector('#nav-menu');
const contNav = document.querySelector('.cont-nav');
	
if(navToggle) {
	navToggle.addEventListener('click', function (e) {
		e.preventDefault();
		this.classList.toggle('open');
	
		if (document.body.clientWidth > 720) {
			navMenuUl.classList.toggle('nav-open');
		}
		else navMenu.classList.toggle('nav-open');
	});
}

	jQuery('#user-form').ajaxForm({
		success: function(res) {
			console.log(res);
			jQuery('.notice').html(res);

			jQuery('.notice').fadeIn();
			setTimeout(function(){
				jQuery('.notice').fadeOut();
			  	}, 2000);
			},
		error: function(res) {
			console.log('nhh', res)
		}
	});



	// var getUrlParameter = function getUrlParameter(sParam) {
	// 	var sPageURL = window.location.search.substring(1),
	// 		sURLVariables = sPageURL.split('&'),
	// 		sParameterName,
	// 		i;
	
	// 	for (i = 0; i < sURLVariables.length; i++) {
	// 		sParameterName = sURLVariables[i].split('=');
	
	// 		if (sParameterName[0] === sParam) {
	// 			return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
	// 		}
	// 	}
	// };
	// jQuery( document ).ready(function() {
	// 	console.log( "ready!" );
	// 	jQuery('#acf-field_5df80db3d9ca0').val(getUrlParameter('customer'));
	// });
	
