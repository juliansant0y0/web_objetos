<?php

class Cuadrado {
    // Propiedad para almacenar el lado del cuadrado
    private $lado;

    // Constructor para inicializar el lado
    public function __construct($lado) {
        $this->lado = $lado;
    }

    // Método para obtener el valor del lado
    public function getLado() {
        return $this->lado;
    }

    // Método para establecer un nuevo valor para el lado
    public function setLado($lado) {
        $this->lado = $lado;
    }

    // Método para calcular el área del cuadrado
    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    // Método para calcular el perímetro del cuadrado
    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}

// Crear un objeto de la clase Cuadrado
$cuadrado = new Cuadrado(5);

// Mostrar el área y el perímetro
echo "Área del cuadrado: " . $cuadrado->calcularArea() . "<br>";
echo "Perímetro del cuadrado: " . $cuadrado->calcularPerimetro() . "<br>";

?>
