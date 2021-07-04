<?php

use modelo\Negocio as Negocio;

session_start();
require_once("../../modelo/Negocio.php");
$model = new Negocio();
$negocios = $model->getAllNegocio();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../../header.php' ?>
    <title>Negocios | BEC Market</title>
</head>

<body>
    <?php if (isset($_SESSION['user'])) { ?>

        <?php if ($_SESSION['user']['tipo'] == 1) { ?>
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

            <!-- BUSQUEDA -->
            <div class="container mt-5" id="app">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="../../controladores/BuscarNegocio.php">
                            <div class="d-flex flex-row bd-highlight justify-content-center">
                                <div class="p-2 bd-highlight">
                                    <input name="nombre" type="text" class="form-control mb-3" placeholder="Nombre negocio" style="max-width: 168px;">
                                </div>
                                <div class="p-2 bd-highlight">
                                    <button class="btn btn-dark px-4">BUSCAR</button>
                                </div>
                            </div>
                            <p class="text-danger text-center">
                                <?php
                                if (isset($_SESSION['error'])) {
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                }
                                ?>
                            </p>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex flex-row bd-highlight justify-content-center">
                            <div class="p-2 bd-highlight">
                                <select class="form-select mb-3" style="max-width: 300px;">
                                    <option selected>Filtrar negocios</option>
                                    <option value="1">Supermercado</option>
                                    <option value="2">Panadería</option>
                                    <option value="3">Comida rápida</option>
                                </select>
                            </div>
                            <div class="p-2 bd-highlight">
                                <button type="button" class="btn btn-dark px-4">FILTRAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BUSQUEDA -->
            <!-- CONTENIDO  -->
            <div class="container mt-4">
                <?php if (!isset($_SESSION['buscar'])) { ?>
                    <?php foreach ($negocios as $n) { ?>
                        <div class="row justify-content-center mx-2">
                            <div class="col-lg-7 border p-3 border-dark rounded-3 mb-3 d-flex align-items-center" style="max-width: 700px;">
                                <img src="<?= $n['imagen'] ?>" class="card-img py-2" alt="" style="max-width: 140px;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <span class="h5 fw-bold"> <?= $n['nombre'] ?></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="text-lg-end">Delivery a cargo de BEC Market</p>
                                        </div>
                                    </div>
                                    <span><?= $n['direccion'] ?></span>
                                    <br>
                                    <span class="text-success">Abierto hasta las 21:00 hrs</span>
                                    <div class="row mt-2">
                                        <div class="col-lg-4">
                                            <span>Tiempo de espera</span>
                                            <br>
                                            <span class="fw-bold">30-50 mins</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <span>Costo de envío</span>
                                            <br>
                                            <span class="fw-bold"><?= $n['costoEnvio'] ?></span>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="btn btn-dark mt-2" href="cliente-ver-negocio.php">Ver negocio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else {
                    $nombre = $_SESSION['buscar'];
                    $buscar = $model->buscarNombre($nombre);
                ?>
                    <?php foreach ($buscar as $b) { ?>
                        <div class="row justify-content-center mx-2">
                            <div class="col-lg-7 border p-3 border-dark rounded-3 mb-3 d-flex align-items-center" style="max-width: 700px;">
                                <img src="<?= $b['imagen'] ?>" class="card-img py-2" alt="" style="max-width: 140px;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <span class="h5 fw-bold"> <?= $b['nombre'] ?></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="text-lg-end">Delivery a cargo de BEC Market</p>
                                        </div>
                                    </div>
                                    <span><?= $b['direccion'] ?></span>
                                    <br>
                                    <span class="text-success">Abierto hasta las 21:00 hrs</span>
                                    <div class="row mt-2">
                                        <div class="col-lg-4">
                                            <span>Tiempo de espera</span>
                                            <br>
                                            <span class="fw-bold">30-50 mins</span>
                                        </div>
                                        <div class="col-lg-4">
                                            <span>Costo de envío</span>
                                            <br>
                                            <span class="fw-bold"><?= $n['costoEnvio'] ?></span>
                                        </div>
                                        <div class="col-lg-4">
                                            <a class="btn btn-dark mt-2" href="cliente-ver-negocio.php">Ver negocio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    unset($_SESSION['buscar']); ?>
                <?php } ?>
            </div>
            <!-- CONTENIDO  -->
        <?php } else { ?>
            <?php header("Location: ../cliente/cliente-inicio.php"); ?>
        <?php } ?>
    <?php } else {
        header("Location: ../../login.php"); ?>
    <?php } ?>
    <?php include_once '../../footer.php' ?>
</body>

</html>