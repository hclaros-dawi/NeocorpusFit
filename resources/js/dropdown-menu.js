//al hacer clic en el botón editar (receta), controlar el desplegable
//y que al seleccionar item se actualicen campos, se oculta menú y actualizan totales
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".edit-toggle").forEach((toggle) => {
        toggle.addEventListener("click", function (e) {
            //a cada uno de los elementos edit-toggle le añado evento click
            e.preventDefault();
            const targetId = this.getAttribute("data-target"); //obtengo valor de atributo data-target (id de otro elemento)
            const wrapper = document.getElementById(targetId); //busco elemento con ese id

            if (wrapper && wrapper.classList.contains("dropdown-food")) {
                //si existe y tiene esa clase
                wrapper.classList.toggle("d-none"); //se alterna esa clase (mostrar u ocultar)
            }
        });
    });

    document
        .querySelectorAll(".dropdown-food .dropdown-item") //busco todos elementos con clase.. item dentro de ..food
        .forEach((item) => {
            item.addEventListener("click", function (e) {
                //a cada uno le añado el evento click
                e.preventDefault();

                //obtengo id receta seleccionada
                const recetaId = this.getAttribute("data-receta-id");
                //nombre de receta
                const recetaNombre = this.getAttribute("data-receta-nombre");

                //id del input donde se guardará el id de la receta
                const inputId = this.getAttribute("data-target");
                //id de un label o span donde se mostrará el nombre de la receta
                const labelId = this.getAttribute("data-label");
                const input = document.getElementById(inputId);
                const label = document.getElementById(labelId);

                //se intercambia el valor del input por id receta y el label por su nombre
                if (input) input.value = recetaId;
                if (label) label.textContent = recetaNombre;

                //busca esa clase más cercana al elemento sobre el que ha hecho clic
                const dropdown = this.closest(".dropdown-food");
                if (dropdown) dropdown.classList.add("d-none"); //se oculta

                if (typeof actualizarTotales === "function") {
                    //cada vex que el usuario selecciona una receta
                    actualizarTotales(); //actualiza totales solo si es una función válida
                }
            });
        });

    function actualizarTotales() {
        let totalCalorias = 0;
        let totalProteinas = 0;

        document
            .querySelectorAll("input[type=hidden][id^='input-']") //busca todos los input type hidden cuyo id comience con input-
            .forEach((input) => {
                const recetaId = input.value; //para cada uno, obtiene el valor (id de la receta)
                if (recetaId && recetasInfo[recetaId]) {
                    //verifica que exista y que esté dentro de recetasInfo
                    //suma calorías y proteínas de esa receta a los totales
                    totalCalorias +=
                        Number(recetasInfo[recetaId].total_calorias) || 0;
                    totalProteinas +=
                        Number(recetasInfo[recetaId].total_proteinas) || 0;
                }
            });

        //lo muestra en la vista
        const caloriasSpan = document.getElementById("total-calorias");
        const proteinasSpan = document.getElementById("total-proteinas");

        //si ya existen, se actualizan
        if (caloriasSpan) caloriasSpan.textContent = totalCalorias.toFixed(0);
        if (proteinasSpan)
            proteinasSpan.textContent = totalProteinas.toFixed(0);
    }

    actualizarTotales(); //al cargar la página
});
