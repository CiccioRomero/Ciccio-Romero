// register.js

document.getElementById('registerForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  const username = document.getElementById('new-username').value;
  const password = document.getElementById('new-password').value;
  const email = document.getElementById('email').value;
  const errorMessage = document.getElementById('register-error-message');
  
  // Ejemplo de validación simple
  if (username === '' || password === '' || email === '') {
    errorMessage.textContent = 'Por favor, complete todos los campos.';
    return;
  }
  
  // Aquí puedes añadir más validaciones o enviar los datos a un servidor
  // Para el propósito de este ejemplo, solo mostramos un mensaje de éxito
  errorMessage.textContent = '';
  alert('Registro exitoso');
});
