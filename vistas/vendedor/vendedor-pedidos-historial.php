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
                        <a href="vendedor-inicio.php" class="text-light text-decoration-none fw-normal">INICIO</a>
                    </li>
                    <li class="nav-item pe-5">
                        <a href="vendedor-datos.php" class="text-light text-decoration-none fw-normal">MIS DATOS</a>
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
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-inicio.php" style="background-color: #adb5bd;">MI NEGOCIO</a>
            <a class="flex-sm-fill text-sm-center nav-link link-dark" style="background-color: #adb5bd;" href="vendedor-productos.php">MIS PRODUCTOS</a>
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active" href="vendedor-pedidos.php" >PEDIDOS</a>
        </nav>
      </div>
    <!-- BARRA SECUNDARIA -->

    <!-- TERCERA BARRA -->
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row mt-5 mx-auto" style="max-width: 400px;">            
            <a class="flex-sm-fill text-sm-center nav-link link-dark small" href="vendedor-pedidos.php" style="background-color: #adb5bd;">ACEPTADOS</a>
            <a class="flex-sm-fill text-sm-center nav-link link-dark small" href="vendedor-pedidos-sinaceptar.php" style="background-color: #adb5bd;">SIN ACEPTAR</a>
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active  small" href="vendedor-pedidos-historial.php" style="background-color: #adb5bd;">HISTORIAL</a>
        </nav>
    </div>
    <!-- TERCERA BARRA -->

    <!-- BUSQUEDA -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="d-flex flex-row bd-highlight justify-content-center">
                    <div class="p-2 bd-highlight">
                        <input type="text" class="form-control mb-3" placeholder="Buscar por cliente" style="max-width: 168px;">    
                    </div>
                    <div class="p-2 bd-highlight">
                        <button type="button" class="btn btn-dark px-4">BUSCAR</button>
                    </div>           
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex flex-row bd-highlight justify-content-center">
                    <div class="p-2 bd-highlight">
                        <input type="date" class="p-2">
                    </div>
                    <div class="p-2 bd-highlight">
                        <button type="button" class="btn btn-dark px-4">BUSCAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUSQUEDA -->

    <!-- TABLA PEDIDOS -->
    <div class="container mt-3 d-none d-lg-block">
        <table class="table table-hover table-bordered text-center mx-auto align-middle" style="max-width: 1100px;">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Fecha y hora</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Repartidor</th>
                    <th scope="col">Total</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Estado</th>
                  </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">18:06 29-04-2020</th>
                    <td>Eduardo Maureira</td>
                    <td>Benjamin Muñoz</td>
                    <td>$1700</td>
                    <td><a href="vendedor-pedido-detalle.php">Ver detalles</a></td>
                    <td class="text-success">Entregado</td>
                </tr>
                <tr>
                    <th scope="row">18:06 29-04-2020</th>
                    <td>Nombre Apellido</td>
                    <td>Nombre Apellido</td>
                    <td>$999</td>
                    <td><a href="#">Ver detalles</a></td>
                    <td class="text-success">Entregado</td>
                </tr>
            </tbody>
          </table>    
    </div>  
    <!-- TABLA PEDIDOS -->

    <!-- PEDIDOS PANTALLA CHICA -->
    <div class="container mt-5 d-lg-none">
        <div class="row justify-content-center mx-2">
            <div class="col-lg-7 border p-3 border-dark rounded-3 mb-3 d-flex align-items-center" style="max-width: 300px;">
                <div class="ps-3">
                    <p class="h5 fw-bold">Eduardo Maureira</p>
                    <span>18:06 29-04-2020</span> -
                    <span>$1700</span> <br>
                    Repartidor: <span>Benjamin Muñoz</span> <br>
                    <span class="text-success">Entregado</span>
                    <br>
                    <a href="vendedor-pedido-detalle.php">Ver detalles</a>
                </div>
            </div>
            <div class="col-lg-7 border p-3 border-dark rounded-3 mb-3 d-flex align-items-center" style="max-width: 300px;">
                <div class="ps-3">
                    <p class="h5 fw-bold">Nombre Apellido</p>
                    <span>18:06 29-04-2020</span> -
                    <span>$999</span> <br>
                    Repartidor: <span>Nombre Apellido</span> <br>
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