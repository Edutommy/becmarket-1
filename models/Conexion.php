<?php

namespace models;

use PDO;
use PDOException;

class Conexion{
    private $servidor = "localhost";
    private $db = "bec_market";
    private $puerto = 3306;
    private $charset = "utf8";
    private $usuario = "root";
    private $contrasena = "root";
    public $pdo = null;
    private $atributos = [PDO::ATTR_CASE=>PDO::CASE_LOWER,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    function __construct()
    {
        $this->pdo = new PDO("mysql:dbname={$this->db};host={$this->servidor};port={$this->puerto};charset={$this->charset};",
                                $this->usuario, $this->contrasena, $this->atributos);
    }
};