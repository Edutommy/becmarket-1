<?php 
    session_start(); 
    require_once('../../modelo/Detalle.php');
    use modelo\Detalle as Detalle;
    require_once("../../modelo/Usuario.php");
    use modelo\Usuario as Usuario;
    $us = new Usuario();
    $cFK = $_SESSION['pedido']['compradorfk'];
    $cl = $us->actualizar($cFK);
    $cliente = $cl[0];

    $pedido = $_SESSION['pedido']['codigo_pedido'];
    $d = new Detalle();
    $detalle = $d->detallePedido($pedido);

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
<body style="background-image: url(../../img/fondo.jpg);">
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
                <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-productos.php" style="background-color: #adb5bd;">MIS PRODUCTOS</a>
                <a class="flex-sm-fill text-sm-center nav-link bg-dark active" href="vendedor-pedidos.php">PEDIDOS</a>
            </nav>
        </div>
        <!-- BARRA SECUNDARIA -->

        <!-- TERCERA BARRA -->
        <div class="container">
            <nav class="nav nav-pills flex-column flex-sm-row mt-5 mx-auto" style="max-width: 400px;">            
                <a class="flex-sm-fill text-sm-center nav-link link-dark small" href="vendedor-pedidos.php" style="background-color: #adb5bd;">ACEPTADOS</a>
                <a class="flex-sm-fill text-sm-center nav-link link-dark small" href="vendedor-pedidos-sinaceptar.php" style="background-color: #adb5bd;">SIN ACEPTAR</a>
                <a class="flex-sm-fill text-sm-center nav-link link-dark small" href="vendedor-pedidos-historial.php" style="background-color: #adb5bd;">HISTORIAL</a>
            </nav>
        </div>
        <!-- TERCERA BARRA -->

        <!--DETALLE PEDIDO-->
        <div class="container mt-3">
            <a href="vendedor-pedidos.php"><i class="fas fa-chevron-circle-left fs-1 text-dark ms-5 mb-3"></i></a>
            <div class="border bg-light border-2 border-dark rounded mx-auto pb-3" style="max-width: 800px;">
                <h5 class="h5 text-center mt-3 mb-4">DETALLE DEL PEDIDO: <span><?= $_SESSION['pedido']['codigo_pedido'] ?></span></h5>
                <!-- VISTA <LG -->
                <div class="d-none d-md-block">
                    <div class="row">
                        <div class="col-3">
                            <p class="text-end fw-bold">Cliente: </p>
                        </div>
                        <div class="col-3">
                            <p>
                                <span><?=  $cliente['nombre'] ?></span>
                                <span><?=  $cliente['apellidos'] ?></span>
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="text-end fw-bold">Fecha y hora:</p>
                        </div>
                        <div class="col-3">
                            <p>
                                <span><?= $_SESSION['pedido']['hora'] ?></span>
                                <span><?= $_SESSION['pedido']['fecha'] ?></span>
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="text-end fw-bold">Estado del pedido:</p>
                        </div>
                        <div class="col-3">
                            <p><?= ucwords($_SESSION['pedido']['estado']) ?></p>
                        </div>
                        <div class="col-3">
                            <p class="text-end fw-bold">Metodo de pago:</p>
                        </div>
                        <div class="col-3">
                            <p><?= ucwords($_SESSION['pedido']['metodo_pago']) ?></p>
                        </div>
                        <div class="col-3">
                            <p class="text-end fw-bold">Dirección:</p>
                        </div>
                        <div class="col-3">
                            <p><?= $cliente['direccion'] ?></p>
                        </div>
                        <div class="col-3">
                            <p class="text-end fw-bold">Monto:</p>
                        </div>
                        <div class="col-3">
                            <p>$<?= $_SESSION['pedido']['monto'] ?></p>
                        </div>
                        
                        <div class="col-3">
                            <p class="text-end fw-bold">Telefono:</p>
                        </div>
                        <div class="col-3">
                            <p>+56 <?= $cliente['telefono'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- VISTA <LG -->

                <!-- VISTA >MD -->
                <div class="d-md-none">
                    <div class="row">
                        <div class="col-6">
                            <p class="text-end fw-bold">Cliente:</p>
                        </div>
                        <div class="col-5">
                            <p>
                                <span><?=  $cliente['nombre'] ?></span>
                                <span><?=  $cliente['apellidos'] ?></span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="text-end fw-bold">Fecha y hora:</p>
                        </div>
                        <div class="col-6">
                            <p>
                                <span><?= $_SESSION['pedido']['hora'] ?></span>
                                <span><?= $_SESSION['pedido']['fecha'] ?></span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="text-end fw-bold">Estado del pedido:</p>
                        </div>
                        <div class="col-6">
                            <p><?= ucwords($_SESSION['pedido']['estado']) ?></p>
                        </div>
                        <div class="col-6">
                            <p class="text-end fw-bold">Metodo de pago:</p>
                        </div>
                        <div class="col-6">
                            <p><?= ucwords($_SESSION['pedido']['metodo_pago']) ?></p>
                        </div>
                        <div class="col-6">
                            <p class="text-end fw-bold">Dirección:</p>
                        </div>
                        <div class="col-5">
                            <p><?= $cliente['direccion'] ?></p>
                        </div>
                        <div class="col-6">
                            <p class="text-end fw-bold">Monto:</p>
                        </div>
                        <div class="col-6">
                            <p>$<?= $_SESSION['pedido']['monto'] ?></p>
                        </div>
                        <div class="col-6">
                            <p class="text-end fw-bold">Telefono:</p>
                        </div>
                        <div class="col-6">
                            <p>+56 <?= $cliente['telefono'] ?></p>
                        </div>
                        
                    </div>
                </div>
                <!-- VISTA >MD -->
                <h5 class="h5 text-center mt-3 mb-4">Detalles del pedido</h5>
                <table class="table table-hover table-bordered text-center mx-auto table-responsive" style="max-width: 500px;">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($detalle as $d){ ?>
                            <tr>
                                <td><?= $d['codigo_producto'] ?></td>
                                <td><?= $d['nombre_producto'] ?></td>
                                <td><?= $d['cantidad'] ?></td>
                                <td>$<?= $d['precioUnit'] ?></td>
                                <td>$<?= $d['cantidad'] * $d['precioUnit'] ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fw-bold text-end">Envio:</td>
                            <td>$<?= $_SESSION['negocio']['costoEnvio'] ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fw-bold text-end">Total a pagar:</td>
                            <td>$<?= $_SESSION['pedido']['precio_Total'] ?></td>
                        </tr>
                    </tbody>
                </table>  
                <div class="row">               
                    <?php if($_SESSION['pedido']['estado']=='sin aceptar'){ ?>
                        <div class="col-sm-6">
                            <form action="../../controladores/AceptarPedido.php" method="POST">
                                <div class="d-flex flex-row bd-highlight justify-content-center">
                                    <div class="p-2 bd-highlight">
                                        <button name="aceptar" value="<?= $_SESSION['pedido']['codigo_pedido'] ?>" class="btn btn-success px-4"><i class="fas fa-check me-2"></i> Aceptar pedido</button>
                                    </div>           
                                </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-row bd-highlight justify-content-center">
                                <div class="p-2 bd-highlight">
                                    <button name="rechazar" value="<?= $_SESSION['pedido']['codigo_pedido'] ?>" class="btn btn-danger px-4"><i class="fas fa-times me-2"></i>Rechazar pedido</button>
                                </div>
                            </div>
                        </div>
                            </form>
                    <?php } ?>

                    <?php if($_SESSION['pedido']['estado']!='sin aceptar' && $_SESSION['pedido']['estado']!='entregado'){ ?>
                        <form action="../../controladores/CambiarEstadoPedido.php" method="POST">
                            <div class="d-flex flex-row bd-highlight justify-content-center">
                                <div class="p-2 bd-highlight">
                                    <select name="estado" class="form-select mb-3" style="max-width: 300px;">
                                        <option value="en preparacion">En preparación</option>
                                        <option value="en reparto">En reparto</option>
                                        <option value="entregado">Entregado</option>
                                    </select>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <button name="pedido" value="<?= $_SESSION['pedido']['codigo_pedido'] ?>" class="btn btn-sm btn-dark mt-1">CAMBIAR ESTADO</button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                    
                    <p>
                        <?php if(isset($_SESSION['acceso'])){
                            echo $_SESSION['acceso'];
                            unset($_SESSION['acceso']);
                        }?>
                    </p>
                </div>
            </div>
        </div>
        <!--DETALLE PEDIDO-->
    <?php } else { ?>
        <?php header("Location: ../cliente/cliente-inicio.php"); ?>
    <?php } ?>
<?php } else { header("Location: ../../login.php"); ?>     
<?php } ?>
    
<?php include_once '../../footer.php' ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40e29f2951.js" crossorigin="anonymous"></script>
</body>
</html>