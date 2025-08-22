<?php
class Coche
{
    public $marca;
    public $modelo;
    public $color;

    public function __construct($marca, $modelo, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function mostrarDetalles()
    {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Color: " . $this->color;
    }
}

$c1 = new Coche("Toyota", "Corolla", "Rojo");
echo $c1->mostrarDetalles();
