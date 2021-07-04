<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../header.php' ?>
    <title>Registrarse | BEC Market</title>
</head>
<body> 
    <?php if(isset($_SESSION['user'])){ ?>
        <?php if($_SESSION['user']['tipo'] == 1){?>
            <!-- BARRA DE NAVEGACION -->
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark px-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../img/logo2.png" alt="" width="120">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item pe-5">
                                <a href="cliente/cliente-inicio.php" class="text-light text-decoration-none fw-normal">INICIO</a>
                            </li>
                            <li class="nav-item pe-5">
                                <a href="cliente/cliente-datos.php" class="text-light text-decoration-none fw-normal">MIS DATOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="../controladores/salir.php" class="text-light text-decoration-none fw-normal">CERRAR SESION<i class="fas fa-sign-out-alt ps-2 fs-5"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- BARRA DE NAVEGACION -->

        <?php }else{ ?>
            <!-- BARRA DE NAVEGACION -->
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark px-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../img/logo2.png" alt="" width="120">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item pe-5">
                                <a href="vendedor/vendedor-inicio.php" class="text-light text-decoration-none fw-normal">INICIO</a>
                            </li>
                            <li class="nav-item pe-5">
                                <a href="vendedor/vendedor-datos.php" class="text-light text-decoration-none fw-normal">MIS DATOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="../controladores/salir.php" class="text-light text-decoration-none fw-normal">CERRAR SESION<i class="fas fa-sign-out-alt ps-2 fs-5"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- BARRA DE NAVEGACION -->
        <?php } ?>
        <div class="container" style="max-width: 450px;">
            <div class="row bg-light mx-auto mt-5 border border-dark rounded-3 pb-3">
                <form action="../controladores/CambiarContrasena.php" method="POST">
                    <div class="col-sm-12 pt-3">
                        <h5 class="h4 text-center pb-4">Cambiar contraseña</h5>
                    </div>

                    <div class="row">
                        <div class="col-12 ms-4">
                            <span>Contraseña actual</span>
                        </div>
                        <div class="col-12 ms-4">
                            <input type="password" class="form-control mb-3" id="ca" name="ca" style="max-width: 350px;" required>
                        </div>
                        <div class="col-12 ms-4">
                            <span>Contraseña nueva</span>
                        </div>
                        <div class="col-12 ms-4">
                            <input pattern="[A-Za-z0-9!?-]{8,12}" type="password" class="form-control mb-3" id="cn" name="cn" style="max-width: 350px;" required>
                        </div>
                        <div class="col-12 ms-4">
                            <span>Confirmar contraseña</span>
                        </div>
                        <div class="col-12 ms-4">
                            <input pattern="[A-Za-z0-9!?-]{8,12}" type="password" class="form-control mb-3" id="cc" name="cc" style="max-width: 350px;" required>
                        </div>
                    </div>

                    <p class="text-center text-danger">
                        <?php if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        } ?>
                    </p>

                    <p class="text-center mt-2">
                        <button class="btn btn-dark">Cambiar contraseña</button>
                    </p>

                </form>

            </div>
        </div>
    <?php }else{
        header('Location: ../login.php');
    }?>
    
    <?php include_once '../footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="js/NuevoComprador.js"></script>

</body>

</html>