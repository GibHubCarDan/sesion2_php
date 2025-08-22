<?php
include 'Animal.php';
class Gato extends Animal
{
    public function hablar()
    {
        return "Miau! Soy " . $this->nombre;
    }
}


$gato = new Gato("Misi");
echo $gato->datoIngresado();
echo "<br>";
echo $gato->hablar(); // Miau! Soy Misi