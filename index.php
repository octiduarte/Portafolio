<?php

include('includes/conexion.php');
conectar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lekton&display=swap" rel="stylesheet" />

  <title>Mi portafolio</title>
</head>

<body>
  <header>
    <div class="contenedor-header-movil">
      <div class="burger-icon" onclick="toggleMenu()">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div class="logo-movil">
        <a href="">
          <img class="retrato-header" src="imagenes/logos/logo-marca.png" alt="" />
        </a>
      </div>
    </div>
    <div class="menu">
      <div class="logo-pc">
        <a href=""><img class="retrato-header" src="imagenes/logos/logo-marca.png" alt="" />
        </a>
        <h4>Octavio Duarte</h4>
        <img src="imagenes/logos/verificado.png" alt="">
      </div>
      <div class="menu-nav">
        <a class="boton-nav boton-inicio boton-redes" href="#inicio">Inicio</a>
        <a class="boton-nav boton-redes" href="#sobre-mi">Sobre mi</a>
        <a class="boton-nav boton-redes" href="#skills">Skills</a>
        <a class="boton-nav boton-redes" href="#portafolio">Portafolio</a>
        <a class="boton-nav boton-redes" href="#contacto">Contacto</a>
      </div>
      <div>
        <a class="boton-redes" href="https://www.linkedin.com/in/octavio-duarte-19a695237/"><img
            src="imagenes/logos/linkedin.png" alt="" /></a>
      </div>
    </div>
    <div class="progreso-contenedor">
      <div class="progreso-barra" id="myBarra"></div>
    </div>
  </header>

  <main>
    <section id="inicio">
      <img class="avatar" src="imagenes/avatar/avatar.png" alt="" />
      <div class="bienvenida-div">
        <h3 class="bienvenidos-h3">Bienvenidos,</h3>
        <h1>Soy Octavio Duarte</h1>
        <p class="p-inicio">Bienvenido a mi portafolio como desarrollador trainee..</p>
        <a class="boton-portafolio" href="cv/Octavio martin duarte (1).pdf">Descargar CV</a>
      </div>
    </section>
    <section id="sobre-mi">
      <div class="texto-sobreMi">
        <strong>Quien soy</strong>
        <h1 class="titulo-sobreMi">Sobre mi</h1>
        <p>Me encanta crear sitios web que brinden una experiencia de usuario unica y satisfactoria. Puedes ver algunos
          de mis proiyectos en la seccion de <strong>Portafolio</strong>
          <br>
          Soy una persona autodidacta, responsable y competitiva con mi trabajo. Constantemente estoy aprendiendo
          nuevas tecnologias y herramientas para mejorar mis habilidades.
          <br>
          No dude en <strong>contactarse </strong> conmigo si tiene alguna pregunta.
        </p>
      </div>
      <div>
        <img class="retrato" src="imagenes/personas/foto.png" alt="" />
      </div>
    </section>
    <section id="skills">
      <div>
        <h1 class="titulo-skills">Skills</h1>
      </div>
      <div class="organizacion-barra-progreso-circulo">
        <div class="barra-progreso-circulo">
          <h3>POO</h3>
          <div class="circular-progress" data-percentage="50" data-progress-color="black" data-bg-color="#dddddd">
            <div class="inner-circle">
              <p class="percentage">0%</p>
            </div>

          </div>
        </div>
        <div class="barra-progreso-circulo">
          <h3>CSS</h3>
          <div class="circular-progress" data-percentage="60" data-progress-color="black" data-bg-color="#dddddd">
            <div class="inner-circle">
              <p class="percentage">0%</p>
            </div>

          </div>
        </div>
        <div class="barra-progreso-circulo">
          <h3>PHP</h3>
          <div class="circular-progress" data-percentage="30" data-progress-color="black" data-bg-color="#dddddd">
            <div class="inner-circle">
              <p class="percentage">0%</p>
            </div>
          </div>
        </div>
        <div class="barra-progreso-circulo">
          <h3>OFFICE</h3>
          <div class="circular-progress" data-percentage="100" data-progress-color="black" data-bg-color="#dddddd">
            <div class="inner-circle">
              <p class="percentage">0%</p>
            </div>
          </div>
        </div>
        <div class="barra-progreso-circulo">
          <h3>HTML</h3>
          <div class="circular-progress" data-percentage="100" data-progress-color="black" data-bg-color="#dddddd">
            <div class="inner-circle">
              <p class="percentage">0%</p>

            </div>
          </div>
        </div>
        <div class="barra-progreso-circulo">
          <h3>JAVASCRIPT</h3>
          <div class="circular-progress" data-percentage="50" data-progress-color="black" data-bg-color="#dddddd">
            <div class="inner-circle">
              <p class="percentage">0%</p>
            </div>

          </div>
        </div>
        <div class="barra-progreso-circulo">
          <h3>ANGULAR</h3>
          <div class="circular-progress" data-percentage="30" data-progress-color="black" data-bg-color="#dddddd">
            <div class="inner-circle">
              <p class="percentage">0%</p>
            </div>

          </div>
        </div>
        <div class="barra-progreso-circulo">
          <h3>FIREBASE</h3>
          <div class="circular-progress" data-percentage="30" data-progress-color="black" data-bg-color="#dddddd">
            <div class="inner-circle">
              <p class="percentage">0%</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="portafolio">
      <div>
        <h1 class="titulo_proyecto">Mis ultimos trabajos</h1>
        <p>Si queres ver mas proyectos mios contactame.</p>
      </div>
      <div class="organizacion_proyectos">
        <div class="contenedor_proyecto">
          <img class="imagen_proyecto" src="imagenes/proyectos/Proyecto_ecommerce.png" alt="">
          <div class="overlay">
            <h3 class="titulo_cada_proyecto">Proyecto de Ecomerce realizado para la Universidad.</h3>
            <a class="boton-portafolio" href="https://duartephp.000webhostapp.com/index.php">Visitar sitio</a>
          </div>
        </div>
        <div class="contenedor_proyecto">
          <img class="imagen_proyecto" src="imagenes/proyectos/Proyecto_calculadora.png" alt="">
          <div class="overlay">
            <h3 class="titulo_cada_proyecto">Proyecto de calculadora por practica.</h3>
            <a class="boton-portafolio" href="">Visitar sitio</a>
          </div>
        </div>
      </div>
    </section>
    <section id="contacto">
      <?php
      include('modulos/procesar_formulario.php');
      ?>
    </section>
  </main>
  <script src="javascript/script.js"></script>
</body>

</html>