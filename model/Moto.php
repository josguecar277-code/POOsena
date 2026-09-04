<?php

require_once __DIR__ .'/Vehiculo.php';

class Moto extends Vehiculo {
// Atributo propio de Moto 

    private $cilindrada;

   
    public function __construct($marca, $estado, $cilindrada) {
        // Llama al padre (Reutilizacion)

        parent::__construct($marca, 'Moto' , $estado);

        //Inicializamos del atributo propio de moto
        $this->cilindrada = $cilindrada;
    }
    

//GETTERS Y SETTERS propios de Moto

public function getCilindrada(){
    return $this->cilindrada;
}



public function setCilindrada($cilindrada){ 
     $this->cilindrada =$cilindrada;
}


#[Override]
	public function mostrarInfoo() {
        return parent::mostrarInfoo() . "| Cilindrada:
         {$this->cilindrada} cc. ";
    }

}