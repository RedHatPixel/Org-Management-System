const toggleIcons = document.querySelectorAll(".toggle-password");

toggleIcons.forEach((icon) => {
	icon.addEventListener("click", () => {
		const passwordInput = icon.previousElementSibling; // assumes input is right before icon

		console.log("Toggling password visibility for:", passwordInput);

		if (passwordInput && passwordInput.type === "password") {
			passwordInput.type = "text";
			icon.textContent = "visibility_off";
		} else if (passwordInput) {
			passwordInput.type = "password";
			icon.textContent = "visibility";
		}
	});
});
