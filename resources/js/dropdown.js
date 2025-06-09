//cuando se haga clic fuera del menú, este se cierre 
document.addEventListener("click", function (e) {
    const dropdowns = document.querySelectorAll(".dropdown-menu.show"); //el .show es de boostrap para controlar visibilidad
    dropdowns.forEach(function (dropdown) { //para cada drpdown abierto (show)
        if (
            !dropdown.contains(e.target) && //si clic no es en dropdown
            !e.target.closest(".dropdown-toggle") //o fuera de toggle
        ) {
            //elimina la clase show
            dropdown.classList.remove("show");
        }
    });
});
