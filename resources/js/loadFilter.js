//al borrar el campo de búsqueda, la página muestra la página sin filtros
document.addEventListener("DOMContentLoaded", () => {
    document
        .getElementById("searchInput") //busca input con ese id
        .addEventListener("input", function () { //escucha un evento input
            const searchTerm = this.value.trim();

            if (searchTerm === "") { //si el campo está vacío o el usuario borró lo qu escribió
                const currentUrl = window.location.href; //guardo la url actual
                const newUrl = currentUrl.split("?")[0]; //antes y después de ?, coge 0 (antes de ?)
                //modifica la url del nav sin recargar la página y sin agregar nueva entrada al historial
                window.history.replaceState({}, "", newUrl);

                location.reload(); //se recarga la página con la url sin ningún filtro
            }
        });
});
