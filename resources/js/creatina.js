document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("creatina-form");
    const resultadoDiv = document.getElementById("resultado-creatina");
    const creatinaValorSpan = document.getElementById("creatina-valor");

    const pesoInput = document.getElementById("peso");
    const cargaBoolInput = document.getElementById("cargaBool");

    const pesoError = document.getElementById("peso-error");
    const cargaBoolError = document.getElementById("cargaBool-error");

    function calcularCreatina(peso, carga) {
        const mantenimiento = +(peso * 0.03).toFixed(2);

        if (carga === "si") {
            const cargaDiaria = +(peso * 0.3).toFixed(2);

            return {
                mensaje: `Tu consumo diario de creatina aproximado sería:<br>
            <strong>Durante la fase de carga (5 a 7 días):</strong> ${cargaDiaria} g/día<br>
            <strong>Después de la fase de carga:</strong> ${mantenimiento} g/día`,
            };
        } else {
            return {
                mensaje: `Tu consumo diario de creatina aproximado sería:<br>
            <strong>Creatina recomendada:</strong> ${mantenimiento} g/día`,
            };
        }
    }

    function validarPeso() {
        const valor = pesoInput.value.trim();

        if (valor === "") {
            pesoError.textContent = "";
            pesoInput.classList.remove("is-valid", "is-invalid");
            return false;
        }

        if (/[a-zA-Z]/.test(valor)) {
            pesoError.textContent = "Solo se permiten números, no letras";
        } else if (valor.includes(",")) {
            pesoError.textContent = "Usa punto (.) para decimales.";
        } else if (isNaN(valor)) {
            pesoError.textContent = "Valor inválido. Ingresa un número";
        } else {
            const numero = parseFloat(valor);
            if (numero < 1 || numero > 500) {
                pesoError.textContent =
                    "El peso debe estar entre 1 kg y 500 kg";
            } else {
                pesoError.textContent = "";
                pesoInput.classList.add("is-valid");
                pesoInput.classList.remove("is-invalid");
                return true;
            }
        }

        pesoInput.classList.add("is-invalid");
        pesoInput.classList.remove("is-valid");
        return false;
    }

    function validarCarga() {
        const valor = cargaBoolInput.value.trim();

        if (!valor) {
            cargaBoolError.textContent = "Debes indicar si harás fase de carga";
            cargaBoolError.style.display = "block";
            cargaBoolInput.classList.add("is-invalid");
            cargaBoolInput.classList.remove("is-valid");
            return false;
        } else {
            cargaBoolError.textContent = "";
            cargaBoolError.style.display = "none";
            cargaBoolInput.classList.add("is-valid");
            cargaBoolInput.classList.remove("is-invalid");
            return true;
        }
    }

    cargaBoolInput.addEventListener("change", () =>
        validarSelect(
            cargaBoolInput,
            cargaBoolError,
            "Debes indicar si harás fase de carga"
        )
    );

    pesoInput.addEventListener("input", validarPeso);
    cargaBoolInput.addEventListener("change", validarCarga);

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const validPeso = validarPeso();
        const validCarga = validarCarga();

        if (!validPeso || !validCarga) {
            alert("Por favor, completa todos los campos correctamente.");
            return;
        }

        const peso = parseFloat(pesoInput.value);
        const carga = cargaBoolInput.value;

        const resultado = calcularCreatina(peso, carga);

        const explicacionAnt = resultadoDiv.querySelector(".text-info");
        if (explicacionAnt) explicacionAnt.remove();

        creatinaValorSpan.innerHTML = resultado.mensaje;

        const explicacion = document.createElement("p");
        explicacion.textContent = "Recomendación personalizada de creatina:";
        explicacion.classList.add("text-info");
        resultadoDiv.prepend(explicacion);

        resultadoDiv.classList.remove("d-none");
        resultadoDiv.style.opacity = 1;
    });
});
