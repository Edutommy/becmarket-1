<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../../header.php' ?>
    <title>Información | BEC Market</title>
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
                        <img src="<?= $_SESSION['ne']['imagen'] ?>" class="card-img py-2" alt="" style="max-width: 250px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-cash-register fs-5"></i>
                                </div>
                                <div class="col-10">
                                    <span class="h5 fw-bold"><?= $_SESSION['ne']['nombre'] ?></span>
                                </div>
                                <div class="col-2">
                                    <i class="fas fa-map-marker-alt fs-5"></i>
                                </div>
                                <div class="col-10">
                                    <span><?= $_SESSION['ne']['direccion'] ?></span>
                                </div>
                                <div class="col-2">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="col-10">
                                    <a href="MAILTO:example@example.cl" class="text-decoration-none"><?= $_SESSION['ne']['email'] ?></a>
                                </div>
                                <div class="col-2">
                                    <i class="fas fa-phone fs-5"></i>
                                </div>
                                <div class="col-10">
                                    <span>+56 <?= $_SESSION['ne']['telefono'] ?></span>
                                </div>
                                <div class="col-2">
                                    <i class="far fa-calendar-alt fs-5"></i>
                                </div>
                                <div class="col-10">
                                    <span><?= $_SESSION['ne']['diasAtencion'] ?></span>
                                    <span>desde las</span>
                                    <span><?= $_SESSION['ne']['horarioAtencion'] ?></span>
                                    <span>hrs.</span>
                                </div>
                                <div class="col-2">
                                    <i class="far fa-money-bill-alt fs-5"></i>
                                </div>
                                <div class="col-10">
                                    Costo envío <br>
                                    <span class="fw-bold">$<?= $_SESSION['ne']['costoEnvio'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- CONTENIDO -->

        <?php } else { ?>
            <?php header("Location: ../vendedor/vendedor-inicio.php"); ?>
        <?php } ?>
    <?php } else {
        header("Location: ../../login.php"); ?>
    <?php } ?>
    
    <?php include_once '../../footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40e29f2951.js" crossorigin="anonymous"></script>
</body>
</html>