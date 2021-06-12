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
    <?php session_start();
        if(isset($_SESSION['user'])){
            if($_SESSION['user']['tipo'] == 1){
                header("Location: vistas/cliente/cliente-inicio.php");
            } else {
                header("Location: vistas/vendedor/vendedor-inicio.php");
            }
        }
    ?>
    <div class="container" style="max-width: 910px;">
        <h2 class="display-5 text-center pt-5">BEC Market</h2>

        <form action="controladores/nuevoUsuario.php" method="POST">
            <div class="row bg-light mx-auto mt-5 border border-dark rounded-3 pb-3">            
                <div class="col-12 pt-3">
                    <h5 class="h4 text-center pb-4">Registrate</h5>
                </div>

                <div class="col-sm-6 px-4">
                    <label for="inputnombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control mb-3" id="nombre" name="nombre" style="max-width: 400px;">

                    <label for="inputape" class="form-label">Apellidos</label>
                    <input type="text" class="form-control mb-3" id="apellidos" name="apellidos" style="max-width: 400px;">

                    <label for="inputdir" class="form-label">Dirección</label>
                    <input type="text" class="form-control mb-3" id="direccion" name="direccion" style="max-width: 400px;" placeholder="Calle #numero">
                </div>

                <div class="col-sm-6 px-4">
                    <label for="inputcelu" class="form-label">Celular</label>
                    <input type="text" class="form-control mb-3" id="telefono" name="telefono" style="max-width: 400px;" placeholder="+56987654321">

                    <label for="inputemail" class="form-label">Email</label>
                    <input type="text" class="form-control mb-3" id="email" name="email" style="max-width: 400px;" placeholder="correo@example.com">

                    <label for="inputpw" class="form-label">Contraseña</label>
                    <input type="password" class="form-control mb-3" id="pass" name="pass" style="max-width: 400px;" placeholder="Debe contener de 8 a 20 caracteres">
                </div>

                <div class="col-12 px-3 mt-3">
                    <p class="lead text-decoration-underline text-center">
                        Al registrarte aceptas los Términos & Condiciones y la Política de Privacidad
                    </p>
                </div>

                <div class="row row row-cols-2 row-cols-sm-1 row-cols-md-3">
                    <div class="col-sm-4 mt-4">
                        <a href="index.php" class="ms-5 mt-3"><i class="fas fa-chevron-circle-left display-5 text-dark"></i></a>
                    </div>

                    <div class="col-sm-4 mt-4">
                        <button type="button" class="btn btn-dark">REGISTRARSE</button>
                        <?php 
                        session_start();
                        if(isset($_SESSION['respuesta'])){echo $_SESSION['respuesta'];} 
                        if(isset($_SESSION['error'])){echo $_SESSION['error'];} 
                        ?>
                    </div>            
                    <div class="col-sm-4 text-center mt-4 mx-auto">
                        <p class="text-center">
                            ¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>
                        </p>
                    </div>           
                </div>
            </div>
        </form>
    </div>

    <div class="container text-center" style="margin-top: 100px;">
        <div class="row mt-5">
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

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40e29f2951.js" crossorigin="anonymous"></script>

</body>

</html>