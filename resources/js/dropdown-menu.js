document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".edit-toggle").forEach((toggle) => {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("data-target");
            const wrapper = document.getElementById(targetId);

            if (wrapper && wrapper.classList.contains("dropdown-food")) {
                wrapper.classList.toggle("d-none");
            }
        });
    });

    document
        .querySelectorAll(".dropdown-food .dropdown-item")
        .forEach((item) => {
            item.addEventListener("click", function (e) {
                e.preventDefault();

                const recetaId = this.getAttribute("data-receta-id");
                const recetaNombre = this.getAttribute("data-receta-nombre");
                const inputId = this.getAttribute("data-target");
                const labelId = this.getAttribute("data-label");

                const input = document.getElementById(inputId);
                const label = document.getElementById(labelId);

                if (input) input.value = recetaId;
                if (label) label.textContent = recetaNombre;

                const dropdown = this.closest(".dropdown-food");
                if (dropdown) dropdown.classList.add("d-none");

                if (typeof actualizarTotales === "function") {
                    actualizarTotales();
                }
            });
        });

    function actualizarTotales() {
        let totalCalorias = 0;
        let totalProteinas = 0;

        document
            .querySelectorAll("input[type=hidden][id^='input-']")
            .forEach((input) => {
                const recetaId = input.value;
                if (recetaId && recetasInfo[recetaId]) {
                    totalCalorias +=
                        Number(recetasInfo[recetaId].total_calorias) || 0;
                    totalProteinas +=
                        Number(recetasInfo[recetaId].total_proteinas) || 0;
                }
            });

        const caloriasSpan = document.getElementById("total-calorias");
        const proteinasSpan = document.getElementById("total-proteinas");

        if (caloriasSpan) caloriasSpan.textContent = totalCalorias.toFixed(0);
        if (proteinasSpan)
            proteinasSpan.textContent = totalProteinas.toFixed(0);
    }

    actualizarTotales();
});
