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
            <a class="flex-sm-fill text-sm-center nav-link link-dark small" href="cliente-mispedidos.php" style="background-color: #adb5bd;">EN CURSO</a>
            <a class="flex-sm-fill text-sm-center nav-link link-dark small" href="cliente-pedidos-historial.php" style="background-color: #adb5bd;">HISTORIAL</a>
        </nav>
    </div>
    <!-- TERCERA BARRA -->

    <!-- DETALLES PEDIDO -->
    <div class="container mt-3">
        <a href="cliente-mispedidos.php"><i class="fas fa-chevron-circle-left fs-1 text-dark ms-5 mb-3"></i></a>
        <div class="border border-2 border-dark rounded mx-auto pb-3" style="max-width: 800px;">
            <h5 class="h5 text-center mt-3 mb-4">Pedido a <span>Lider Express</span></h5>
            <!-- VISTA <LG -->
            <div class="d-none d-md-block">
                <div class="row">
                    <div class="col-3">
                        <p class="text-end fw-bold">Enviado a: </p>
                    </div>
                    <div class="col-3">
                        <p>Bicentenario, Pasaje Reconquista #1351, San Javier</p>
                    </div>
                    <div class="col-3">
                        <p class="text-end fw-bold">Fecha y hora:</p>
                    </div>
                    <div class="col-3">
                        <p>18:06 29-04-2021</p>
                    </div>
                    <div class="col-3">
                        <p class="text-end fw-bold">Repartidor:</p>
                    </div>
                    <div class="col-3">
                        <p>Benjamin Muñoz</p>
                    </div>
                    <div class="col-3">
                        <p class="text-end fw-bold">Estado del pedido:</p>
                    </div>
                    <div class="col-3">
                        <p>En preparación</p>
                    </div>
                    <div class="col-3">
                        <p class="text-end fw-bold">Metodo de pago:</p>
                    </div>
                    <div class="col-3">
                        <p>Efectivo</p>
                    </div>
                    <div class="col-3">
                        <p class="text-end fw-bold">Monto:</p>
                    </div>
                    <div class="col-3">
                        <p>$6000</p>
                    </div>
                </div>
            </div>
            <!-- VISTA <LG -->

            <!-- VISTA >MD -->
            <div class="d-md-none">
                <div class="row">
                    <div class="col-6">
                        <p class="text-end fw-bold">Enviado a: </p>
                    </div>
                    <div class="col-5">
                        <p>Bicentenario, Pasaje Reconquista #1351, San Javier</p>
                    </div>
                    <div class="col-6">
                        <p class="text-end fw-bold">Fecha y hora:</p>
                    </div>
                    <div class="col-6">
                        <p>18:06 29-04-2021</p>
                    </div>
                    <div class="col-6">
                        <p class="text-end fw-bold">Repartidor:</p>
                    </div>
                    <div class="col-6">
                        <p>Benjamin Muñoz</p>
                    </div>
                    <div class="col-6">
                        <p class="text-end fw-bold">Estado del pedido:</p>
                    </div>
                    <div class="col-6">
                        <p>En preparación</p>
                    </div>
                    <div class="col-6">
                        <p class="text-end fw-bold">Metodo de pago:</p>
                    </div>
                    <div class="col-6">
                        <p>Efectivo</p>
                    </div>
                    <div class="col-6">
                        <p class="text-end fw-bold">Monto:</p>
                    </div>
                    <div class="col-6">
                        <p>$6000</p>
                    </div>
                </div>
            </div>
            <!-- VISTA >MD -->
            <h5 class="h5 text-center mt-3 mb-4">Detalles del pedido</h5>
            <table class="table table-hover table-bordered text-center mx-auto table-responsive" style="max-width: 500px;">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Total</th>
                      </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chocolate Vizzio</td>
                        <td>2</td>
                        <td>$1700</td>
                        <td>$3400</td>
                    </tr>
                    <tr>
                        <td>Pan Hallulla</td>
                        <td>1</td>
                        <td>$1000</td>
                        <td>$1000</td>
                    </tr>
                    <tr>
                        <td>Jugo Watts</td>
                        <td>1</td>
                        <td>$1300</td>
                        <td>$1300</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="fw-bold text-end">Envio:</td>
                        <td>$890</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="fw-bold text-end">Total a pagar:</td>
                        <td>$5700</td>
                    </tr>
                </tbody>
            </table>  

        </div>

    </div>
    <!-- DETALLES PEDIDO -->

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