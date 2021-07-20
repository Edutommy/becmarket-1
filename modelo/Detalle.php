<?php

namespace modelo;
require_once("Conexion.php");

class Detalle{
    public function detallePedido($pedido){
        $stm = Conexion::conector()->prepare("SELECT * FROM detalle WHERE codigo_pedido=:A");
        $stm->bindParam(":A",$pedido);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}