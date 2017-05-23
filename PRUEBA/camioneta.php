<?php
/**
* Calse para vehiculos livianos
*/
include_once 'Vehiculo.php';
class camioneta extends Vehiculo
{
	private $color;
	private $tonelada;
	public function __construct($pPropietario, $pPlaca, $pMotor, $pChasis, $pColor, $pTonelada)
	{
		$this->propietario = $pPropietario;
		$this->placa       = $pPlaca;
		$this->motor       = $pMotor;
		$this->chasis      = $pChasis;
		$this->color       = $pColor;
		$this->tonelada    = $pTonelada;
	}
	function getColor()
	{
		return $this->color;
	}
	function getTonelada()
	{
		return $this->tonelada;
	}
}