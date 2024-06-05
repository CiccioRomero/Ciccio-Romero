document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    // Ocultar la imagen
    document.getElementById("imagen").style.display = "none";
    // Cambiar el fondo a negro
    document.body.style.backgroundColor = "black";
    // Mostrar el mensaje en letras verdes
    document.body.innerHTML =
      '<h1 style="color: lime;">Sigue Al Conejo Blanco</h1>';
  }, 9000); // Cambia este valor (en milisegundos) para ajustar el tiempo de espera
});

document.addEventListener("DOMContentLoaded", function () {
  var mensaje = "Música Para Crear";
  var mensajeTipeado = "";
  var cursor = document.getElementById("cursor");

  var intervalo = setInterval(function () {
    if (mensaje.length > 0) {
      mensajeTipeado += mensaje.charAt(0);
      mensaje = mensaje.slice(1);
      document.getElementById("mensaje-tipeado").textContent = mensajeTipeado;
    } else {
      clearInterval(intervalo);
      cursor.remove(); // Elimina el cursor parpadeante al finalizar el tipeo
    }
  }, 100); // Cambia este valor para ajustar la velocidad de tipeo en milisegundos
});
