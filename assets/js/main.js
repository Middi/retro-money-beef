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
    console.log(res);
    jQuery('.notice').html(res);
    jQuery('.notice').fadeIn();
    setTimeout(function () {
      jQuery('.notice').fadeOut();
    }, 2000);
  },
  error: function error(res) {
    console.log('nhh', res);
  }
});