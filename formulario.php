<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de boletos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
<?php
  include("registrar.php");
  ?>
  <form class="row g-3" role="search" method="post">

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre Completo</label>
    <input class="form-control me-2" type="text" name="nombre" placeholder="nombre completo" aria-label="Search">
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Correo Electronico</label>
    <input class="form-control me-2" type="text" name="email" placeholder="email" aria-label="Search">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Pelicula</label>
    <input class="form-control me-2" type="text" name="pelicula" placeholder="pelicula" aria-label="Search">
  </div>

  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  </div>
  <div class="col-12">
   <input type="submit" name="registrarse">
  </div>
</form>

</body>
</html>