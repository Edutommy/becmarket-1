<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <!-- BARRA DE NAVEGACION -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BEC Market</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-5">
                        <a href="cliente-inicio.php" class="text-light text-decoration-none fw-normal">INICIO</a>
                    </li>
                    <li class="nav-item pe-5">
                        <a href="cliente-datos.php" class="text-light text-decoration-none fw-normal">MIS DATOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../index.php" class="text-light text-decoration-none fw-normal">CERRAR SESION<i class="fas fa-sign-out-alt ps-2 fs-5"></i></a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
    <!-- BARRA DE NAVEGACION -->

    <!-- BARRA SECUNDARIA -->
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row mt-5 mx-auto" style="max-width: 500px;">            
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="cliente-inicio.php" style="background-color: #adb5bd;">POPULARES</a>
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active" aria-current="page" href="cliente-negocio.php">NEGOCIOS</a>
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="cliente-mispedidos.php" style="background-color: #adb5bd;">MIS PEDIDOS</a>
        </nav>
    </div>
    <!-- BARRA SECUNDARIA -->

    <!-- CONTENIDO -->
    <div class="container">
        <div class="d-flex bd-highlight mx-auto mt-5" style="max-width: 600px;">
            <div class="bd-highlight">
                <a href="cliente-ver-negocio.php"><i class="fas fa-chevron-circle-left fs-1 text-dark me-3"></i></a>
            </div>
            <div class="mx-auto bd-highlight pt-2">
                <p class="h5 fw-bold">Información del negocio</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 border p-3 border-dark rounded-3 mb-3 d-flex align-items-center">
                <img src="../../img/lider.png" class="card-img py-2" alt="" style="max-width: 250px;">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-cash-register fs-5"></i>
                        </div>
                        <div class="col-10">
                            <span class="h5 fw-bold">Lider Express</span>
                        </div>
                        <div class="col-2">
                            <i class="fas fa-map-marker-alt fs-5"></i>
                        </div>
                        <div class="col-10">
                            <span>Chorrillos #1138</span>
                        </div>
                        <div class="col-2">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-10">
                            <a href="MAILTO:example@example.cl" class="text-decoration-none">example@example.cl</a>
                        </div>
                        <div class="col-2">
                            <i class="fas fa-phone fs-5"></i>
                        </div>
                        <div class="col-10">
                            <span>+56987654321</span>
                        </div>
                        <div class="col-2">
                            <i class="far fa-calendar-alt fs-5"></i>
                        </div>
                        <div class="col-10">
                            <span>Todos los días 9:00 - 21:00 hrs.</span>
                        </div>
                        <div class="col-2">
                            <i class="far fa-clock fs-5"></i>
                        </div>
                        <div class="col-10">
                            Tiempo espera <br>
                            <span class="fw-bold">30-50 mins</span>
                        </div>
                        <div class="col-2">
                            <i class="far fa-money-bill-alt fs-5"></i>
                        </div>
                        <div class="col-10">
                            Costo envío <br>
                            <span class="fw-bold">$890</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- CONTENIDO -->

    <!-- FOOTER -->
    <div class="container text-center" style="margin-top: 110px;">
        <div class="row">
          <div class="col-sm pb-5">
            <h2 class="display-5">BEC Market</h2>
          </div>
          <div class="col-sm pb-5">
                <p class="lead pb-2"><strong>NUESTRAS REDES</strong></p>
                <a href="#"><i class="fab fa-facebook-f fs-4 text-dark me-5"></i></a>
                <a href="#"><i class="fab fa-twitter fs-4 text-dark me-5"></i></a>
                <a href="#"><i class="fab fa-instagram fs-4 text-dark"></i></a>
          </div>
          <div class="col-sm pb-5">
            <p class="lead"><strong>CONTACTO</strong></p>
            <a href="MAILTO:contacto@example.com" class="text-decoration-none lead">contacto@example.com</a></span></p>
          </div>
        </div>
    </div>
    <!-- FIN FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40e29f2951.js" crossorigin="anonymous"></script>
</body>
</html>