<?php

include("con_db.php");

if (isset($_POST['registrarse'])) {
  if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pelicula']) >= 1) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $pelicula = trim($_POST['pelicula']);
    $consulta = "INSERT INTO solicitudes_de_tikets(nombre, email, pelicula) VALUES ('$nombre','$email','$pelicula')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
    ?>
    <h3 class="ok">Te has registrado correctamente <a href="mostrar.php">clic aca para tu boleto</a></h3>
    <?php
    } else {
      ?>
      <h3 class="bad">ha ocurrido un error</h3>
    <?php
    }
  }
}
?>
