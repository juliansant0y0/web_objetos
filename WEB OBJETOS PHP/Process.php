
<?php
//traer librerias o importar archivos
include('Cuadrado.php');
include('Triangulo.php');
include('Rectangulo.php');
//traer valores de la web
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
//crear objetos
$cuadrado = new Cuadrado($valor1);
$cuadrado->calcularArea();
echo "<br>";
echo "<br>";
$t = new Triangulo($valor1,$valor2);
$t->Area();
echo "<br>";
echo "<br>";
$r = new Rectangulo($valor1,$valor2);
$r->Area();



?>