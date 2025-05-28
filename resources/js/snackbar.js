document.addEventListener("DOMContentLoaded", () => {
    function getUrlParameter(name) {
      name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
      const regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
      const results = regex.exec(location.search);
      return results === null
        ? ""
        : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
  
    if (getUrlParameter("menu_updated") === "true") {
      const alertElement = document.getElementById("menu-success-alert");
      if (alertElement) {
        alertElement.style.display = "block";
  
        const newUrl =
          window.location.protocol +
          "//" +
          window.location.host +
          window.location.pathname;
        window.history.replaceState({ path: newUrl }, "", newUrl);
  
        setTimeout(() => {
          alertElement.classList.add("fade-out");
          alertElement.addEventListener("animationend", () => {
            alertElement.style.display = "none";
          });
        }, 3000);
      }
    }
  
    const otherAlerts = document.querySelectorAll(
      ".alert:not(#menu-success-alert)"
    );
    if (otherAlerts.length > 0) {
      setTimeout(() => {
        otherAlerts.forEach((alert) => {
          alert.classList.add("fade-out");
          alert.addEventListener("animationend", () => alert.remove());
        });
      }, 3000);
    }
  });
  