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

    public function historialNegocio($negocio){
        $stm = Conexion::conector()->prepare("SELECT * FROM pedido WHERE negociofk=:A AND estado='entregado' OR estado='rechazado'");
        $stm->bindParam(":A",$negocio);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function enCursoNegocio($negocio){
        $stm = Conexion::conector()->prepare("SELECT * FROM pedido WHERE negociofk=:A AND estado NOT LIKE 'entregado' AND estado NOT LIKE 'rechazado' AND estado NOT LIKE 'sin aceptar' ");
        $stm->bindParam(":A",$negocio);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    //PEDIDOS DEL CLIENTE | ESTADO != ENTREGADO
    public function pedidosEnCursoCliente($cliente){
        $stm = Conexion::conector()->prepare("SELECT * FROM pedido WHERE compradorfk=:A AND estado NOT LIKE 'entregado' AND estado NOT LIKE 'rechazado'");
        $stm->bindParam(":A",$cliente);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    //PEDIDOS DEL CLIENTE | ESTADO = ENTREGADO
    public function pedidosEntregadosCliente($cliente){
        $stm = Conexion::conector()->prepare("SELECT * FROM pedido WHERE compradorfk=:A AND estado='entregado' OR estado='rechazado'");
        $stm->bindParam(":A",$cliente);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function pedido($codigo){
        $stm = Conexion::conector()->prepare("SELECT * FROM pedido WHERE codigo_pedido=:A");
        $stm->bindParam(":A",$codigo);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    //BUSCAR PEDIDO POR ESTADO
    public function buscarPorEstado($estado,$negocio){
        $stm = Conexion::conector()->prepare("SELECT * FROM pedido WHERE estado=:A AND negociofk=:B");
        $stm->bindParam(":A",$estado);
        $stm->bindParam(":B",$negocio);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }

    //CAMBIAR ESTADO DEL PEDIDO
    public function cambiarEstado($estado,$pedido){
        $stm = Conexion::conector()->prepare("UPDATE pedido SET estado=:A WHERE codigo_pedido=:B");
        $stm->bindParam(":A", $estado);
        $stm->bindParam(":B", $pedido);
        return $stm->execute();
    }

}