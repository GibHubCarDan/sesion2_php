<?php
interface Autenticable
{
    public function iniciarSesion($usuario, $contrasena);
    public function cerrarSesion();

}