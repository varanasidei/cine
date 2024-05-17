<!DOCTYPE html>
<html lang="en">
<head>
  <!--metadatos-->
  <meta charset="utf-8">
  <meta name="author" content="deiby">
  <meta name="description" content="pagina oficial de cinecove">
  <meta name="keywords" content="html, css, javascripy">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--titulo-->
  <title>cinecove</title>
  <!--favicon-->
  <link rel="icon" type="image/x-icon" href="imagenes/cine.jpg">
  <!--agregamos bootstrap aca pertenecienete a html-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!--link css-->
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <!--barra de navegacion-->
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-Toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-Toggler">
        <a class="navbar-brand" href="#">
          <img src="https://www.anahuac.mx/generacion-anahuac/sites/default/files/articles/SalaDeCine.jpg" alt="cine" width="100px" height="100px" class="img1">
        </a>
        <ul class="navbar-nav d-flex justify-content-center align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://varanasidei.github.io/beto/" id="1"><strong>Acerca de cinecove</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario.php"><strong>Tikets</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><strong>Pagos</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://varanasidei.github.io/lester1/"><strong>Estrenos</strong></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--seccion principal o hero-->
  <section class="hero align-items-stretch">
    <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
      <img src="https://www.anahuac.mx/generacion-anahuac/sites/default/files/articles/SalaDeCine.jpg" alt="foto de cinecove" class="imagen-tamaño">
      <h1>Bienvenidos a cinecove</h1>
      <h2>La mejor plataforma para reservar tus entradas</h2>
    </div>
  </section>
  <!--aca ponemos nuestro boostrap de script perteneciente a js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <?php
  include("registrar.php");
  ?>
    <!--sobre nuestra pagina-->
    <section class="sebre-cinecove seccion-oscura">
    <div class="contenedor">
      <h2 class="seccion-titulo">Conoce más acerca de cinecove</h2>
      <a href="#1"><p class="seccion-texto">clic aca para más información</p></a>
    </div>
  </section>
  
  <!--productos-->
  <section class="producto seccion-clara">
    <div class="container text-center">
    <div class="row">
      <!-- desarrollo web -->

      <div class="columna col-12 col-md-4">
      <i class="bi bi-camera-reels"></i>
        <p class="producto-ofrecer">aca ira algo</p>
        <p>lalalalalalalalalalala</p>

        <div class="bages-contenedor">
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>

        </div>
      </div>

      <!-- articulos -->
      <div class="columna col-12 col-md-4">
      <i class="bi bi-camera-reels"></i>
        <p class="producto-ofrecer">aca ira algo</p>
        <p>lalalalalalalalalalala</p>

        <div class="bages-contenedor">
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>

        </div>
      </div>

      <!-- estudiante -->
      <div class="columna col-12 col-md-4">
      <i class="bi bi-camera-reels"></i>
        <p class="producto-ofrecer">aca ira algo</p>
        <p>lalalalalalalalalalala</p>

        <div class="bages-contenedor">
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>
          <span class="badge text-bg-primary">aca ira algo</span>

        </div>
      </div>
    </div>

    </div>
  </section>
</body>
</html>