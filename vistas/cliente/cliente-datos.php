<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mis Datos | BEC Market</title>
    <?php include_once '../../header.php' ?>
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
                                <span>Nombre y apellidos</span>
                            </div>
                            <div class="col-3 text-end">
                                <i class="fas fa-map-marker-alt fs-5 pb-3"></i>
                            </div>
                            <div class="col-9">
                                <span>Dirección</span>
                            </div>
                            <div class="col-3 text-end">
                                <i class="far fa-envelope fs-5 pb-3"></i>
                            </div>
                            <div class="col-9">
                                <span>example@example.cl</span>
                            </div>
                            <div class="col-3 text-end">
                                <i class="fas fa-phone fs-5 pb-3"></i>
                            </div>
                            <div class="col-9">
                                <span>+56987654321</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 border p-3 border-dark rounded mb-4" style="max-width: 500px;">
                <p class="h5 ms-4 mt-1">Editar datos</p>
                <div class="row mt-4">
                    <div class="col-12 mb-2 px-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" placeholder="nombre">
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="col-12 mb-2 px-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="ape" placeholder="apellidos">
                            <label for="ape">Apellidos</label>
                        </div>
                    </div>
                    <div class="col-12 mb-2 px-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="dire" placeholder="direccion">
                            <label for="dire">Dirección</label>
                        </div>
                    </div>
                    <div class="col-12 mb-2 px-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tele" placeholder="telefono">
                            <label for="celu">Teléfono</label>
                        </div>
                    </div>
                    <div class="col-12 px-4 mb-2">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" value="test@example.com" readonly>
                            <label for="email">Email</label>
                            <p class="text-end"><a href="#">Cambiar</a></p>
                        </div>
                    </div>
                    <div class="col-12 px-4 mb-2">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="pass" placeholder="name@example.com" value="12345" readonly>
                            <label for="pass">Contraseña</label>
                            <p class="text-end"><a href="#">Cambiar</a></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-dark mt-3 mx-auto d-block" style="max-width: 200px;">Cambiar datos</button>
            </div>
        </div>
    </div>
    <!-- DATOS -->
    <?php include_once '../../footer.php' ?>
</body>

</html>