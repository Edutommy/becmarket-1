<?php

namespace modelo;
require_once("Conexion.php");

class Pedidos{

    //PEDIDOS DEL NEGOCIO

    public function pedidosNegocio($estado,$negocio){
        $stm = Conexion::conector()->prepare("SELECT * FROM pedido WHERE estado=:A AND negociofk=:B");
        $stm->bindParam(":A",$estado);
        $stm->bindParam(":B",$negocio);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }


}