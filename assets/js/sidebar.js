const toggleBtn = document.querySelectorAll(".toggle-btn");
const sidebar = document.getElementById("sidebar");

// Load sidebar state on page load
window.addEventListener("DOMContentLoaded", () => {
	// Restore saved sidebar state
	const isCropped = localStorage.getItem("sidebarState") === "cropped";
	if (isCropped) {
		sidebar.classList.add("cropped");
	}

	// toggle button to cropped sidebar
	toggleBtn.forEach((btn) => {
		btn.addEventListener("click", () => {
			sidebar.classList.toggle("cropped");

			// Save new state
			const newState = sidebar.classList.contains("cropped") ? "cropped" : "";
			localStorage.setItem("sidebarState", newState);
		});
	});
});
