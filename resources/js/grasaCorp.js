document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("grasa-corp-form");
    const resultadoDiv = document.getElementById("resultado-grasa-corp");
    const grasaValor = document.getElementById("grasa-corp-valor");

    const edadInput = document.getElementById("edad");
    const pesoInput = document.getElementById("peso");
    const alturaInput = document.getElementById("altura");
    const sexoInput = document.getElementById("sexo");

    const edadError = document.getElementById("edad-error");
    const pesoError = document.getElementById("peso-error");
    const alturaError = document.getElementById("altura-error");
    const sexoError = document.getElementById("sexo-error");

    function log10(x) {
        return Math.log(x) / Math.LN10;
    }

    function calcularGrasaCorporal(altura, cuello, cintura, cadera, sexo) {
        if (sexo === "hombre") {
            return (
                495 /
                    (1.0324 -
                        0.19077 * log10(cintura - cuello) +
                        0.15456 * log10(altura)) -
                450
            );
        } else {
            return (
                495 /
                    (1.29579 -
                        0.35004 * log10(cintura + cadera - cuello) +
                        0.221 * log10(altura)) -
                450
            );
        }
    }

    function validarCampo(
        input,
        errorElement,
        tipo = "float",
        min = 1,
        max = 300
    ) {
        let valor = input.value.trim().replace(",", ".");
        if (valor === "") {
            errorElement.textContent = "";
            input.classList.remove("is-valid", "is-invalid");
            return false;
        }

        if (/[a-zA-Z]/.test(valor)) {
            errorElement.textContent = "Solo se permiten números, no letras";
        } else if (isNaN(valor)) {
            errorElement.textContent = "Valor inválido. Ingresa un número.";
        } else {
            const numero = tipo === "int" ? parseInt(valor) : parseFloat(valor);
            if (numero < min || numero > max) {
                errorElement.textContent = `Debe estar entre ${min} y ${max}`;
            } else {
                errorElement.textContent = "";
                input.classList.add("is-valid");
                input.classList.remove("is-invalid");
                return true;
            }
        }

        input.classList.add("is-invalid");
        input.classList.remove("is-valid");
        return false;
    }

    function validarSelect(selectInput, errorElement, mensaje) {
        const valor = selectInput.value.trim();
        if (!valor) {
            errorElement.textContent = mensaje;
            errorElement.style.display = "block";
            selectInput.classList.add("is-invalid");
            selectInput.classList.remove("is-valid");
            return false;
        } else {
            errorElement.textContent = "";
            errorElement.style.display = "none";
            selectInput.classList.add("is-valid");
            selectInput.classList.remove("is-invalid");
            return true;
        }
    }

    pesoInput.addEventListener("input", () =>
        validarCampo(pesoInput, pesoError)
    );
    alturaInput.addEventListener("input", () =>
        validarCampo(alturaInput, alturaError, "int", 50, 300)
    );
    edadInput.addEventListener("input", () =>
        validarCampo(edadInput, edadError, "int", 5, 110)
    );
    sexoInput.addEventListener("change", () =>
        validarSelect(sexoInput, sexoError, "Debes seleccionar tu sexo")
    );

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const validEdad = validarCampo(edadInput, edadError, "int", 5, 110);
        const validPeso = validarCampo(pesoInput, pesoError);
        const validAltura = validarCampo(
            alturaInput,
            alturaError,
            "int",
            50,
            300
        );
        const validSexo = validarSelect(
            sexoInput,
            sexoError,
            "Debes seleccionar tu sexo"
        );

        if (!validEdad || !validPeso || !validAltura || !validSexo) {
            alert("Por favor, completa todos los campos correctamente.");
            return;
        }

        const edad = parseInt(edadInput.value);
        const peso = parseFloat(pesoInput.value);
        const altura = parseFloat(alturaInput.value);
        const sexo = sexoInput.value;

        const cuello = 38;
        const cintura = sexo === "hombre" ? 90 : 75;
        const cadera = sexo === "mujer" ? 95 : 0;

        const grasa = calcularGrasaCorporal(
            altura,
            cuello,
            cintura,
            cadera,
            sexo
        );
        const grasaRedondeada = Math.round(grasa * 10) / 10;

        grasaValor.innerHTML = `Tu porcentaje estimado de grasa corporal es: <strong>${grasaRedondeada}%</strong>`;
        resultadoDiv.style.opacity = 1;
        resultadoDiv.scrollIntoView({ behavior: "smooth" });
    });
});
