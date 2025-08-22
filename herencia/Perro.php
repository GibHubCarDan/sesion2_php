<?php
// Clase hija que hereda de Animal
include 'Animal.php';
class Perro extends Animal
{
    public function hablar()
    {
        return "Guau! Soy " . $this->nombre;
    }
}

$perro = new Perro("Firulais");
echo $perro->datoIngresado();
echo "<br>";
echo $perro->hablar(); // Guau! Soy Firulais


