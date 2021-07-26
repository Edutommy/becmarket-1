<?php 
    session_start(); 
    use modelo\Producto as Producto;
    require_once("../../modelo/Producto.php");
    $model = new Producto();
    $count = count($_SESSION['newPedido']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Realizar pedido | BEC Market</title>
    <?php include_once '../../header.php' ?>
</head>

<body style="background-image: url(../../img/fondo.jpg);">
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
            
            
            <div class="container mt-5">
                <form action="../../controladores/RealizarPedido.php" method="POST">
                    <div class="row mx-5">
                        <h3 class="mt-3 bg-light p-3">PROCESAR COMPRA</h3>
                        <div class="col-12 border border-dark rounded bg-light mt-4">
                            <h5 class="mt-3 ps-5 bg-transparent card-header">TUS DATOS</h5>
                            <div class="row mx-4 d-flex justify-content-evenly mt-4 pb-4">
                                <div class="col-md-4 mb-3">
                                    <p class="fw-bold mb-1">NOMBRE</p>
                                                                
                                    <span>
                                        <?= $_SESSION['user']['nombre'] ?>
                                        <?= $_SESSION['user']['apellidos'] ?>
                                    </span>    
                                </div>
                                <div class="col-md-4 mb-4">
                                    <p class="fw-bold mb-1">DIRECCION</p>
                                    <input name="direccion" type="text" class="form-control form-control-sm" value="<?= $_SESSION['user']['direccion'] ?>" style="max-width: 300px;"> 
                                </div>
                                <div class="col-md-4">
                                    <p class="fw-bold mb-1">TELEFONO</p>                              
                                    <span>+56 
                                        <?= $_SESSION['user']['telefono'] ?>
                                    </span>                              
                                </div>
                                <input name="negocio" type="hidden" value="<?= $_SESSION['ne']['rut_negocio'] ?>">
                            </div>
                        </div>


                        <div class="col-12 border-end border-start border-bottom border-dark rounded bg-light px-md-5">
                            <table class="table table-hover table-bordered text-center mx-auto table-responsive mt-4">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">CANTIDAD</th>
                                        <th scope="col">PRODUCTO</th>
                                        <th scope="col">PRECIO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $total = 0;
                                        
                                        for ($i=0; $i < $count; $i++) { 
                                            $cod = $_SESSION['newPedido'][$i]['codigo'];
                                            $asd = $model->buscarCodigo($cod);
                                            $a = $asd[0];
                                            $qty = $_SESSION['newPedido'][$i]['cantidad'];
                                            $prc = $_SESSION['newPedido'][$i]['precio'];
                                            $total = $total + ($qty * $prc);
                                        ?>
                                        <tr>
                                            <td><?= $_SESSION['newPedido'][$i]['cantidad']; ?></td>
                                            <td><?= $a['nombre'] ?></td>
                                            <td>$<?= $_SESSION['newPedido'][$i]['precio']; ?></td>
                                        </tr>
                                    <?php 
                                        $totalb = $total + $_SESSION['ne']['costoEnvio'];
                                        } 
                                    ?>
                                    
                                </tbody>
                            </table>
                            
                        </div>

                        <div class="col-12 border-end border-start border-bottom border-dark rounded bg-light">
                            <div class="row">
                                <div class="col-lg-6 border-end border-dark pt-4 px-5">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr class="fs-6">
                                                <th scope="row">Subtotal:</th>
                                                <td>$<?= $total ?></td>
                                            </tr>
                                            <tr class="fs-6">
                                                <th scope="row">Envio:</th>
                                                <td>$<?= $_SESSION['ne']['costoEnvio'] ?></td>
                                            </tr>
                                            <tr class="fs-5">
                                                <th scope="row">Total a pagar:</th>
                                                <td>$<?= $totalb ?></td>
                                                <input name="total" type="hidden" value="<?= $totalb ?>">
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6 pt-3 pb-2 px-5">
                                    <p class="fw-bold ms-2 fs-5">Método de pago</p>
                                    <p class="ms-2 text-danger">Por el momento solo puedes pagar en la entrega</p>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mt-1">
                                            <p class="fw-bold ms-2 mb-1">Monto con el que pagarás</p>
                                            <input name="monto" type="text" class="form-control form-control-sm ms-2" placeholder="2000" style="max-width: 300px;">                               
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-end mt-md-4 mt-3">
                                                <button class="btn btn-dark">REALIZAR PEDIDO</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>




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
