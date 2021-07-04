<?php 
    use modelo\Producto as Producto;
    session_start(); 
    $rutN = $_SESSION['negocio']['rut_negocio'];
    require_once("../../modelo/Producto.php");
    $model = new Producto();
    $productos = $model->buscarProductos($rutN);
?>
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
                    <a class="navbar-brand" href="#">
                        <img src="../../img/logo2.png" alt="" width="120">
                    </a>
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
                    <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-inicio.php" style="background-color: #adb5bd;">MI NEGOCIO</a>
                    <a class="flex-sm-fill text-sm-center nav-link bg-dark active" href="vendedor-productos.php">MIS PRODUCTOS</a>
                    <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-pedidos.php" style="background-color: #adb5bd;">PEDIDOS</a>
                </nav>
            </div>
            <!-- BARRA SECUNDARIA -->

            <!-- BUSCAR O AÑADIR -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-row bd-highlight justify-content-center mt-1 mb-3">
                            <a href="vendedor-nuevo-producto.php" class="link-success btn btn-outline-success btn-lg link-success"> <i class="fas fa-plus me-2"></i> Nuevo producto</a>
                        </div>
                    </div>
                    <div class="col-md-6" id="app">
                        <form action="../../controladores/BuscarProducto.php" method="POST">
                            <div class="d-flex flex-row bd-highlight justify-content-center">
                                <div class="p-2 bd-highlight">
                                    <input name="nombre" type="text" class="form-control mb-3" placeholder="Nombre producto" style="max-width: 168px;">    
                                </div>
                                <div class="p-2 bd-highlight">
                                    <button class="btn btn-dark px-4">BUSCAR</button>
                                </div> 
                            </div>
                            <p class="text-danger text-center">
                                <?php 
                                    if(isset($_SESSION['error'])){
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                    }
                                ?>
                            </p>  
                        </form>
                    </div>
                </div>
            </div>
            <!-- BUSCAR O AÑADIR -->
                
            <!-- PRODUCTOS -->
            <div class="container mt-5">
                <form action="../../controladores/TablaProductos.php" method="POST">
                    <table class="table table-hover table-bordered text-center mx-auto align-middle table-responsive" style="max-width: 1000px;">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">CODIGO</th>
                                <th scope="col">IMAGEN</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">STOCK</th>
                                <th scope="col">PRECIO</th>
                                <th scope="col">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!isset($_SESSION['buscar'])){ ?>
                                <?php foreach($productos as $p) { ?>
                                    <tr>
                                        <th><?= $p['codigo_producto'] ?></th>
                                        <td><img src="<?= $p['imagen'] ?>" class="card-img py-2" style="max-width: 100px;"></td>
                                        <td><?= $p['nombre'] ?></td>
                                        <td><?= $p['stock'] ?></td>
                                        <td>$<?= $p['precio'] ?></td>
                                        <td>
                                            <button class="btn me-2" name="editar" value="<?= $p['codigo_producto'] ?>">
                                            <i class="far fa-edit fs-2 text-primary"></i></button>
                                            <button class="btn" name="eliminar" value="<?= $p['codigo_producto'] ?>">
                                            <i class="far fa-trash-alt fs-2 text-danger"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else{ 
                                $nombre =$_SESSION['buscar'];
                                $buscar = $model->buscarNombre($nombre,$rutN);
                                ?>
                                <?php foreach($buscar as $b) { ?>
                                    <tr>
                                        <th><?= $b['codigo_producto'] ?></th>
                                        <td><img src="<?= $b['imagen'] ?>" class="card-img py-2" style="max-width: 100px;"></td>
                                        <td><?= $b['nombre'] ?></td>
                                        <td><?= $b['stock'] ?></td>
                                        <td>$<?= $b['precio'] ?></td>
                                        <td>
                                            <button class="btn me-2" name="editar" value="<?= $b['codigo_producto'] ?>">
                                            <i class="far fa-edit fs-2 text-primary"></i></button>
                                            <button class="btn" name="eliminar" value="<?= $b['codigo_producto'] ?>">
                                            <i class="far fa-trash-alt fs-2 text-danger"></i></button>
                                        </td>
                                    </tr>
                                <?php } unset($_SESSION['buscar']); ?>
                            <?php } ?>
                        </tbody>
                    </table> 
                </form>
            </div>
            <!-- PRODUCTOS -->
        

        <?php 
            }else{
                header("Location: ../cliente/cliente-inicio.php"); 
            } ?>
    <?php } else { 
        header("Location: ../../login.php"); ?>     
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