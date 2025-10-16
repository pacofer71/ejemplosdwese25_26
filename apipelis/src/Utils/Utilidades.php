<?php
namespace App\Utils;

use App\Pelicula;
const API_KEY="PON_TU_API_KEY";
class Utilidades{
    public static function getPeliculas(): array{
        $contenidoApi=file_get_contents(
            "https://api.themoviedb.org/3/movie/popular?api_key=".API_KEY
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
            $imagen=$peli['poster_path'];
            $votos=$peli['vote_average'];
            $miPeli=new Pelicula($titulo, $resumen, $votos, $imagen);
            $peliculas[]=$miPeli;
        }
        return $peliculas;
    }
}