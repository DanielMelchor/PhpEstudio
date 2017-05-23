<?php
/**
* clase vehiculo
*/
class Vehiculo
{
	protected $propietario;
	protected $placa;
	protected $motor;
	protected $chasis;

	function __construct($pPropietario, $pPlaca, $pMotor, $pChasis)
	{
		$this->propietario = $pPropietario;
		$this->placa       = $pPlaca;
		$this->motor       = $pMotor;
		$this->chasis      = $pChasis;
	}
	function getPropietario()
	{
		return $this->propietario;
	}
	function getPlaca()
	{
		return $this->placa;
	}
	function getMotor()
	{
		return $this->motor;
	}
	function getChasis()
	{
		return $this->chasis;
	}
}
