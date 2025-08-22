<?php
trait Log
{
    public function registrar($mensaje)
    {
        echo "[LOG]: " . $mensaje . "<br>";
    }
}

trait Notificacion
{
    public function enviarEmail($destinatario, $contenido)
    {
        echo "Enviando email a $destinatario: $contenido<br>";
    }
}
trait DatoIngresado
{
    public function datoIngresado($nombre, $edad)
    {
        echo "Dato ingresado, Nombre: $nombre - Edad: $edad<br>";
    }
}
