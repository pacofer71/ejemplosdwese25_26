<?php
function suma(int|float $num1, int|float $num2): int|float
{
    return $num1 + $num2;
}
function pintarTabla($filas, $columnas): void
{
    if (!is_numeric($filas) || !is_numeric($columnas)) {
        echo "<br>Error, se esperaban valores númericos!!!!<br>";
        return;
    }
    $filasAEntero = (int) $filas;
    $columnasAEntero = (int) $columnas;
    if (rangoErroneo($filasAEntero, 1, 5) || rangoErroneo($columnasAEntero, 1, 10)) {
        echo "<br>Error, filas y/o columnas erróneas!!!!<br>";
        return;
    }
    //todo está bien pinto la tan anhelada tabla
    echo "<table align='center' border='1' cellpadding='2' cellspacing='2'>";
    for ($f = 0; $f < $filasAEntero; $f++) {
        echo "<tr>";
        for ($c = 0; $c < $columnasAEntero; $c++) {
            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        }
        echo "</tr>";
    }
    echo "<table>";
}
function rangoErroneo(int $valor, int $min, int $max): bool
{
    return ($valor < $min || $valor > $max);
}

//Una funcion que me recibas las filas (1 y 5) y las columnas (1 y 10)
//y me pinte una tabla html de filasxcolumnas
//3b cada celda meteremos un par de espacios en blanco para que se vean bien

$n1 = 100.67;
$n2 = 200;
echo "La suma de $n1 + $n2 = " . suma($n1, $n2);

pintarTabla("sad12", "asdads234");
pintarTabla(200, 400);
pintarTabla(4,8);
