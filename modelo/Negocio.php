<?php

namespace modelo;
require_once("Conexion.php");

class Negocio{
    public function nuevoNegocio($data)
    {
        $stm = Conexion::conector()->prepare("INSERT INTO negocio VALUES(:A,:B,:C,:D,:E,:F,:G,:H,:I,:J,:K)");
        $stm->bindParam(":A",$data['rut_negocio']);
        $stm->bindParam(":B",$data['nombreNegocio']);
        $stm->bindParam(":C",$data['direccionNegocio']);
        $stm->bindParam(":D",$data['imagenNegocio']);
        $stm->bindParam(":E",$data['estadoNegocio']);
        $stm->bindParam(":F",$data['costoEnvio']);
        $stm->bindParam(":G",$data['tipoNegocio']);
        $stm->bindParam(":H",$data['horarioAntencion']);
        $stm->bindParam(":I",$data['diasAntencion']);
        $stm->bindParam(":J",$data['abierto_cerrado']);
        $stm->bindParam(":K",$data['vendedorfk']);
        return $stm->execute();
    }

    public function buscarNegocioVendedor($codeUser){
        $stm = Conexion::conector()->prepare("SELECT * FROM negocio WHERE vendedorfk=:A");
        $stm->bindParam(":A",$codeUser);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}