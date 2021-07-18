<?php
namespace controladores;

require_once("../modelo/Pedidos.php");
use modelo\Pedidos as Pedidos;


class VerDetalle{
    public $codigo;

    public function __construct()
    {
        $this->codigo = $_POST['detalle'];
    }

    public function verDetalle(){
        #AWEONA 
        session_start();
        $code = $this->codigo;
        $pedido = new Pedidos();
        $p = $pedido->pedido($code);
        $_SESSION['pedido'] = $p[0];

        header("Location: ../vistas/cliente/cliente-pedido-detalle.php");

    }

}
$obj = new VerDetalle();
$obj->verDetalle();