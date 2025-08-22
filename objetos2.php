<?php
class Persona
{
    public $nombre;
    public $edad;

    function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function mostrarDetalles()
    {
        return "Nombre: " . $this->nombre . ", Edad: " . $this->edad;
    }

}

$persona1 = new Persona("Carlos", 23);
echo $persona1->mostrarDetalles();
echo "<br>----------------------------------------------------------------<br>";