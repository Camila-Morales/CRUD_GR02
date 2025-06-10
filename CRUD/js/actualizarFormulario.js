// JavaScript Document

function actualizarDatos() {
    const formulario = document.getElementById('formularioEditar');
    let formData = new FormData(formulario);

    fetch('actualizar.php?id=' + obtenerParametroURL('id'), {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
    })
    .catch(error => console.error('Error:', error));
}

function obtenerParametroURL(parametro) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(parametro);
}
