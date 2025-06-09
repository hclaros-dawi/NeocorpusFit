document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("harris-b-form");
    const resultadoDiv = document.getElementById("resultado-harris-b");
    const mensajeCalorias = document.getElementById("mensaje-calorias");

    const pesoInput = document.getElementById("peso");
    const alturaInput = document.getElementById("altura");
    const edadInput = document.getElementById("edad");
    const sexoInput = document.getElementById("sexo");
    const actividadInput = document.getElementById("actividad");
    const objetivoInput = document.getElementById("objetivo");

    const pesoError = document.getElementById("peso-error");
    const alturaError = document.getElementById("altura-error");
    const edadError = document.getElementById("edad-error");

    const sexoError = document.getElementById("sexo-error");
    const actividadError = document.getElementById("actividad-error");
    const objetivoError = document.getElementById("objetivo-error");

    //tasa metabólica basal--> calorías que el cuerpo quema en reposo
    //para mantener funciones vitales
    function calcularBMR(peso, altura, edad, sexo) {
        return sexo === "hombre"
            ? 66.5 + 13.75 * peso + 5.003 * altura - 6.75 * edad
            : 655 + 9.563 * peso + 1.85 * altura - 4.676 * edad;
    }

    //gasto energético total diario según actividad física
    //se multiplica por actividad física
    function calcularTDEE(bmr, actividad) {
        const factores = {
            sedentario: 1.2,
            ligera: 1.375,
            moderada: 1.55,
            intensa: 1.725,
            "muy-intensa": 1.9,
        };
        return bmr * (factores[actividad] || 1);
    }

    function ajustarPorObjetivo(tdee, objetivo) {
        switch (objetivo) {
            case "aumentar":
                return tdee + 300;
            case "bajar":
                return tdee - 300;
            default:
                return tdee;
        }
    }

    function validarPeso() {
        let valor = pesoInput.value.trim();

        valor = valor.replace(",", ".");

        if (valor === "") {
            pesoError.textContent = "";
            pesoInput.classList.remove("is-valid", "is-invalid");
            return false;
        }

        if (/[a-zA-Z]/.test(valor)) {
            pesoError.textContent = "Solo se permiten números, no letras";
        } else if (isNaN(valor)) {
            pesoError.textContent = "Valor inválido. Ingresa un número";
        } else {
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
            return false;
        }

        if (/[a-zA-Z.,]/.test(valor)) {
            alturaError.textContent =
                "Solo se permiten números enteros, sin letras ni símbolos.";
        } else if (isNaN(valor)) {
            alturaError.textContent = "Valor inválido. Ingresa un número.";
        } else {
            const numero = parseInt(valor, 10);
            if (numero < 50 || numero > 300) {
                alturaError.textContent =
                    "La altura debe estar entre 50 y 300 cm";
            } else {
                alturaError.textContent = "";
                alturaInput.classList.add("is-valid");
                alturaInput.classList.remove("is-invalid");
                return true;
            }
        }

        alturaInput.classList.add("is-invalid");
        alturaInput.classList.remove("is-valid");
        return false;
    }

    function validarEdad() {
        const valor = edadInput.value.trim();

        if (valor === "") {
            edadError.textContent = "";
            edadInput.classList.remove("is-valid", "is-invalid");
            return false;
        }

        if (/[a-zA-Z.,]/.test(valor)) {
            edadError.textContent =
                "Solo se permiten números enteros, sin letras ni símbolos.";
        } else if (isNaN(valor)) {
            edadError.textContent = "Valor inválido. Ingresa un número.";
        } else {
            const numero = parseInt(valor, 10);
            if (numero < 5 || numero > 110) {
                edadError.textContent = "La edad debe estar entre 5 y 110 años";
            } else {
                edadError.textContent = "";
                edadInput.classList.add("is-valid");
                edadInput.classList.remove("is-invalid");
                return true;
            }
        }

        edadInput.classList.add("is-invalid");
        edadInput.classList.remove("is-valid");
        return false;
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
    actividadInput.addEventListener("change", () =>
        validarSelect(
            actividadInput,
            actividadError,
            "Debes seleccionar tu nivel de actividad"
        )
    );
    objetivoInput.addEventListener("change", () =>
        validarSelect(
            objetivoInput,
            objetivoError,
            "Debes seleccionar tu objetivo"
        )
    );

    sexoInput.addEventListener("change", () =>
        validarSelect(sexoInput, sexoError, "Debes seleccionar tu sexo")
    );

    //cuando se introducen inputs para estos, se validan los valores
    pesoInput.addEventListener("input", validarPeso);
    alturaInput.addEventListener("input", validarAltura);
    edadInput.addEventListener("input", validarEdad);

    //cuando se envía el formulario
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        //para asegurarse de que datos a enviar correctos
        const validPeso = validarPeso();
        const validAltura = validarAltura();
        const validEdad = validarEdad();
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
        const validObjetivo = validarSelect(
            objetivoInput,
            objetivoError,
            "Debes seleccionar tu objetivo"
        );

        //si invalid--> no se calcula nada
        if (
            !validPeso ||
            !validAltura ||
            !validEdad ||
            !validSexo ||
            !validActividad ||
            !validObjetivo
        ) {
            alert("Por favor, completa todos los campos correctamente.");
            return;
        }

        const peso = parseFloat(pesoInput.value);
        const altura = parseFloat(alturaInput.value);
        const edad = parseInt(edadInput.value);
        const sexo = sexoInput.value;
        const actividad = actividadInput.value;
        const objetivo = objetivoInput.value;

        const bmr = calcularBMR(peso, altura, edad, sexo);
        const tdee = calcularTDEE(bmr, actividad);
        const tdeeAjustado = Math.round(ajustarPorObjetivo(tdee, objetivo));

        let mensaje = "";
        let claseColor = "";

        if (objetivo === "bajar") {
            if (tdeeAjustado >= tdee - 250) {
                mensaje = `Estás en un <strong>décifit ligero</strong>: necesitas <strong>${tdeeAjustado}</strong> kcal/día.`;
                claseColor = "deficit-ligero";
            } else if (tdeeAjustado >= tdee - 450) {
                mensaje = `Estás en un <strong>décifit moderado</strong>: necesitas <strong>${tdeeAjustado}</strong> kcal/día.`;
                claseColor = "deficit-moderado";
            } else {
                mensaje = `Estás en un <strong>décifit agresivo</strong>: necesitas <strong>${tdeeAjustado}</strong> kcal/día.`;
                claseColor = "deficit-agresivo";
            }
        } else if (objetivo === "mantener") {
            mensaje = `Para <strong>mantener tu peso</strong>, necesitas <strong>${tdeeAjustado}</strong> kcal/día.`;
            claseColor = "equilibrio";
        } else if (objetivo === "aumentar") {
            if (tdeeAjustado <= tdee + 250) {
                mensaje = `Estás en un <strong>superávit ligero</strong>: necesitas <strong>${tdeeAjustado}</strong> kcal/día.`;
                claseColor = "superavit-ligero";
            } else if (tdeeAjustado <= tdee + 450) {
                mensaje = `Estás en un <strong>superávit moderado</strong>: necesitas <strong>${tdeeAjustado}</strong> kcal/día.`;
                claseColor = "superavit-moderado";
            } else {
                mensaje = `Estás en un <strong>superávit agresivo</strong>: necesitas <strong>${tdeeAjustado}</strong> kcal/día.`;
                claseColor = "superavit-agresivo";
            }
        }

        mensajeCalorias.innerHTML = mensaje;
        mensajeCalorias.className = `mensaje-resultado ${claseColor}`;
        mensajeCalorias.style.display = "block"; //visible
        mensajeCalorias.style.opacity = 0; //tranparente

        setTimeout(() => {
            mensajeCalorias.style.opacity = 1;
        }, 50); //en 50 miliseg lo hace visible totalmente

        resultadoDiv.style.opacity = 1;
    });
});
