<?php
    include_once '../models/Usuario.php';
    $usuario = new Usuario();
    session_start();
    if($_POST['funcion'] == 'login'){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $usuario->loguearse($user, $pass);
        if($usuario->objetos != null){
            foreach ($usuario->objetos as $objeto) {
                $_SESSION['id'] = $objeto->codigo_usuario;
                $_SESSION['email'] = $objeto->email;
                $_SESSION['nombre'] = $objeto->nombre;
                $_SESSION['apellido'] = $objeto->apellidos;
            }
            echo 'logueado';
        }      
    }
    if($_POST['funcion'] == 'verificar_sesion'){
        if(!empty($_SESSION['id'])){
            $json[] = array(
                'id'=>$_SESSION['id'],
                'email'=>$_SESSION['email'],
                'nombre'=>$_SESSION['nombre'],
                'apellido'=>$_SESSION['apellido']
            );
            $jsonString = json_encode($json[0]);
            echo $jsonString;
        } else {
            echo '';
        }
    }
?>