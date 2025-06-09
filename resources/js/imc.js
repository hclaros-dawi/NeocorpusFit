document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("imc-form");
    const resultadoDiv = document.getElementById("resultado");
    const imcValorSpan = document.getElementById("imc-valor");
    const pesoInput = document.getElementById("peso");
    const alturaInput = document.getElementById("altura");
    const pesoError = document.getElementById("peso-error");
    const alturaError = document.getElementById("altura-error");

    function validarPeso() {
        let valor = pesoInput.value.trim();

        valor = valor.replace(",", "."); //comas por puntos

        if (valor === "") {
            pesoError.textContent = "";
            pesoInput.classList.remove("is-valid", "is-invalid");
            return false;
        }

        if (/[a-zA-Z]/.test(valor)) { //si hay letras mayúsculas o minúsculas en valor
            pesoError.textContent = "Solo se permiten números, no letras";
        } else if (isNaN(valor)) {
            pesoError.textContent = "Valor inválido. Ingresa un número";
        } else {
            //si num válido a decimal
            const numero = parseFloat(valor);
            if (numero < 1 || numero > 300) {
                pesoError.textContent =
                    "El peso debe estar entre 1 kg y 300 kg";
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

    function validarAltura() {
        const valor = alturaInput.value.trim();

        if (valor === "") {
            alturaError.textContent = "";
            alturaInput.classList.remove("is-valid", "is-invalid");
            return;
        }

        if (/[a-zA-Z.,]/.test(valor)) { //punto de decimal
            alturaError.textContent =
                "Solo se permiten números enteros, sin letras ni símbolos.";
        } else if (isNaN(valor)) {
            alturaError.textContent = "Valor inválido. Ingresa un número.";
        } else {
            const numero = parseInt(valor, 10);
            if (numero < 50 || numero > 300) {
                alturaError.textContent =
                    "La altura debe estar entre 50 y 300 cm.";
            } else {
                alturaError.textContent = "";
                alturaInput.classList.add("is-valid");
                alturaInput.classList.remove("is-invalid");
                return;
            }
        }

        alturaInput.classList.add("is-invalid");
        alturaInput.classList.remove("is-valid");
    }

    //cada vez que se escribe en input o altura, se valida
    pesoInput.addEventListener("input", validarPeso);
    alturaInput.addEventListener("input", validarAltura);

    //cuando se envía el formulario
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        //para asegurarse de que datos a enviar correctos
        validarPeso();
        validarAltura();

        const pesoValido = !pesoInput.classList.contains("is-invalid");
        const alturaValida = !alturaInput.classList.contains("is-invalid");

        //si invalid--> no se calcula nada
        if (!pesoValido || !alturaValida) return;

        const peso = parseFloat(pesoInput.value);
        const alturaCm = parseInt(alturaInput.value, 10);
        const alturaM = alturaCm / 100; //para calcular imc
        const imc = peso / (alturaM * alturaM);
        const imcRounded = imc.toFixed(1); //a 1 decimal

        imcValorSpan.textContent = imcRounded;
        resultadoDiv.classList.remove("d-none"); //quita oculto
        resultadoDiv.style.opacity = 1; //cambia opacity para que se vea

        const clasificacionSpan = document.getElementById("clasificacion-imc");

        let clasificacion = "";
        if (imc < 18.5) {
            clasificacion = "Inferior a lo normal";
        } else if (imc < 25) {
            clasificacion = "Normal";
        } else if (imc < 30) {
            clasificacion = "Superior a lo normal";
        } else {
            clasificacion = "Obesidad";
        }

        clasificacionSpan.textContent = `Clasificación: ${clasificacion}`;
        clasificacionSpan.classList.remove( //quita clases previas de colores
            "text-success",
            "text-warning",
            "text-danger",
            "text-info"
        );

        if (clasificacion === "Normal") {
            clasificacionSpan.classList.add("text-success");
        } else if (clasificacion === "Inferior a lo normal") {
            clasificacionSpan.classList.add("text-info");
        } else if (clasificacion === "Superior a lo normal") {
            clasificacionSpan.classList.add("text-warning");
        } else {
            clasificacionSpan.classList.add("text-danger");
        }
    });
});
