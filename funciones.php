<?php
function suma(int|float $num1, int|float $num2): int|float
{
    return $num1 + $num2;
}
function pintarTabla(int $filas, int $columnas): void{

}

//Una funcion que me recibas las filas (1 y 5) y las columnas (1 y 10)
//y me pinte una tabla html de filasxcolumnas
//3b cada celda meteremos un par de espacios en blanco para que se vean bien

$n1 = 100.67;
$n2 = 200;
echo "La suma de $n1 + $n2 = " . suma($n1, $n2);
