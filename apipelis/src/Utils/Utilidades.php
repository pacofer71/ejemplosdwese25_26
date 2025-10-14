<?php
namespace App\Utils;

class Utilidades{
    public static function getPeliculas(): array{
        $contenidoApi=file_get_contents(
            "https://api.themoviedb.org/3/movie/popular?api_key=xxx_xxxx_xxxx"
        );
        if(!$contenidoApi){
            return [];
        }
        $contenidoJson=json_decode($contenidoApi, true);
        $contenidoPelis=$contenidoJson['results'];
        //var_dump($contenidoPelis);
        $peliculas=[];
        foreach($contenidoPelis as $peli){
            $titulo=$peli['title'];
            $resumen=$peli['overview'];
        }
        return[];
    }
}