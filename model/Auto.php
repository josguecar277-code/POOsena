<?php


require_once __DIR__ . '/Vehiculo.php';

class Auto extends Vehiculo{
    private $numeroPuertas;

    #[Override]
    public function __construct($marca, $tipo, $numeroPuertas)
    {
        parent::__construct($marca, 'Auto', $estado);
        $this->numeroPuertas = $numeroPuertas;
    }
}



//GETTERS y SETTERS

public function getNumeroPuertas(){
    return $this->getNumeroPuertas;
}

public function setNumeroPuertas($numeroPuertas){
     $this->getNumeroPuertas = $numeroPuertas;
}

public function mostrarInfo(){
    return parent:: mostrarInfo = $numeroPuertas;
}

