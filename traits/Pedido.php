<?php
include 'Traits.php';
class Pedido
{
    use Log, Notificacion, DatoIngresado;

    public function procesar()
    {
        $this->registrar("Pedido procesado.");
        $this->enviarEmail("cliente@correo.com", "Su pedido ha sido enviado.");
        $this->datoIngresado("Juan", 30);
    }
}
$pedido = new Pedido();
$pedido->procesar();