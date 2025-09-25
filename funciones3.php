<?php
function pintarArray(array $array): void
{
    global $min;
    global $max;
    echo "Entre $min y $max hay un total de " . count($array) . " primos, estos son:<br>";
    foreach ($array as $primo) {
        echo "$primo, ";
    }
}
$esPrimo = function (int $n): bool {
    if ($n == 1) return true;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
            break;
        }
    }
    return true;
};

//Con esta funcion hacer un programa que me muestre todo los numeros primos entre $min y $max;
$min = 1;
$max = 20;
$datos = range($min, $max);
$primos = array_filter($datos, $esPrimo);
pintarArray($primos);
// funciones recursivas
function factorial(int $n): int{
    if($n==0) return 1;
    return $n*factorial($n-1);
}
echo "<hr>";
$n=5
;
$nfact=factorial($n);
echo "$n!=".$nfact."<br>";
function esPalindromo(string $cad): bool{
    $cad=strtolower($cad);
    $cad=str_replace(' ', '', $cad);
    return $cad===strrev($cad);
}
$cadena="Dabale arroz a la zorra el abad";
if(esPalindromo($cadena)){
    echo "<br>La cadena es un palindromo";
}else{
    echo "<br>La cadena NO es un palindromo";
}

// Contar vocales
function contarVocales(string $cad):array{
    $contador=[
        'a'=>0,
        'e'=>0,
        'i'=>0,
        'o'=>0,
        'u'=>0
    ];
    $cad=strtolower($cad);
    for($i=0; $i<strlen($cad); $i++){
        $letra=$cad[$i];
        if(array_key_exists($letra, $contador)){
            $contador[$letra]++;
        }
    }
    return $contador;
}
$cad="Hola MUndO ii i a Cruel";
var_dump(contarVocales($cad));