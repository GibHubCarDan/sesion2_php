<?php
include 'Animal.php';
class Pato extends Animal
{
    public function hablar()
    {
        return "Cuac! Soy " . $this->nombre;
    }
}

$pato = new Pato("Paco");
echo $pato->datoIngresado();
echo "<br>";
echo $pato->hablar(); // Cuac! Soy Paco