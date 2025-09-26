<?php
//Ejercicio 11: Crea una función validarEmail que valide formato de email y devuelva true/false
//usando funciones de string
function emailValido(string $email): bool
{
    if (empty($email)) {
        throw new Exception("Se esperaba un email!!!!", -43);
    }
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
$email = "manolo@email.es";
$email2 = "manolo.com";
$email3 = "manolo@dominio";
$email4 = "";
if (emailValido("s")) {
    echo "El email es válido";
} else {
    echo "El email NO es válido";
}
echo "<br>";
if (emailValido($email)) {
    echo "El email es válido";
} else {
    echo "El email NO es válido";
}
//---------------------------
//Ejercicio 15: Implementa una función calculadora que usando parámetros nombrados pueda
//sumar, restar, multiplicar o dividir
function calculadora(string $operacion, int|float $num1, int|float $num2): int|float
{
    $operacion = strtolower($operacion);

    $res = match ($operacion) {
        'suma' => $num1 + $num2,
        'resta' => $num1 - $num2,
        'multiplicacion' => $num1 * $num2,
        'division' =>
        ($num2==0) ? throw new DivisionByZeroError("!!! El divisor NO puede ser 0") : $num1/$num2,
        default => throw new Exception("Error: operación inválida!!!!")
    };

    return $res;
}
$res=calculadora(operacion:'SUMAdasdsad
', num1: 10, num2: 9.0);
echo "<br>$res<br>";
