"use strict";

var navToggle = document.querySelector('#nav-toggle');
var navMenu = document.querySelector('#nav-menu');
navToggle.addEventListener('click', function (e) {
  e.preventDefault();
  this.classList.toggle('open');
  navMenu.classList.toggle('nav-open');
});