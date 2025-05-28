document.addEventListener("click", function (e) {
    const dropdowns = document.querySelectorAll(".dropdown-menu.show");
    dropdowns.forEach(function (dropdown) {
        if (
            !dropdown.contains(e.target) &&
            !e.target.closest(".dropdown-toggle")
        ) {
            dropdown.classList.remove("show");
        }
    });
});
