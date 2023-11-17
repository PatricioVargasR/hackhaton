let campoActual;

function editar(campo) {
    campoActual = campo;
    const valorActual = document.getElementById(campo).innerText.split(': ')[1];
    document.getElementById('numero-de-tarjeta').value = valorActual;
    document.getElementById('formulario-edicion').style.display = 'block';
}

function guardarEdicion() {
    const nuevoValor = document.getElementById('numero-de-tarjeta').value;
    document.getElementById(campoActual).innerText = campoActual.charAt(0).toUpperCase() + campoActual.slice(1) + ': ' + nuevoValor;
    document.getElementById('formulario-edicion').style.display = 'none';
}

function abrirSelectorImagen() {
    document.getElementById('input-imagen').click();
}

function cambiarImagen() {
    const inputImagen = document.getElementById('input-imagen');
    const imagenPerfil = document.querySelector('.profile-picture');

    const file = inputImagen.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            imagenPerfil.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
}

function irAFormaPago() {
    // Redirige a la página de edición de forma de pago
    window.location.href = 'editar_forma_pago.html';
}

function irAIndex() {
    // Redirige a la página de edición de forma de pago
    window.location.href = 'index.html';
}



document.addEventListener("DOMContentLoaded", function () {
    // Puedes cargar datos del usuario desde el backend aquí y actualizar el formulario si es necesario
});

document.getElementById("profileForm").addEventListener("submit", function (event) {
    event.preventDefault();

    // Puedes agregar lógica aquí para enviar el formulario al servidor
    // y manejar la actualización de datos del usuario

    alert("¡Cambios guardados!");
});


        // Cargar los datos almacenados al cargar la página
        document.addEventListener('DOMContentLoaded', cargarDatos);

        function cargarDatos() {
            const datosFormaPago = obtenerDatosFormaPago();
            document.getElementById('nombre-propietario').value = datosFormaPago.nombrePropietario || '';
            document.getElementById('numero-de-tarjeta').value = datosFormaPago.numeroTarjeta || '';
            document.getElementById('fecha-caducidad').value = datosFormaPago.fechaCaducidad || '';
            document.getElementById('cvv').value = datosFormaPago.cvv || '';
        }

        function guardarEdicion() {
            // Recupera los valores del formulario
            const nombrePropietario = document.getElementById('nombre-propietario').value;
            const numeroTarjeta = document.getElementById('numero-de-tarjeta').value;
            const fechaCaducidad = document.getElementById('fecha-caducidad').value;
            const cvv = document.getElementById('cvv').value;

            // Guarda los datos en el almacenamiento local
            guardarDatosFormaPago({
                nombrePropietario,
                numeroTarjeta,
                fechaCaducidad,
                cvv,
            });

            // Redirige de nuevo a la página principal
            window.location.href = 'index.html';
        }

        function obtenerDatosFormaPago() {
            const datosGuardados = localStorage.getItem('datosFormaPago');
            return datosGuardados ? JSON.parse(datosGuardados) : {};
        }

        function guardarDatosFormaPago(datos) {
            localStorage.setItem('datosFormaPago', JSON.stringify(datos));
        }
