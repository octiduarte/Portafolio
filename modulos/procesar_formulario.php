<?php

if (!isset($_GET['accion'])) {
  $_GET['accion'] = '';
}


if ($_GET['accion'] == 'enviar_formulario') {
  $nombre = $_POST['nombre'];
  $correo = $_POST['email'];
  $asunto = $_POST['asunto'];
  $descripcion = $_POST['mensaje'];

  $to = "octiduarte@gmail.com"; // Cambia por tu dirección de correo electrónico
  $subject = 'Nuevo mensaje de contacto';

  $message = "Nombre: $nombre\n";


  $headers = "From: $correo";

  if (mail($to, $subject, $message, $headers)) {
    echo "Correo enviado con éxito";
  }

  $sql = "INSERT INTO contacto (nombre, correo, asunto, descripcion) VALUES ('$nombre', '$correo', '$asunto', '$descripcion')";
  $resultado = mysqli_query($con, $sql);

  if ($resultado) {
    echo "<script>alert('Mensaje cargado con éxito');</script>";
  } else {
    echo "<script>alert('Mensaje no enviado');</script>";
  }



}
?>

<div class="contenedor-formulario">
  <div class="titulo-formulario">
    <h1 style="font-weight:normal; display:inline;">CONTACTO</h1>
  </div>
  <div class="organizacion-contacto">
    <div>
      <div class="organizacion-telefono-correo">
        <img src="imagenes/logos/correo.png" alt="" width="32">
        <h5>octiduarte@hotmail.com</h5>
      </div>
      <div class="organizacion-telefono-correo">
        <img src="imagenes/logos/llamada.png" alt="" width="32">
        <h5>+54 (011)33722655</h5>
      </div>
      <div class="organizacion-redes">
        <a class="" href="https://www.instagram.com/_octavioduarte/"> <img src="imagenes/logos/instagram.png" alt=""></a>
        <a class="" href="https://twitter.com/_octavioduarte"><img src="imagenes/logos/twitter.png" alt=""></a>
        <a class="" href="https://www.facebook.com/octiduarte/"> <img src="imagenes/logos/facebook.png" alt=""></a>
      </div>
    </div>
    <form class="organizacion-formulario" action="index.php?procesar_formulario&accion=enviar_formulario" method="POST">
      <label for="nombre">Nombre:</label>
      <input class="barra-formulario" type="text" id="nombre" name="nombre" required>

      <label for="email">Email:</label>
      <input class="barra-formulario" type="email" id="email" name="email" required>

      <label for="asunto">Asunto:</label>
      <input class="barra-formulario" type="asunto" id="asunto" name="asunto" required>

      <label for="mensaje">Mensaje:</label>
      <textarea class="mensaje-formulario" id="mensaje" name="mensaje" required></textarea>
      <div class="organizacion-boton-formulario" >
        <button class="boton-formulario" type="submit" name="submit">Enviar</button>
      </div>
    </form>
  </div>
</div>