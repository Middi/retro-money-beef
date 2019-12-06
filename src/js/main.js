const navToggle = document.querySelector('#nav-toggle');
const navMenu = document.querySelector('#nav-menu');
	
navToggle.addEventListener('click', function (e) {
	e.preventDefault();
	this.classList.toggle('open');
	navMenu.classList.toggle('nav-open');
});
		