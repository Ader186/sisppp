// Creamos una función para mostrar la vista del formulario de inicio de sesión
function mostrarFormulario() {
    // Ocultamos la sección principal
    document.querySelector(".home").style.display = "none";

    // Mostramos la vista del formulario de inicio de sesión
    var formularioLogin = document.createElement("div");
    formularioLogin.innerHTML = `
        <form>
            <h2>Iniciar Sesión</h2>
            <input type="text" name="usuario" placeholder="Usuario" autofocus>
            <input type="password" name="contraseña" placeholder="Contraseña">
            <button type="submit">Ingresar</button>
        </form>
    `;
    

    // Agregamos la vista del formulario de inicio de sesión al cuerpo (body) de la página
    document.body.appendChild(formularioLogin);
}
