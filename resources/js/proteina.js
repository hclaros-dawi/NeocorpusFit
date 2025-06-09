document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("proteina-form");
    const resultadoDiv = document.getElementById("resultado-proteina");
    const proteinaValorSpan = document.getElementById("proteina-valor");

    const pesoInput = document.getElementById("peso");
    const sexoInput = document.getElementById("sexo");
    const actividadInput = document.getElementById("actividad");
    const entrenamientoInput = document.getElementById("entrenamiento");
    const grasaInput = document.getElementById("grasa");

    const pesoError = document.getElementById("peso-error");
    const sexoError = document.getElementById("sexo-error");
    const actividadError = document.getElementById("actividad-error");
    const entrenamientoError = document.getElementById("entrenamiento-error");
    const grasaError = document.getElementById("grasa-error");

    function calcularProteinas(peso, sexo, actividad, entrenamiento, grasa) {
        //valores base
        let factorMin = 1.6;
        let factorMax = 2.2;

        switch (actividad) {
            case "sedentario":
                break;
            case "ligera":
                factorMin += 0.1;
                factorMax += 0.2;
                break;
            case "moderada":
                factorMin += 0.2;
                factorMax += 0.3;
                break;
            case "intensa":
                factorMin += 0.3;
                factorMax += 0.4;
                break;
            case "muy-intensa":
                factorMin += 0.4;
                factorMax += 0.5;
                break;
            default:
                break;
        }

        if (entrenamiento === "fuerza") {
            factorMax += 0.3;
        } else if (entrenamiento === "cardio") {
            factorMin -= 0.1;
        }

        if (sexo === "mujer") {
            factorMin -= 0.1;
            factorMax -= 0.1;
        }

        if (grasa > 25) {
            factorMin -= 0.2;
            factorMax -= 0.2;
        }

        const proteinaMin = Math.round(peso * factorMin);
        const proteinaMax = Math.round(peso * factorMax);

        return [proteinaMin, proteinaMax];
    }

    function validarPeso() {
        const valor = pesoInput.value.trim();

        if (valor === "") {
            pesoError.textContent = "";
            pesoInput.classList.remove("is-valid", "is-invalid");
            return false;
        }

        if (/[a-zA-Z]/.test(valor)) {
            pesoError.textContent = "Solo se permiten números, no letras.";
        } else if (valor.includes(",")) {
            pesoError.textContent =
                "Usa punto (.) en lugar de coma (,) para decimales.";
        } else if (isNaN(valor)) {
            pesoError.textContent = "Valor inválido. Ingresa un número.";
        } else {
            const numero = parseFloat(valor);
            if (numero < 1 || numero > 300) {
                pesoError.textContent =
                    "El peso debe estar entre 1 kg y 300 kg.";
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

    function validarGrasa() {
        const valor = grasaInput.value.trim();
        const grasaError = document.getElementById("grasa-error");

        grasaInput.value = grasaInput.value.replace(",", ".");

        if (valor === "") {
            grasaError.textContent = "Este campo es obligatorio";
            grasaInput.classList.add("is-invalid");
            grasaInput.classList.remove("is-valid");
            grasaError.style.display = "block";
            return false;
        }

        const numero = parseFloat(valor);
        if (numero < 1 || numero > 60) {
            grasaError.textContent = "Introduce un valor entre 1% y 60%";
            grasaInput.classList.add("is-invalid");
            grasaInput.classList.remove("is-valid");
            grasaError.style.display = "block";
            return false;
        }

        //si el valor de grasa es válido
        grasaError.textContent = "";
        grasaInput.classList.add("is-valid");
        grasaInput.classList.remove("is-invalid");
        grasaError.style.display = "none";
        return true;
    }

    //selectInput es el elemento <select> a validar
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

    //cuando se cambia la opción seleccionada en el select, se valida esa opción
    sexoInput.addEventListener("change", () =>
        validarSelect(sexoInput, sexoError, "Debes seleccionar tu sexo")
    );
    actividadInput.addEventListener("change", () =>
        validarSelect(
            actividadInput,
            actividadError,
            "Debes seleccionar tu nivel de actividad"
        )
    );
    entrenamientoInput.addEventListener("change", () =>
        validarSelect(
            entrenamientoInput,
            entrenamientoError,
            "Debes seleccionar tu entrenamiento"
        )
    );

    //cuando se introducen inputs para estos, se validan los valores
    pesoInput.addEventListener("input", validarPeso);
    grasaInput.addEventListener("input", validarGrasa);

    //cuando se envía el formulario
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        //para asegurarse de que datos a enviar correctos
        const validPeso = validarPeso();
        const validGrasa = validarGrasa();
        const validSexo = validarSelect(
            sexoInput,
            sexoError,
            "Debes seleccionar tu sexo"
        );
        const validActividad = validarSelect(
            actividadInput,
            actividadError,
            "Debes seleccionar tu nivel de actividad"
        );
        const validEntrenamiento = validarSelect(
            entrenamientoInput,
            entrenamientoError,
            "Debes seleccionar tu entrenamiento"
        );

        //si invalid--> no se calcula nada
        if (
            !validPeso ||
            !validGrasa ||
            !validSexo ||
            !validActividad ||
            !validEntrenamiento
        ) {
            alert("Por favor, completa todos los campos correctamente.");
            return;
        }

        const peso = parseFloat(pesoInput.value);
        const grasa = parseFloat(grasaInput.value);
        const sexo = sexoInput.value;
        const actividad = actividadInput.value;
        const entrenamiento = entrenamientoInput.value;

        const [proteinaMin, proteinaMax] = calcularProteinas(
            peso,
            sexo,
            actividad,
            entrenamiento,
            grasa
        );

        //si hay explicación anterior, se borra
        const explicacionAnt = resultadoDiv.querySelector(".text-info");
        if (explicacionAnt) explicacionAnt.remove();

        proteinaValorSpan.textContent = `${proteinaMin} a ${proteinaMax} gramos / día`;

        const explicacion = document.createElement("p");
        explicacion.textContent =
            "Tu necesidad proteica diaria para aumentar masa muscular:";
        explicacion.classList.add("text-info");
        resultadoDiv.prepend(explicacion);

        resultadoDiv.classList.remove("d-none");
        resultadoDiv.style.opacity = 1;
    });
});
