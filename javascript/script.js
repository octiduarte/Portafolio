//Funcion hamburguesa

function toggleMenu() {
    var menu = document.querySelector('.menu');
    menu.style.display = (menu.style.display === 'none' || menu.style.display === '') ? 'block' : 'none';
}


//Funcion de scroll

document.addEventListener("DOMContentLoaded", function () {
    // Agregar el evento clic a todos los enlaces del menú
    const links = document.querySelectorAll('.boton-nav');

    links.forEach(link => {
        link.addEventListener('click', smoothScroll);
    });

    function smoothScroll(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        // Hacer scroll suave hasta la sección correspondiente
        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
});



