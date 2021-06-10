<?php

use models\Conexion;

include_once 'Conexion.php';

    class Usuario{
        var $objetos;
        public function __construct(){
            $db = new Conexion();
            $this->acceso = $db->pdo;
        }
        function loguearse($user, $pass){
            $sql="SELECT * FROM usuario WHERE email = :A AND contrasena = :B";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(":A" => $user, ":B" => $pass));
            $this->objetos = $query->fetchAll();
            return $this->objetos;
        }
    };
?>