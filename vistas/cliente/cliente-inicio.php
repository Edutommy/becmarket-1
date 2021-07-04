<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../../header.php' ?>
    <title>Inicio | BEC Market</title>
</head>

<body>
    <?php if (isset($_SESSION['user'])) { ?>

        <?php if ($_SESSION['user']['tipo'] == 1) { ?>
            <!-- BARRA DE NAVEGACION -->
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark px-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../../img/logo2.png" alt="" width="120">
                    </a>
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
                                <a href="../../controladores/salir.php" class="text-light text-decoration-none fw-normal">CERRAR SESION<i class="fas fa-sign-out-alt ps-2 fs-5"></i></a>
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
        <?php } else { ?>
            <?php header("Location: ../vendedor/vendedor-inicio.php"); ?>
        <?php } ?>
    <?php } else {
        header("Location: ../../login.php"); ?>
    <?php } ?>
    <?php include_once '../../footer.php' ?>
</body>

</html>