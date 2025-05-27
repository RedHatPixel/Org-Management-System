window.addEventListener("scroll", () => {
	const navbar = document.querySelector(".navbar-container");
	const scrollTop = window.scrollY || document.documentElement.scrollTop;

	if (scrollTop > navbar.offsetHeight) {
		navbar.classList.add("scrolled");
	} else {
		navbar.classList.remove("scrolled");
	}
});

window.addEventListener("DOMContentLoaded", () => {
	const openMenu = document.querySelector(".menu-opener");
	const closeMenu = document.querySelector(".menu-closer");
	const navbar = document.querySelector(".navbar");

	openMenu.addEventListener("click", () => {
		navbar.classList.add("show");
	});

	closeMenu.addEventListener("click", () => {
		navbar.classList.remove("show");
	});
});
