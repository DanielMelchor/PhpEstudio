<?php
namespace Vehiculos;

abstract class VehiculoBase
{
	protected $propietario;
	public function __construct($pPropietario)
	{
		$this->propietario = $pPropietario;
		echo "constructor <br>";
	}
	public function mover()
	{
		echo $this->startEngine();
		echo "moviendo desde VehiculoBase <br>";
	}
	public abstract function startEngine();
}