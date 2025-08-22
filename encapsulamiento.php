<?php
class CuentaBancaria
{
    private $saldo = 0; // Encapsulado

    // Método público para depositar
    public function depositar($monto)
    {
        if ($monto > 0) {
            $this->saldo += $monto;
        }
    }

    // Método público para ver el saldo
    public function getSaldo()
    {
        return $this->saldo;
    }
}

$cuenta = new CuentaBancaria();
$cuenta->depositar(100);
// echo $cuenta->saldo; ❌ Error, es private
echo $cuenta->getSaldo(); // ✅ 100
