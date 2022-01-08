<?php

Class Conexion{
    
private $datos = array (
    "host"=>"localhost",
    "user"=>"root",
    "pass"=>"",
    "db"=>"calculadora",   
);
private  $con;

public function __construct() {
    $this->con = new mysqli($this->datos['host'],
    $this->datos['user'],
    $this->datos['db']);
}
public function querySimple($sql){
    $this->con->query($sql);
    
}

public function queryRetorno($sql){
    $datos = $this->con->query($sql);
    return $datos;
    
}

}