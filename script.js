AOS.init({
    duration: 1000, //Duración de la animación en ms
    once: true //La animación se ejecuta solo una vez al hacer scroll
});

//Validación de formulario de Bootstrap 5
(() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if(!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false)
    })
})();