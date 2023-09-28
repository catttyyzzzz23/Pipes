function mostrarFormulario(formularioId) {
    var formulario = document.getElementById(formularioId);
    if (formulario.style.display === "none") {
        ocultarTodosFormularios();
        formulario.style.display = "block";
    } else {
        formulario.style.display = "none";
    }
}

function ocultarTodosFormularios() {
    var formularios = document.getElementsByTagName("form");
    for (var i = 0; i < formularios.length; i++) {
        formularios[i].style.display = "none";
    }
}