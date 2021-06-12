<?php

namespace modelo;
require_once("Conexion.php");

class Usuario{

    public function inicarSesion($email, $contrasena){
        $stm = Conexion::conector()->prepare("SELECT * FROM usuario WHERE email=:A AND contrasena=:C");
        $stm->bindParam(":A",$email);
        $stm->bindParam(":C",$contrasena);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function crearUsuarios($data){
        $stm = Conexion::conector()->prepare("INSERT INTO usuario VALUES(:A,:B,:C,:D,:E,:F,:G,:H,:I,:J,:K)");
        $stm->bindParam(":A",$data['codigo_usuario']);
        $stm->bindParam(":B",$data['email']);
        $stm->bindParam(":C",$data['nombre']);
        $stm->bindParam(":D",$data['apellidos']);
        $stm->bindParam(":E",md5($data['contrasena']));
        $stm->bindParam(":F",$data['telefono']);
        $stm->bindParam(":G",$data['estado']);
        $stm->bindParam(":H",$data['direccion']);
        $stm->bindParam(":I",$data['tipo']);
        $stm->bindParam(":J",$data['imagen']);
        $stm->bindParam(":K",$data['fechaCreacion']);
        return $stm->execute();
    }
    

}
