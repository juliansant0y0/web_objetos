<?php

class Triangulo{

	var $base;
	var $altura;

	function Triangulo($a,$b){
		$this->base=$b;
		$this->altura=$a;
	}

	function Area(){
		$area = ($this->base * $this->altura)/2;
		echo "El area del triangulo es: ".$area;
	}
}
$t=new Triangulo(10,12);
$t->Area();
echo "<br>";
?>
