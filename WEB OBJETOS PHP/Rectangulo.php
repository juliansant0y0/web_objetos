<?php

class Rectangulo {
    // Propiedades para almacenar la base y la altura del rectángulo
    private $base;
    private $altura;

    // Constructor para inicializar la base y la altura
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    // Método para calcular el área del rectángulo
    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

// Crear un objeto de la clase Rectangulo con base 5 y altura 10
$rectangulo = new Rectangulo(5, 10);

// Mostrar el área del rectángulo
echo "Área del rectángulo: " . $rectangulo->calcularArea();

?>
