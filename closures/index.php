<?php
//	$var2 = 1;
	//$var = function () use ($var2)
	//{
	//	echo 'this is a closure <br>';
	//	echo "value: ".$var2;
	//};
	//$var();
$x = 3;
$numeros = [1,2,3,4,5];
$result = $numeros;
$closure = function($n) use($x){return $n * $x;};
$result = array_map($closure, $numeros);
var_dump($result);
//var_dump($numeros);