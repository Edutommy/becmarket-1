<?php session_start(); ?>
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
    <?php if (isset($_SESSION['user'])) { ?>

        <?php if ($_SESSION['user']['tipo'] == 2) { ?>
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
                                <a href="vendedor-inicio.php" class="text-light text-decoration-none fw-normal">INICIO</a>
                            </li>
                            <li class="nav-item pe-5">
                                <a href="vendedor-datos.php" class="text-light text-decoration-none fw-normal">MIS DATOS</a>
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
                    <a class="flex-sm-fill text-sm-center nav-link bg-dark active" aria-current="page" href="vendedor-inicio.php">MI NEGOCIO</a>
                    <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-productos.php" style="background-color: #adb5bd;">MIS PRODUCTOS</a>
                    <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-pedidos.php" style="background-color: #adb5bd;">PEDIDOS</a>
                </nav>
            </div>
            <!-- BARRA SECUNDARIA -->

            <div class="container mt-5">
                <!-- DATOS NEGOCIO-->
                <div class="row mt-5 mx-5 d-flex justify-content-center justify-content-lg-evenly">
                    <div class="col-xl-5 border p-3 border-dark rounded mb-4" style="max-width: 430px;">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-7">
                                <img src="../../img/lider.png" class="card-img py-2 mx-auto d-block" alt="" style="max-width: 230px;">
                                <div class="mb-3 d-flex justify-content-center flex-column">
                                    <input class="form-control form-control-sm mx-auto" id="formFileSm" type="file" style="max-width: 200px;">
                                    <button class="btn btn-dark mt-2 mx-auto btn-sm" style="max-width: 200px;">Cambiar imagen</button>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <!--VISTA >LG -->
                                <div class="d-none d-md-block">
                                    <div class="row mt-2">
                                        <div class="col-1  pb-3">
                                            <i class="fas fa-unlock"></i>
                                        </div>
                                        <div class="col-5">
                                            <span class="text-success">ABIERTO</span>
                                        </div>
                                        <div class="col-6">
                                            <a href="#">CERRAR ATENCIÓN</a>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="fas fa-cash-register fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            <span>Lider Express</span>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="far fa-envelope fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            <span>example@example.cl</span>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="fas fa-map-marker-alt fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            <span>Chorrillos #1138</span>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="far fa-money-bill-alt fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            Costo envío <br>
                                            <span class="fw-bold">$890</span>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="fas fa-phone fs-5 pb-3"></i>
                                        </div>
                                        <div class="col-5">
                                            <span>+56987654321</span>
                                        </div>
                                        <div class="col-1 pb-3">
                                            <i class="far fa-clock fs-5"></i>
                                        </div>
                                        <div class="col-5">
                                            Tiempo espera <br>
                                            <span class="fw-bold">30-50 mins</span>
                                        </div>
                                        <div class="col-3  text-end">
                                            <i class="fas fa-motorcycle"></i>
                                        </div>
                                        <div class="col-9">
                                            <span>Envío a cargo de BEC Market</span>
                                        </div>
                                    </div>
                                </div>
                                <!--VISTA >LG -->

                                <!-- VISTA <LG -->
                                <div class="d-md-none">
                                    <div class="row mt-2">
                                        <div class="col-12 text-center">
                                            <i class="fas fa-unlock"></i>
                                            <span class="text-success">ABIERTO</span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <a href="#">CERRAR ATENCIÓN</a>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="fas fa-cash-register fs-5"></i>
                                            <span>Lider Express</span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="far fa-envelope fs-5"></i>
                                            <span>example@example.cl</span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="fas fa-map-marker-alt fs-5"></i>
                                            <span>Chorrillos #1138</span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="far fa-money-bill-alt fs-5"></i>
                                            Costo envío <br>
                                            <span class="fw-bold">$890</span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="fas fa-phone fs-5"></i>
                                            <span>+56987654321</span>
                                        </div>
                                        <div class="col-12 text-center pb-3">
                                            <i class="far fa-clock fs-5"></i>
                                            Tiempo espera <br>
                                            <span class="fw-bold">30-50 mins</span>
                                        </div>
                                        <div class="col-12 text-center pb-2">
                                            <i class="fas fa-motorcycle"></i>
                                            <span>Envío a cargo de BEC Market</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- VISTA <LG -->
                            </div>
                        </div>
                    </div>
                    <!-- DATOS NEGOCIO-->
                    <!-- EDITAR DATOS -->
                    <div class="col-xl-6 border p-3 border-dark rounded mb-4" style="max-width: 500px;">
                        <div class="row mt-2">
                            <div class="col-md-10 mx-auto">
                                <label for="horario" class="form-label fw-bold">Horario de atención:</label>
                                <select class="form-select mb-3" id="horario" style="max-width: 380px;">
                                    <option selected>Seleccione horario</option>
                                    <option value="1">Lunes a viernes</option>
                                    <option value="2">Lunes a sábado</option>
                                    <option value="3">Todos los días</option>
                                </select>
                            </div>
                            <div class="col-md-10 d-flex mx-auto">
                                <div class="col-md-6 text-end d-flex me-1">
                                    <label for="desde" class="form-label me-2">Desde:</label>
                                    <input class="form-control form-control-sm" type="text" id="desde" placeholder="Hora" style="max-width: 70px;">
                                </div>
                                <div class="col-md-6 d-flex">
                                    <label for="hasta" class="form-label me-2">Hasta:</label>
                                    <input class="form-control form-control-sm" type="text" id="hasta" placeholder="Hora" style="max-width: 70px;">
                                </div>
                            </div>
                            <div class="col-md-10 mx-auto mt-3">
                                <label for="cd" class="form-label fw-bold">Teléfono:</label>
                                <input type="text" class="form-control" id="cd" style="max-width: 400px;" placeholder="+56987654321">
                            </div>
                            <div class="col-md-10 mx-auto mt-3">
                                <label for="ed" class="form-label fw-bold">E-mail</label>
                                <input type="text" class="form-control" id="ed" style="max-width: 400px;" placeholder="correo@example.com">
                            </div>
                            <div class="col-md-10 mx-auto mt-3 d-flex">
                                <div class="col-md-7">
                                    <label for="horario" class="form-label fw-bold">Tipo envio:</label>
                                    <select class="form-select mb-3" id="horario" style="max-width: 380px;">
                                        <option selected>Seleccione tipo</option>
                                        <option value="1">A cargo del negocio</option>
                                        <option value="2">A cargo de BEC Market</option>
                                    </select>
                                </div>
                                <div class="col-md-5 ms-4">
                                    <label for="costo" class="form-label fw-bold">Costo envío:</label>
                                    <input type="text" class="form-control" id="costo" style="max-width: 100px;">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark mt-3 mx-auto d-block" style="max-width: 200px;">Cambiar datos</button>
                    </div>
                </div>
                <!-- EDITAR DATOS -->
            </div>
        <?php } else { ?>
            <?php header("Location: ../cliente/cliente-inicio.php"); ?>
        <?php } ?>
    <?php } else { header("Location: ../../login.php"); ?>     
    <?php } ?>
    <!-- FOOTER -->
    <div class="container text-center" style="margin-top: 110px;">
        <div class="row">
            <div class="col-md pb-5">
                <h2 class="display-5">BEC Market</h2>
            </div>
            <div class="col-md pb-5">
                <p class="lead pb-2"><strong>NUESTRAS REDES</strong></p>
                <a href="#"><i class="fab fa-facebook-f fs-4 text-dark me-5"></i></a>
                <a href="#"><i class="fab fa-twitter fs-4 text-dark me-5"></i></a>
                <a href="#"><i class="fab fa-instagram fs-4 text-dark"></i></a>
            </div>
            <div class="col-md pb-5">
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