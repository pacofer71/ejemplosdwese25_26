<?php
namespace src\utils;

require 'Datos.php';

class Faker{
    public static function getNombre(): string{
        $indiceAleatorio=array_rand(NOMBRES);
        return NOMBRES[$indiceAleatorio];
    }
    public static function getApellidos(int $cantidad=DOS_APELLIDOS){
        if($cantidad==1){
             $indiceAleatorio=array_rand(APELLIDOS);
             return APELLIDOS[$indiceAleatorio];
        }
        $indiceAleatorio1=array_rand(APELLIDOS);
        $indiceAleatorio2=array_rand(APELLIDOS);
        return APELLIDOS[$indiceAleatorio1]." ". APELLIDOS[$indiceAleatorio2];
    }
    public static function getProvincia(): string{
        $indiceAleatorio=array_rand(PROVINCIAS);
        return PROVINCIAS[$indiceAleatorio];
    }
    public static function getPerfil(): string{
        $indiceAleatorio=array_rand(PERFILES);
        return PERFILES[$indiceAleatorio];
    }
}