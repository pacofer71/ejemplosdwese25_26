<?php
//Parametros por defecto
function saludo(string $nombre = "Anonimo"): void
{
    echo "Hola $nombre, buenos dias!!!<br>";
}

saludo('Manolo');
saludo();

function validar(string $user, $email = "anonimo@email.es"): void
{
    echo "Validando al usuario $user, con email $email.<br>";
}
/*
function validar1(string $user="anonimo", string $email): void{ //MAL Valores por defecto simepre al final
    echo "Validando al usuario $user, con email $email.<br>";
}
*/
validar("pedro", "pedro@email.es");
//validar1("ana", "aba@email.es");

validar("ines");
//validar1("correo@email.com");
function calcularAreaTriangulo(int |float $base, int|float $altura): int|float
{
    echo "Base=$base<br>";
    echo "Altura=$altura<br>";
    return $base * $altura * 0.5;
}
//a partir de php 8.0 puedo usar el nombre de los parametros al llamr a la funcion
//esto me permite cambiar el orden al invocar la misma
$area1 = calcularAreaTriangulo(base: 3, altura: 4);
echo "<br>El area es $area1<br>";
$area2 = calcularAreaTriangulo(altura: 45, base: 1);
$area3 = calcularAreaTriangulo(45, 1);

//--------------------------Paso por referencia recomendado
echo "<hr>";
function incrementar(int &$manolo)
{
    $manolo++;
    echo "El valor de \$cont dentro de la funcion es: $manolo";
}

$cont = 23;
incrementar($cont);
echo "<br>El valor de \$cont despues de incrementar y fuera de la funcion es: $cont";
//----------------------------------------
function incrementar2()
{
    global $contador;
    $contador++;
    echo "<br>El valor de \$contador despues de incrementar y dentro de la funcion es: $contador";
}


$contador = 10;
incrementar2($contador);
echo "<br>El valor de \$contador despues de incrementar y fuera de la funcion es: $contador";
//---------------------------------------------------
echo "<hr>";
/// Funciones callable, flechas (arrow) o lambdas, anonimas
$suma = function ($a, $b) {
    return $a + $b;
};
$saludo = function (string $nombre = "Anonimo"): void {
    echo "<br>Buenos dias $nombre<br>";
};
echo $suma(10, 5);
$saludo();
$saludo("Juan Andres");
//si la funcion va a devolver algo y es una unica linea puedo usar la notacion siguiente:
$suma1 = fn(int|float $a, int|float $b): int|float => $a + $b;
echo "<br>" . $suma1(10, 20);
//------------------------------------------------------
$datos = range(1, 20);
//var_dump($datos);
$esPar = fn(int $v): bool => !($v % 2);
//var_dump($esPar(1));
//var_dump($esPar(4));
$esMultTres=fn(int $v): bool => !($v % 3);
function filtrarArray(array $array, callable $filtro): array{
    $arrayFiltrado=[];
    foreach($array as $valor){
        if($filtro($valor)) $arrayFiltrado[]=$valor;
    }
    return $arrayFiltrado;
}
$datosPares=filtrarArray($datos, $esPar);
$datosMultiplosDeTres=filtrarArray($datos, $esMultTres);
var_dump($datosPares);
var_dump($datosMultiplosDeTres);
var_dump(array_filter($datos, $esPar));
//-----------------------------------------------------------------------------------------
$cuadrados=fn(int $n): int=>$n*$n;
$cubos=fn(int $n): int=>$n*$n*$n;
function manipularArray(array $array, callable $metodo){
    $arrayManipulado=[];
    foreach($array as $valor){
        $arrayManipulado[]=$metodo($valor);
    }
    return $arrayManipulado;
}
$datosAlCuadrado=manipularArray($datos, $cuadrados);
$datosAlCubo=manipularArray($datos, $cubos);
var_dump($datosAlCuadrado);
var_dump($datosAlCubo);
var_dump(array_map($cuadrados, $datos));
//--------------------------------------------------------------------------------------------------------