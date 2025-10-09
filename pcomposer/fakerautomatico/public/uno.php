<?php

use Src\Clientes;

 require __DIR__."/../vendor/autoload.php";

 $faker = \Faker\Factory::create('es_ES');

 $cantidad=1000;
 for($i=0; $i<$cantidad; $i++){
    $uuid=$faker->uuid();
    $email=$faker->unique()->email();
    $nombre=$faker->firstName();
    $apellidos=$faker->lastName()." ".$faker->lastName();
    $provincia=$faker->state();
    $perfil=$faker->emoji();
    $cliente = new Clientes($nombre, $apellidos, $perfil, $provincia, $email, $uuid);
    echo $cliente;
 }