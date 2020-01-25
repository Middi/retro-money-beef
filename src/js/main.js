"use strict";

var navToggle = document.querySelector('#nav-toggle');
var navMenuUl = document.querySelector('.nav-ul');
var navMenu = document.querySelector('#nav-menu');
var contNav = document.querySelector('.cont-nav');

if (navToggle) {
  navToggle.addEventListener('click', function (e) {
    e.preventDefault();
    this.classList.toggle('open');

    if (document.body.clientWidth > 720) {
      navMenuUl.classList.toggle('nav-open');
    } else navMenu.classList.toggle('nav-open');
  });
}

jQuery('#user-form').ajaxForm({
  success: function success(res) {
    jQuery('.notice').html(res);
    jQuery('.notice').fadeIn();
    setTimeout(function () {
      jQuery('.notice').fadeOut();
    }, 12000);
  },
  error: function error(res) {
    console.log('nhh', res);
  }
}); // var getUrlParameter = function getUrlParameter(sParam) {
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

if(jQuery('#carousel').length > 0) {

  var carousel = jQuery('#carousel');
  var image = jQuery('#ego-2');
  var i = 0;
  
  setInterval(swap, 30);
  
  function swap() {
    carousel.css('left', i);
    i--;
    var imagePosition = image.offset();
    if(imagePosition.left < 0) {
        i = -1;
    }
  }
  
}

jQuery(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();

    var elemTop = jQuery(elem).offset().top + 40;
    var elemBottom = elemTop + jQuery(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  jQuery(window).scroll(function() {
    jQuery('.scroll-animation').each(function() {
      if (isScrolledIntoView(this) === true) {
        if(jQuery(this).hasClass('right-animate')) {
          jQuery(this).addClass('slide-in-right');
        }
        else if(jQuery(this).hasClass('down-animate')) {
          jQuery(this).addClass('slide-down');
        }
        else {
          jQuery(this).addClass('slide-in-left');
        }
      }
    });
  });
});