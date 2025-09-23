<?php
//Algunas funciones interesantes de arrays
//count() devuelve la cantidad de elementos
//implode() convierte un array en una cadena
$usuarios=['pepe', 'juan', 'ana', 'ines', 'lucas'];
$cadena=implode(", ", $usuarios);
echo $cadena;
//explode() convirte una cadena en un array
$cadena="lucas, pedro, ines, juan esteban, federico";
$cadenaArray=explode(", ", $cadena);
var_dump($cadenaArray);
$texto="usuario:passs:/home/usuario/:usuario";
$textoArray=explode(":", $texto);
var_dump($textoArray);
//compact() conviete variables a array asociativos
$nombre="Manolo";
$apellidos="Perez Gil";
$pass="asfsdfsg";
$datos=compact('nombre', 'apellidos', 'pass');
var_dump($datos);
$datos1=[
    'nombre'=>$nombre,
    'apellidos'=>$apellidos,
    'pass'=>$pass
];
//array_push() añade uno o mas elemento al final de un array
$frutas=['Pera', 'Sandia', 'Naranja'];
array_push($frutas, "Cereza", "Manzana");
var_dump($frutas);
$frutas[]="Limon";
var_dump($frutas);