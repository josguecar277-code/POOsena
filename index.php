<?php

require_once __DIR__ . '/controller/ControladorVehiculo.php';
require_once __DIR__ . '/view/VistaVehiculo.php';

$vista = new VistaVehiculo();

$controlador = new ControladorVehiculo($vista);


$controlador->demostrar();    








// echo "esta es la pagina de entrada";

// $Vehiculo = new Vehiculo("Daewwo","carro", true);
// var_dump($Vehiculo->getMarca) 