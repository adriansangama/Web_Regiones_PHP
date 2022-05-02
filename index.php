<?php
include "conexion.php";
error_reporting(0);
session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Tours Regiones</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="navbar.css" rel="stylesheet">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Tour Perú</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Cerrar sesión</a>
            </li>
          </ul>
          <form class="d-flex">
          <a class="nav-link disabled" href="#">Bienvenido: <?php echo $_SESSION['email']?></a>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/cusco.jpg" class="d-block w-100" alt="...">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>CONOCE NUESTROS LUGARES TURISTICOS</h1>
              <p>Tour Peru tiene una amplia selección de tours, actividades y experiencias en todo el Perú.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/ayacucho.jpg" class="d-block w-100" alt="...">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>DESTINOS IDEALES PARA VIAJAR Y DESCUBRIR NUEVAS EXPERIENCIAS</h1>
              <p>Turismo en Perú, qué ver en Perú. Reserve excursiones y actividades en Perú con Viator.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/lima.jpg" class="d-block w-100" alt="...">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>OFRECEMOS UNA AMPLIA DIVERSIDAD DE CIUDADES A CONOCER</h1>
              <p>Encuentra el viaje de tus sueños.</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <hr class="featurette-divider">

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <?php
        $consulta = "select * from regiones";
        $resultado = $conexion->query($consulta);
        while ($mostrar = $resultado->fetch_assoc()) {
        ?>
          <div class="col-lg-4">
            <img src="images/<?php echo $mostrar['idRegion'] ?>.png" class="img-thumbnail" alt="...">

            <h2><?php echo $mostrar['region'] ?></h2>
            <p><?php echo $mostrar['descripcion'] ?></p>
            <p><a class="btn btn-secondary" href="region.php?idRegion=<?php echo $mostrar['idRegion'] ?>">Ver Tours &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <!-- /.col-lg-4 -->
        <?php
        }
        ?>
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <section id="testimonials">
        <div class="container wow fadeInUp">
          <div class="row">
            <div class="col-md-12">
              <h3 class="section-title">Experiencias</h3>
              <div class="section-title-divider"></div>
              <p class="section-description">Viajar es conectar con tradiciones, historia, gastronomía y personas. Te presentamos algunas experiencias y maneras de conocer la cultura local.</p>
            </div>
          </div>

          <div class="row">
            <?php
            $consulta = "SELECT * FROM experiencias";
            $resultado = $conexion->query($consulta);
            while ($mostrar = $resultado->fetch_assoc()) {
            ?>
              <div class="col-md-3">
                <div class="profile">
                  <div class="pic"><img src="images/persons/<?php echo $mostrar['idPersona'] ?>.jpg" alt=""></div>

                  <br>
                </div>
              </div>
              <div class="col-md-9">
                <div class="quote">
                  <h3><?php echo $mostrar['nombre'] ?></h3><br>
                  "<?php echo $mostrar['comentario'] ?>"
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </section>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2021 Company Tour Perú, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>