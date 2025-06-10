// JavaScript Document

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('formularioDatos').addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío predeterminado del formulario
        
        const formulario = this;
        let formData = new FormData(formulario);

        fetch('php/insertar.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            formulario.reset(); // Resetear el formulario después de enviar
        })
        .catch(error => console.error('Error:', error));
    });
});
