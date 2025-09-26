<?php
echo "Hola Desde la Consola";
echo "\n";
echo "Adios desde la consola\n";
$valor = (int)readline("Dame un valor que guardare es \$valor: ");
echo "\nEl valor guardado es: $valor, y el tipo es: " . gettype($valor);
//-----------------------------------
echo "\n";
$opcionesValidas=range(1,4);
do {
    $op = readline("Dame un numero del 1 al 4, 'q|Q' para salir: ");
    if ($op == 'Q' || $op == 'q') {
        echo "\nHasta luego";
        break;
    }
    $op=(int) $op;

    if (!in_array($op, $opcionesValidas)) {
        echo "\nError se esperaba un número del 1 al 4 o 'q|Q' para salir\n";
        continue;
    }
    pintarOpcion($op);
} while (true);

function pintarOpcion(int $op): void
{
    echo "\n Eres afortunado has elegido la opción $op \n";
}
