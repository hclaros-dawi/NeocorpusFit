document.addEventListener("DOMContentLoaded", () => {
    //obtiene el valor de un parámetro de url (name)
    function getUrlParameter(name) {
        const params = new URLSearchParams(window.location.search); //param después de ? en url
        return params.get(name) || "";
    }

    //si el parámetro menu_updated es true
    if (getUrlParameter("menu_updated") === "true") {
        const alertElement = document.getElementById("menu-success-alert");
        if (alertElement) {
            alertElement.style.display = "block"; //lo hace visible

            //limpia la url para que no siga mostrando el param después de actualizarse
            const newUrl =
                window.location.protocol + //http o https
                "//" +
                window.location.host + //neocorpusfit.test
                window.location.pathname; //area
            //modifica la url del nav sin recargar la página y sin agregar nueva entrada al historial
            window.history.replaceState({ path: newUrl }, "", newUrl);

            setTimeout(() => {
                alertElement.classList.add("fade-out"); //aplica una clase de desaparición
                alertElement.addEventListener("animationend", () => {
                    //cuando termina animación
                    alertElement.style.display = "none"; //oculta por completo el mensaje
                });
            }, 3000);
        }
    }
});
