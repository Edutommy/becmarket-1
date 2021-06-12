<?php

namespace controladores;

require_once("../modelo/Usuario.php");

use modelo\Usuario as Usuario;


class nuevoUsuario
{
    private $email;
    private $nombre;
    private $apellidos;
    private $contrasena;
    private $telefono;
    private $direccion;

    public function __construct()
    {
        $this->email = $_POST['email'];
        $this->nombre = $_POST['nombre'];
        $this->apellidos = $_POST['apellidos'];
        $this->contrasena = $_POST['pass'];
        $this->telefono = $_POST['telefono'];
        $this->direccion = $_POST['direccion'];
    }

    public function agregar()
    {
        session_start();
        $model = new Usuario;
        $data = [
            "email" => $this->email, "nombre" => $this->nombre, "apellidos" => $this->apellidos, 
            "pass" => $this->contrasena, "telefono" => $this->telefono, "direccion" => $this->direccion,
            "codigo" => "100", "estado" => 1, "tipo" => 1, "fecha" => "2021-06-11", "imagen" => "https://localhost/BECMarket/img/noimg.png"
        ];
        $count = $model->crearUsuarios($data);
        if($count == 1){
            $_SESSION['respuesta'] = "Usuario Creado con Exito!";
            header("Location: ../registro.php");
        } else {
            $_SESSION['error'] = "Hubo un error a nivel de base de datos";
            header("Location: ../registro.php");
        }
    }
}

$obj = new nuevoUsuario();
$obj->agregar();
