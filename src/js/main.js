const navToggle = document.querySelector('#nav-toggle');
const navMenuUl = document.querySelector('.nav-ul');
const navMenu = document.querySelector('#nav-menu');
const contNav = document.querySelector('.cont-nav');
	
navToggle.addEventListener('click', function (e) {
	e.preventDefault();
	this.classList.toggle('open');

    if (document.body.clientWidth > 720) {
	navMenuUl.classList.toggle('nav-open');
	}
	else { 
		navMenu.classList.toggle('nav-open');
	}
});
		