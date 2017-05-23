<?php

include_once 'carro.php';
include_once 'camioneta.php';

	$vehiculo1 = new carro('Daniel Melchor', '176CVQ', 'ABC123','123ABC','rojo');
	//$vehiculo1 = new Vehiculo('Daniel Melchor', '176CVQ', 'ABC123','123ABC');
	echo "Datos del vehiculo 1 <br>";
	echo "Propietario ".$vehiculo1->getPropietario().'<br>';
	echo "Placa       ".$vehiculo1->getPlaca().'<br>';
	echo "Motor       ".$vehiculo1->getMotor().'<br>';
	echo "Chasis      ".$vehiculo1->getChasis().'<br>';
	echo "Color       ".$vehiculo1->getColor().'<br>';
	echo "<br>";
	echo "<br>";
	$vehiculo2 = new camioneta('Carlos Melchor', '123ABC', 'ABC475', '11111','blanco', '1.5');
	echo "Datos del vehiculo 2 <br>";
	echo "Propietario ".$vehiculo2->getPropietario().'<br>';
	echo "Placa       ".$vehiculo2->getPlaca().'<br>';
	echo "Motor       ".$vehiculo2->getMotor().'<br>';
	echo "Chasis      ".$vehiculo2->getChasis().'<br>';
	echo "Color       ".$vehiculo2->getColor().'<br>';
	echo "Tonelaje    ".$vehiculo2->getTonelada().'<br>';