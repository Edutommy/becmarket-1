<?php

namespace controladores;

require_once("../modelo/Negocio.php");
use modelo\Negocio as Negocio;

class EditarNegocio{
    private $dias;
    private $h1;
    private $h2;
    private $tele;
    private $email;
    private $costo;

    public function __construct()
    {
        $this->dias = $_POST['dias'];
        $this->h1 = $_POST['h1'];
        $this->h2 = $_POST['h2'];
        $this->tele = $_POST['tele'];
        $this->email = $_POST['email'];
        $this->costo = $_POST['costo'];
    }

    public function editarDatos(){
        session_start();
        $rut = $_SESSION['negocio']['rut_negocio'];
        $horario = $this->h1 . " a " . $this->h2;
        $negocio = new Negocio();
        $data = [
            'diasAtencion'=>$this->dias,
            'horarioAtencion'=>$horario,
            'telefono'=>$this->tele,
            'email'=>$this->email,
            'costoEnvio'=>$this->costo
        ];
        $c = $negocio->editarDatos($data,$rut);
        if($c == 1){
            $a = $negocio->buscarNegocio($rut);
            $update = $a[0];
            $_SESSION['negocio'] = $update;
            $_SESSION['msg'] = "listo";
            header("Location: ../vistas/vendedor/vendedor-inicio.php");
        }else{
            $_SESSION['msg'] = "casi";
        }
    }


}
$obj = new EditarNegocio();
$obj->editarDatos();