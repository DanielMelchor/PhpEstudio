<?php
/**
* Calse para vehiculos livianos
*/
include_once 'Vehiculo.php';
class carro extends Vehiculo
{
	private $color;
	public function __construct($pPropietario, $pPlaca, $pMotor, $pChasis, $pColor)
	{
		$this->propietario = $pPropietario;
		$this->placa       = $pPlaca;
		$this->motor       = $pMotor;
		$this->chasis      = $pChasis;
		$this->color       = $pColor;
	}
	function getColor()
	{
		return $this->color;
	}
}

