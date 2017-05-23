<?php

namespace Vehiculos;

require_once 'VehiculoBase.php';

class Camion extends VehiculoBase
{
	//public static $contador = 0;
	private static $contador = 0;
	private $tipo;

	public function __construct($pPropietario, $pTipo)
	{
		$this->tipo = $pTipo;
		$this->propietario = $pPropietario;
		self::$contador++;
	}

	/*public function mover()
	{
		echo "camion en movimiento <br>";
	}*/

	public function getPropietario()
	{
		echo $this->propietario;
	}

	public static function getTotal()
	{
		return self::$contador;
	}

	public function startEngine()
	{
		return 'Camioneta: Arrancando <br>';
	}
}