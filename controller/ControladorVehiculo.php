<?php
// Importacion dde las clases del modelo que el controller usara
require_once __DIR__ . '/../model/Vehiculo.php';
require_once __DIR__ . '/../model/Auto.php';
require_once __DIR__ . '/../model/Moto.php';


// Importacion a la view que el controller utilizara
require_once __DIR__ . '/../view/VistaVehiculo.php';

class ControladorVehiculo{
    private $vista;

    /** @param VistaVehiculo $vista*/
    public function __construct(VistaVehiculo $vista){
    $this->vista = $vista;

    }

    public function demostrar () {
        //Titulo Inicial
        $this->vista->mostrarTitulo('Demostracion POO -- Vehiculos (MVC)');
    
    
    $vehiculos = array (
        new Vehiculo ('Generico', 'Vehiculo', true),
        new Auto ('Toyota', true, 4),
        new Auto ('Renault',false, 5),
        new Moto('Yamaha', true, 15), 
        new Moto ('Honda', true, 250)

    );


    $this->vista->mostarSeparador();
    foreach ($vehiculos as $vehiculos){
        $this->vista->mostrarVehiculo($vehiculo);
    }
    $this->vista->mostarSeparador();


    echo "<br>pilares POO aplicados <br>";
    echo " - Encapsulamiento: atributos privados (marca, tipo, estado).<br>";
    echo " - Herencia: Auto y Moto heredan de Vehiculo <br>";
    echo " -Poliformismo: mostrarInfo() se comporta distinto en cada subclase.<br>"

}

}