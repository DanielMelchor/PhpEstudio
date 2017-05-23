<?php

namespace Vehiculos;

require_once 'VehiculoBase.php';

class CarroDeJuguete extends VehiculoBase 
{
	public function mover(){
		echo $this->startEngine();
		echo "carro en movimiento <br>";
	}

	public function startEngine()
	{
		throw new \Exception("Carro de juguete", 1);
	}
}