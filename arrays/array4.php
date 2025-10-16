<?php
//array_pop elimina el ultimo elemento de un array //array_push
$datos = ['uno', 'dos', 'tres', 'cuatro'];
var_dump($datos);
array_pop($datos);
var_dump($datos);
//array_shift() elimina el primer elemento de un array
//array_unshift() agrega elementos al inicio
$datos = ['uno', 'dos', 'tres', 'cuatro'];
var_dump($datos);
array_shift($datos);
var_dump($datos);
//------------------------------------
echo "<hr>";
$datos = ['uno', 'dos', 'tres', 'cuatro'];
var_dump($datos);
array_unshift($datos, 'primero');
var_dump($datos);
//Desordenar un array
shuffle($datos);
var_dump($datos);
//-----------
$dado = [1, 2, 3, 4, 5, 6];
shuffle($dado);
echo "<br>La tirada ha salido: " . $dado[0];
//------array_slice para coger parte de un array
$datos = ['uno', 'dos', 'tres', 'cuatro'];
$datos1 = array_slice($datos, 1, 2);
var_dump($datos1);
$datos2 = array_slice($datos, 0, count($datos) - 1);
var_dump($datos2);
//--------------aarray_keys y array_values
$datos = [
    "user" => "Manolo",
    "pass" => "secret0",
    "email" => "manolo@email.es"
];
$claves = array_keys($datos);
var_dump($claves);
$valores = array_values($datos);
var_dump($datos);
//verifica que un elemento este en un array in_array()
echo "<hr><hr>";
$datos = ['uno', 'dos', 'tres', 'cuatro'];
if (in_array('juan', $datos)) {
    echo "El elemento SI está en el array datos";
} else {
    echo "El elemento NO esta en el array datos";
}
echo "<br>";
// OPERADOR TERNARIOR ():si?no
echo (in_array('juan', $datos)) ? "El elemento SI está en el array datos" : "El elemento NO esta en el array datos";
echo "<hr>";
$var = (in_array('uno', $datos)) ? "SI" : "NO";
echo "El elemento $var está en el array datos";

