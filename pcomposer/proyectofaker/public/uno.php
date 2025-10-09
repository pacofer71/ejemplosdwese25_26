<?php

use src\Clientes;
use src\utils\Faker;

spl_autoload_register(function(string $clase){
    // src\utils\Faker
    // src/utils/Faker.php
    $nombreClaseTuneado=str_replace("\\", "/", $clase).".php"; // src/utils/Faker.php
    require __DIR__."/../$nombreClaseTuneado"; 
});

$cantidad=1000;
for($i=0; $i<$cantidad; $i++){
    $nombre=Faker::getNombre();
    $numApellidos=random_int(1,2);
    $apellidos=Faker::getApellidos($numApellidos);
    $provincia=Faker::getProvincia();
    $perfil=Faker::getPerfil();
    $cliente=new Clientes($nombre, $apellidos, $perfil, $provincia);
    echo $cliente;
}