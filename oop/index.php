<?php
include 'vehiculos/Carro.php';
include 'vehiculos/Camion.php';
include 'vehiculos/CarroDeJuguete.php';

use vehiculos\Carro;
use vehiculos\Camion;
use vehiculos\CarroDeJuguete;

try {
	echo "Clase carro de juguete <br>";
	$carro2 = new CarroDeJuguete('Alex');
	//$carro2->startEngine();
	//$carro2->mover();
} catch (Exception $e) {
	echo "Carro de juguete <br>";
} finally{
	echo 'finally <br><br>';
}


echo "Clase carro <br>";
$carro1 = new carro('Alex');
$carro1->mover();
//echo "Propietario ".$carro1->getPropietario();

echo "<br> Camioneta 1 <br>";
$Camion1 = new camion('Max','Pickup');
$Camion1->mover();

echo "<br> Camioneta 2 <br>";
$Camion2 = new camion('Max','Pickup');
$Camion2->mover();


echo "total camionetas ".Camion::getTotal()."<br>";
//echo "Propietario Camion ".$Camion1->getPropietario();


$ser = serialize($Carro1);
$newCar = unserialize($ser);
echo "NewCar propeitario: ". $newCar->getPropietario(). "<br>";