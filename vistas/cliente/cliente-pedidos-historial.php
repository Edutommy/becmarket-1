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
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="cliente-negocio.php" style="background-color: #adb5bd;">NEGOCIOS</a>
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active" aria-current="page" href="cliente-mispedidos.php">MIS PEDIDOS</a>
        </nav>
    </div>
    <!-- BARRA SECUNDARIA -->

    <!-- TERCERA BARRA -->
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row mt-5 mx-auto" style="max-width: 250px;">            
            <a class="flex-sm-fill text-sm-center nav-link link-dark small" aria-current="page" style="background-color: #adb5bd;" href="cliente-mispedidos.php">EN CURSO</a>
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active small" href="cliente-pedidos-historial.php">HISTORIAL</a>
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
                    <td>Nombre</td>
                    <td>Nombre y apellido</td>
                    <td>$999</td>
                    <td><a href="#">Ver detalles</a></td>
                    <td>Entregado</td>
                </tr>
                <tr>
                    <th scope="row">18:06 29-04-2020</th>
                    <td>Nombre</td>
                    <td>Nombre y apellido</td>
                    <td>$999</td>
                    <td><a href="#">Ver detalles</a></td>
                    <td>Entregado</td>
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
                    <p class="h5 fw-bold">Nombre negocio</p>
                    <span>18:06 29-04-2020</span> -
                    <span>$999</span> <br>
                    Repartidor: <span>Nombre y apellido</span> <br>
                    <span class="text-success">Entregado</span>
                    <br>
                    <a href="#">Ver detalles</a>
                </div>
            </div>
            <div class="col-lg-7 border p-3 border-dark rounded-3 mb-3 d-flex align-items-center" style="max-width: 440px;">
                <img src="../../img/lider.png" class="card-img py-2" alt="" style="max-width: 150px;">
                <div class="ps-3">
                    <p class="h5 fw-bold">Nombre negocio</p>
                    <span>18:06 29-04-2020</span> -
                    <span>$999</span> <br>
                    Repartidor: <span>Nombre y apellido</span> <br>
                    <span class="text-success">Entregado</span>
                    <br>
                    <a href="#">Ver detalles</a>
                </div>
            </div>
        </div>
    </div>
<!-- PEDIDOS PANTALLA CHICA -->

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