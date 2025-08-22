<?php
include 'Animal.php';
class Perro extends Animal
{
    public function hablar()
    {
        return "Guau! Soy " . $this->nombre;
    }
}
class Gato extends Animal
{
    public function hablar()
    {
        return "Miau! Soy " . $this->nombre;
    }
}

class Pato extends Animal
{
    public function hablar()
    {
        return "Cuac! Soy " . $this->nombre;
    }
}

$animales = [
    new Perro("Rocky"),
    new Gato("Michi"),
    new Pato("Donald")
];

// Todos tienen el método hablar(), pero cada uno responde distinto
foreach ($animales as $animal) {
    echo $animal->hablar() . "<br>";
}
