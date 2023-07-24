// Creamos una función para mostrar la vista del formulario de inicio de sesión
function mostrarFormulario() {
    // Ocultamos la sección principal
    document.querySelector(".home").style.display = "none";

    // Mostramos la vista del formulario de inicio de sesión
    var formularioLogin = document.createElement("div");
    formularioLogin.innerHTML = `
        <!-- Aquí copiamos todo el contenido del formulario de inicio de sesión -->
        <!-- ... -->
    `;

    // Agregamos la vista del formulario de inicio de sesión al cuerpo (body) de la página
    document.body.appendChild(formularioLogin);
}
