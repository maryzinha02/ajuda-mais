let checkbox = document.querySelector("#mostrarCampo");
let campoAdicional = document.querySelector("#campoAdicional");

document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.getElementById("mostrarCampo");
    const campoAdicional = document.getElementById("campoAdicional");

    // Verifica o estado inicial do checkbox e ajusta o campo adicional em conformidade
    if (checkbox.checked) {
        campoAdicional.style.display = "block";
    } else {
        campoAdicional.style.display = "none";
    }

    checkbox.addEventListener("change", function () {
        if (this.checked) {
            campoAdicional.style.display = "block";
        } else {
            campoAdicional.style.display = "none";
        }
    });
});

