<?php
namespace App;
class Calculadora
{
    public function suma(int $a, int $b): int
    {
        return $a + $b;
    }
    public function resta(int $a, int $b): int
    {
        return $a - $b;
    }
    public function multiplicacion(int $a, int $b): int
    {
        return $a * $b;
    }

    public function divideix(int $a, int $b): float
    {

        if ($b == 0) {
            throw new \DivisionByZeroError('No es pot dividir per zero');
        }
        return $a / $b;
    }
}


