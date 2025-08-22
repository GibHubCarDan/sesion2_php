<?php
include 'Autenticable.php';
class Usuario implements Autenticable
{


    public function iniciarSesion($usuario, $contrasena)
    {
        return "El usuario $usuario ha iniciado sesión con la contraseña proporcionada.";
    }

    public function cerrarSesion()
    {
        return "El usuario ha cerrado sesión.";
    }
}
$usuario = new Usuario();
echo $usuario->iniciarSesion("Juan", "12345");