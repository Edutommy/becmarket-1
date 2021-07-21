<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmación pedido | BEC Market</title>
    <?php include_once '../../header.php' ?>
</head>

<body style="background-image: url(../../img/fondo.jpg);">
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
            

            <div class="row bg-light mx-auto mt-5 border border-dark rounded-3" style="max-width: 500px;">
                <div class="col-12">
                    <p class="text-center mt-4 text-success fs-4"><i class="fas fa-check-circle fs-2 me-3"></i>LISTO!</p>
                    <p class="text-center">Tu pedido ha sido enviado al negocio.</p>
                    <p class="text-center">Revisa la pestaña mis pedidos para ver el estado de tu pedido.</p>
                    <p class="text-center pt-2">
                        <a href="cliente-mispedidos.php" class="btn btn-dark">Mis pedidos</a>
                    </p>            
                </div>
            </div>
            
        <?php } else { ?>
            <?php header("Location: ../vendedor/vendedor-inicio.php"); ?>
        <?php } ?>
    <?php } else {
        header("Location: ../../login.php"); ?>
    <?php } ?>
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="../../js/EditarDatosUsuario.js"></script>

    <?php include_once '../../footer.php' ?>
</body>