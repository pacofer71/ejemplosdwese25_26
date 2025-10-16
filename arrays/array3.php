<?php
// Funciones de ordenacion de arrays
$uno=['ana', 'zacarias', 'pedro', 'ines', 'lucas'];
$dos=[
    'nombre1'=>"pedro",
    'nombre2'=>"lucas",
    'direccion1'=>"calle Uno",
    'direccion2'=>"avenida 2",
    'apellidos'=>"gil",
];
//sort()
echo "Array Normal antes de sort()";
var_dump($uno);
echo "<br>Array Normal despues de sort";
sort($uno);
var_dump($uno);
echo "<hr>";
echo "Array Asociativo antes de sort()";
var_dump($dos);
echo "<br>Array Asociativo despues de sort";
sort($dos);
var_dump($dos);
//--------------------------------------------rsort()
$uno=['ana', 'zacarias', 'pedro', 'ines', 'lucas'];
$dos=[
    'nombre1'=>"pedro",
    'nombre2'=>"lucas",
    'direccion1'=>"calle Uno",
    'direccion2'=>"avenida 2",
    'apellidos'=>"gil",
];
//rsort()
echo "Array Normal antes de rsort()";
var_dump($uno);
echo "<br>Array Normal despues de rsort";
rsort($uno);
var_dump($uno);
echo "<hr>";
echo "Array Asociativo antes de rsort()";
var_dump($dos);
echo "<br>Array Asociativo despues de rsort";
rsort($dos);
var_dump($dos);
///////////////////////////// rsort()
echo "<hr><hr><hr>";
$uno=['ana', 'zacarias', 'pedro', 'ines', 'lucas', -45=>'pepe'];
$dos=[
    'nombre1'=>"pedro",
    'nombre2'=>"lucas",
    'direccion1'=>"calle Uno",
    'direccion2'=>"avenida 2",
    'apellidos'=>"gil",
];
//ksort()------------------------------------------------
echo "Array Normal antes de ksort()";
var_dump($uno);
echo "<br>Array Normal despues de ksort";
ksort($uno);
var_dump($uno);
echo "<hr>";
echo "Array Asociativo antes de ksort()";
var_dump($dos);
echo "<br>Array Asociativo despues de ksort";
ksort($dos);
var_dump($dos);
///////////////////////////// krsort()------------------------------------------
echo "<hr><hr><hr>";
$uno=['ana', 'zacarias', 'pedro', 'ines', 'lucas', -45=>'pepe'];
$dos=[
    'nombre1'=>"pedro",
    'nombre2'=>"lucas",
    'direccion1'=>"calle Uno",
    'direccion2'=>"avenida 2",
    'apellidos'=>"gil",
];
//rksort()
echo "Array Normal antes de krsort()";
var_dump($uno);
echo "<br>Array Normal despues de krsort";
krsort($uno);
var_dump($uno);
echo "<hr>";
echo "Array Asociativo antes de krsort()";
var_dump($dos);
echo "<br>Array Asociativo despues de krsort";
krsort($dos);
var_dump($dos);
///////////////////////////// asort()------------------------------------------
echo "<hr><hr><hr><hr>";
$uno=['ana', 'zacarias', 'pedro', 'ines', 'lucas', -45=>'pepe'];
$dos=[
    'nombre1'=>"pedro",
    'nombre2'=>"lucas",
    'direccion1'=>"calle Uno",
    'direccion2'=>"avenida 2",
    'apellidos'=>"gil",
];
//asort()
echo "Array Normal antes de asort()";
var_dump($uno);
echo "<br>Array Normal despues de asort";
asort($uno);
var_dump($uno);
echo "<hr>";
echo "Array Asociativo antes de asort()";
var_dump($dos);
echo "<br>Array Asociativo despues de asort";
asort($dos);
var_dump($dos);
//---------------------------
///////////////////////////// arsort()------------------------------------------
echo "<hr><hr><hr><hr>";
$uno=['ana', 'zacarias', 'pedro', 'ines', 'lucas', -45=>'pepe'];
$dos=[
    'nombre1'=>"pedro",
    'nombre2'=>"lucas",
    'direccion1'=>"calle Uno",
    'direccion2'=>"avenida 2",
    'apellidos'=>"gil",
];
//arsort()
echo "Array Normal antes de arsort()";
var_dump($uno);
echo "<br>Array Normal despues de arsort";
arsort($uno);
var_dump($uno);
echo "<hr>";
echo "Array Asociativo antes de arsort()";
var_dump($dos);
echo "<br>Array Asociativo despues de arsort";
arsort($dos);
var_dump($dos);