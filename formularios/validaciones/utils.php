<?php
include 'datos.php';

function sanearCadenas(string $cad): string{
    return htmlspecialchars(trim($cad));  //trim() quita espacios en blanco al principio y al final ltrim(),rtrim()
}

function errorLongitudCadena(string $valor, int $max, int $min): bool{
    return (strlen($valor)<$min || strlen($valor)>$max);
}
function emailValido(string $email): bool{
   return  filter_var($email, FILTER_VALIDATE_EMAIL);
}

function errorPrecio(float|int $valor, float|int $min, float|int $max): bool{
    return ($valor<$min || $valor>$max);
}

function provinciaValida(string $provincia): bool{
    global $provincias;
    return in_array($provincia, $provincias);
}
function aficionesValidas(array $aficionesElegidas): bool{
    global $aficiones;
    foreach($aficionesElegidas as $item){
        if(!in_array($item, $aficiones)) return false;
    }
    return true;
}
function colorValido(string $color): bool{
    global $colores;
    return in_array($color, $colores);
}