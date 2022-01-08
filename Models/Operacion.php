<?php

require_once "./Conexion.php";

Class Operacion  {
    
public $numero1 ;
public $numero2 ;
public $opcion ;
public $resultado;

echo "dasdls"; 


public function __construct() {
    $this->con = new Conexion();
    }
    public function getNumero1() {
        return $this->numero1;
    }
    public function getNumero2() {
        return $this->numero2;
    }
    public function getMetodo() {
        return $this->metodo;
    }
    public function setNumero1($numero1): void {
        $this->numero1 = $numero1;
    }
    public function getResultado() {
        return $this->resultado;
    }

    public function setResultado($resultado): void {
        $this->resultado = $resultado;
    }
    public function getOpcion() {
        return $this->opcion;
    }

    public function setOpcion($opcion): void {
        $this->opcion = $opcion;
    }

          
public function sumar() {
    $this->setResultado($this->getNumero1()+ $this->getNumero2());
      $this->insertarOperacion();
}
public function restar() {
     $this->setResultado($this->getNumero1() - $this->getNumero2());
       $this->insertarOperacion();
}
public function dividir() {
    
    $this->setResultado($this->getNumero1() / $this->getNumero2());
      $this->insertarOperacion();
}
public function Multiplicar() {
    
  $this->setResultado($this->getNumero1() * $this->getNumero2());
  $this->insertarOperacion();
}


public function consultaHistorial( ) {
    $sql = "SELECT * FROM historial LIMIT 5  ";
    $datos = $this->con->queryRetorno($sql);
    return $datos;
}
public function insertarOperacion() {
     $sql = "INSERT INTO historial(numero1,numero2,metodo,resultado,fecha) VALUES ('{$this->numero1}','{$this->numero2}','{$this->opcion}','{$this->resultado}', NOW())  ";
     $this->con->querySimple($sql);
}








}