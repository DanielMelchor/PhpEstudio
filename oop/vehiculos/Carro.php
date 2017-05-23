<?php

namespace Vehiculos;

require_once 'VehiculoBase.php';

class Carro extends VehiculoBase implements \Serializable
{
	public function mover(){
		echo "carro en movimiento <br>";
	}

	public function getPropietario()
	{
		echo $this->propietario;
	}

	public function startEngine()
	{
		return 'Carro: Arranca';
	}

	public function serialize()
	{
		echo "Serialize<br>";
		return $this->propietario;
	}

	public function unserialize($serialize)
	{
		echo "unserialize<br>";
		$this->propietario = $serialize;
	}
}