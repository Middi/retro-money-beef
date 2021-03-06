"use strict";

// ===========================
// Nav Bar
// ===========================
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
} // ===========================
// Smooth Scrolling
// ===========================


jQuery('body').on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  var target_offset = jQuery(this.hash).offset() ? jQuery(this.hash).offset().top : 0; //change this number to create the additional off set        

  var customoffset = 60;
  jQuery('html, body').animate({
    scrollTop: target_offset - customoffset
  }, 1000);
  navMenu.classList.toggle('nav-open');
  navToggle.classList.toggle('open');
}); // ===========================
// AJAX Forms
// ===========================

jQuery('#user-form').ajaxForm({
  success: function success(res) {
    var status = JSON.parse(res).status;
    var message = JSON.parse(res).message;
    status ? status = 'success' : status = 'error';

    function messageUpdate() {
      jQuery('.alert p').html(message);
      jQuery('.alert').addClass(status).fadeIn();
    }

    if (status === 'success') {
      jQuery('#user-form').fadeOut("fast", function () {
        messageUpdate();
      });
    } else {
      messageUpdate();
      jQuery('.alert').delay(1500).fadeOut();
    } // TODO: needs to be admin js file


    jQuery('.notice').html(message);
    jQuery('.notice').fadeIn();
    setTimeout(function () {
      jQuery('.notice').fadeOut();
    }, 12000);
  },
  error: function error(res) {
    console.log('Something went wrong', res);
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
// ===========================
// Egobar
// ===========================

if (jQuery('#carousel').length > 0) {
  var swap = function swap() {
    carousel.css('left', i);
    i--;
    var imagePosition = image.offset();

    if (imagePosition.left < 0) {
      i = -1;
    }
  };

  var carousel = jQuery('#carousel');
  var image = jQuery('#ego-2');
  var i = 0;
  setInterval(swap, 30);
} // ===========================
// Scroll Animation
// ===========================


jQuery(document).ready(function () {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();
    var elemTop = jQuery(elem).offset().top + 40;
    var elemBottom = elemTop + jQuery(elem).height();
    return elemBottom <= docViewBottom && elemTop >= docViewTop;
  } // If element is scrolled into view, fade it in


  jQuery(window).scroll(function () {
    jQuery('.scroll-animation').each(function () {
      if (isScrolledIntoView(this) === true) {
        if (jQuery(this).hasClass('right-animate')) {
          jQuery(this).addClass('slide-in-right');
        } else if (jQuery(this).hasClass('down-animate')) {
          jQuery(this).addClass('slide-down');
        } else jQuery(this).addClass('slide-in-left');
      }
    });
  });
});