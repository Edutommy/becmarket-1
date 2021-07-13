<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mis Datos | BEC Market</title>
    <?php include_once '../../header.php' ?>
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

            <!-- DATOS -->
            <div class="container mt-5">
                <p class="h3 text-center">Mis datos</p>
                <div class="row mt-5 mx-5 d-flex justify-content-center justify-content-lg-evenly">
                    <div class="col-xl-4 mb-4" style="max-width: 400px;">
                        <div class="row d-flex justify-content-center border p-3 border-dark rounded">
                            <div class="col-xl-7">
                                <img src="../../img/papas.jpg" class="card-img py-2 mx-auto d-block" alt="" style="max-width: 230px;">
                                <div class="mb-3 d-flex justify-content-center flex-column">
                                    <input class="form-control form-control-sm mx-auto" id="formFileSm" type="file" style="max-width: 200px;">
                                    <button class="btn btn-dark mt-2 mx-auto btn-sm" style="max-width: 200px;">Cambiar imagen</button>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="row mt-2">
                                    <div class="col-3 text-end">
                                        <i class="fas fa-user fs-5 pb-3"></i> 
                                    </div>
                                    <div class="col-9">
                                        <span><?= $_SESSION['user']['nombre'] ?></span> 
                                        <span><?= $_SESSION['user']['apellidos'] ?></span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <i class="fas fa-map-marker-alt fs-5 pb-3"></i>
                                    </div>
                                    <div class="col-9">
                                        <span><?= $_SESSION['user']['direccion'] ?></span> 
                                    </div>
                                    <div class="col-3 text-end">
                                        <i class="far fa-envelope fs-5 pb-3"></i>
                                    </div>
                                    <div class="col-9">
                                        <span><?= $_SESSION['user']['email'] ?></span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <i class="fas fa-phone fs-5 pb-3"></i>
                                    </div>
                                    <div class="col-9">
                                        <span>+56 <?= $_SESSION['user']['telefono'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EDITAR DATOS -->
                    <div id="app" class="col-xl-6 border p-3 border-dark rounded mb-4" style="max-width: 500px;">
                        <form @submit.prevent="editar">
                            <div class="row mt-2">
                                <div class="col-md-10 mx-auto mb-2">
                                    <p class="h5">Editar datos</p>
                                </div>
                                <div class="col-md-10 mx-auto mt-3">
                                    <label for="cd" class="form-label fw-bold">Nombre:</label>
                                    <input required name="tele" v-model="nombre" type="text" class="form-control" id="cd" style="max-width: 400px;" placeholder="">
                                </div>
                                <div class="col-md-10 mx-auto mt-3">
                                    <label for="ed" class="form-label fw-bold">Apellidos:</label>
                                    <input required name="email" v-model="apellidos" type="text" class="form-control" id="ed" style="max-width: 400px;" placeholder="">
                                </div>
                                <div class="col-md-10 mx-auto mt-3">
                                    <label for="cd" class="form-label fw-bold">Direccion:</label>
                                    <input required name="tele" v-model="direccion" type="text" class="form-control" id="cd" style="max-width: 400px;" placeholder="Casa #numero">
                                </div>
                                <div class="col-md-10 mx-auto mt-3">
                                    <label for="ed" class="form-label fw-bold">Telefono:</label>
                                    <input required name="email" v-model="telefono" type="text" class="form-control" id="ed" style="max-width: 400px;" placeholder="987654321" pattern="[0-9]{9}">
                                </div>
                            </div>
                            <button class="btn btn-dark mt-3 mx-auto d-block" style="max-width: 200px;">Cambiar datos</button>
                        </form>
                        <p class="text-end mt-4">
                            <a href="../cambiarcontrasenia.php">Cambiar contraseña</a>
                        </p>
                        <p class="text-center text-success">
                            <?php if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            } ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- DATOS -->
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

</html>