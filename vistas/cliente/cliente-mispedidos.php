<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../../header.php' ?>
    <title>Mis Pedidos | BEC Market</title>
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
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="cliente-negocio.php" style="background-color: #adb5bd;">NEGOCIOS</a>
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active" aria-current="page" href="cliente-mispedidos.php">MIS PEDIDOS</a>
        </nav>
    </div>
    <!-- BARRA SECUNDARIA -->

    <!-- TERCERA BARRA -->
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row mt-5 mx-auto" style="max-width: 250px;">
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active small" aria-current="page" href="cliente-mispedidos.php">EN CURSO</a>
            <a class="flex-sm-fill text-sm-center nav-link link-dark small" href="cliente-pedidos-historial.php" style="background-color: #adb5bd;">HISTORIAL</a>
        </nav>
    </div>
    <!-- TERCERA BARRA -->

    <!-- TABLA PEDIDOS -->
    <div class="container mt-5 d-none d-lg-block">
        <table class="table table-hover table-bordered text-center mx-auto" style="max-width: 1100px;">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Fecha y hora</th>
                    <th scope="col">Negocio</th>
                    <th scope="col">Repartidor</th>
                    <th scope="col">Total</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">18:06 29-04-2020</th>
                    <td>Lider Express</td>
                    <td>Benjamin Muñoz</td>
                    <td>$1700</td>
                    <td><a href="cliente-pedido-detalle.php">Ver detalles</a></td>
                    <td>En preparación</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- TABLA PEDIDOS -->

    <!-- PEDIDOS PANTALLA CHICA -->
    <div class="container mt-5 d-lg-none">
        <div class="row justify-content-center mx-2">
            <div class="col-lg-7 border p-3 border-dark rounded-3 mb-3 d-flex align-items-center" style="max-width: 440px;">
                <img src="../../img/lider.png" class="card-img py-2" alt="" style="max-width: 150px;">
                <div class="ps-3">
                    <p class="h5 fw-bold">Lider Express</p>
                    <span>18:06 29-04-2020</span> -
                    <span>$1700</span> <br>
                    Repartidor: <span>Benjamin Muñoz</span> <br>
                    <span class="text-success">En preparación</span>
                    <br>
                    <a href="cliente-pedido-detalle.php">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
    <!-- PEDIDOS PANTALLA CHICA -->
    <?php include_once '../../footer.php' ?>
</body>

</html>