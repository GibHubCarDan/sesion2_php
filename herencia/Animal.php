<?php
// Clase padre
class Animal
{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function hablar()
    {
        return "Hace un sonido...";
    }
    public function datoIngresado()
    {
        return "Se ingreso el nombre: " . $this->nombre;
    }
}


