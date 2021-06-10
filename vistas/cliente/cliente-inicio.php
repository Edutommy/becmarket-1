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
                        <a href="../../controllers/logout.php" class="text-light text-decoration-none fw-normal">CERRAR SESION<i class="fas fa-sign-out-alt ps-2 fs-5"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- BARRA DE NAVEGACION -->

    <!-- BARRA SECUNDARIA -->
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row mt-5 mx-auto" style="max-width: 500px;">
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active" aria-current="page" href="cliente-inicio.php">POPULARES</a>
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="cliente-negocio.php" style="background-color: #adb5bd;">NEGOCIOS</a>
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="cliente-mispedidos.php" style="background-color: #adb5bd;">MIS PEDIDOS</a>
        </nav>
    </div>
    <!-- BARRA SECUNDARIA -->

    <!-- CONTENIDO -->
    <div class="container mt-5">
        <h5 class="h4 text-center pb-4 mb-4">PRODUCTOS MÁS POPULARES</h5>
        <div class="row d-flex justify-content-center justify-content-lg-between">
            <div class="col-lg-4 border p-3 border-dark rounded-3 d-flex align-items-center mb-4" style="max-width: 400px;">
                <img src="../../img/papas.jpg" class="card-img py-2" alt="" style="max-width: 140px;">
                <div class="ps-3">
                    <p class="h5 fw-bold">Producto</p>
                    <p>
                        $6.000 <br>
                        <span>Descripción</span>
                        <br>
                        <span>Negocio</span>
                    </p>
                    <button class="btn btn-dark">Ver negocio</button>
                </div>
            </div>
            <div class="col-lg-4 border p-3 border-dark rounded-3 d-flex align-items-center mb-4" style="max-width: 400px;">
                <img src="../../img/papas.jpg" class="card-img py-2" alt="" style="max-width: 140px;">
                <div class="ps-3">
                    <p class="h5 fw-bold">Producto</p>
                    <p>
                        $6.000 <br>
                        <span>Descripción</span>
                        <br>
                        <span>Negocio</span>
                    </p>
                    <button class="btn btn-dark">Ver negocio</button>
                </div>
            </div>
            <div class="col-lg-4 border p-3 border-dark rounded-3 d-flex align-items-center mb-4" style="max-width: 400px;">
                <img src="../../img/papas.jpg" class="card-img py-2" alt="" style="max-width: 140px;">
                <div class="ps-3">
                    <p class="h5 fw-bold">Producto</p>
                    <p>
                        $6.000 <br>
                        <span>Descripción</span>
                        <br>
                        <span>Negocio</span>
                    </p>
                    <button class="btn btn-dark">Ver negocio</button>
                </div>
            </div>
        </div>

    </div>

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