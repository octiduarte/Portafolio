//Funcion hamburguesa

function toggleMenu() {
  var menu = document.querySelector(".menu");
  menu.style.display = menu.style.display === "none" || menu.style.display === "" ? "block" : "none";
}

//Funcion de scroll

document.addEventListener("DOMContentLoaded", function () {
  // Agregar el evento clic a todos los enlaces del menú
  const links = document.querySelectorAll(".boton-nav");

  links.forEach((link) => {
    link.addEventListener("click", smoothScroll);
  });

  function smoothScroll(e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    // Hacer scroll suave hasta la sección correspondiente
    targetElement.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  }
});

//Funcion para el scroll del header

window.onscroll = function () {
  myFunction();
};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBarra").style.width = scrolled + "%";
}



// Función que se ejecutará cuando el elemento sea visible
function startCircularProgressAnimation(progressBar) {
  const progressValue = progressBar.querySelector(".percentage");
  const innerCircle = progressBar.querySelector(".inner-circle");
  let startValue = 0,
    endValue = Number(progressBar.getAttribute("data-percentage")),
    speed = 50,
    progressColor = progressBar.getAttribute("data-progress-color");

  const progress = setInterval(() => {
    startValue++;
    progressValue.textContent = `${startValue}%`;
    progressValue.style.color = `${progressColor}`;

    innerCircle.style.backgroundColor = `${progressBar.getAttribute(
      "data-inner-circle-color"
    )}`;

    progressBar.style.background = `conic-gradient(${progressColor} ${
      startValue * 3.6
    }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
    if (startValue === endValue) {
      clearInterval(progress);
    }
  }, speed);
}

// Configuración del IntersectionObserver
const options = {
  threshold: 0.5, // Cuando al menos el 50% del elemento es visible
};

// Callback para el IntersectionObserver
const callback = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Si el elemento es visible, ejecutar la animación
      startCircularProgressAnimation(entry.target);
      observer.unobserve(entry.target); // Dejar de observar el elemento una vez que se ha ejecutado la animación
    }
  });
};

// Crear el IntersectionObserver con el callback y opciones
const observer = new IntersectionObserver(callback, options);

// Obtener todos los elementos con la clase "circular-progress"
const circularProgress = document.querySelectorAll(".circular-progress");

// Observar cada elemento con la clase "circular-progress"
circularProgress.forEach((progressBar) => {
  observer.observe(progressBar);
});