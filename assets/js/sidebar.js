const toggleBtn = document.querySelectorAll(".toggle-btn");
const sidebar = document.getElementById("sidebar");

// Load sidebar state on page load
window.addEventListener("DOMContentLoaded", () => {
	// toggle button to cropped sidebar
	toggleBtn.forEach((btn) => {
		btn.addEventListener("click", () => {
			sidebar.classList.toggle("cropped");
		});
	});
});
