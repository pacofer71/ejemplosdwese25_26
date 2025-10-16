<?php

namespace App\Utils;

use App\Pelicula;

const TOKEN = "PON_TU_TOKEN";
class ApiUtils
{
    public static function getPeliculas(): array
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/popular?language=en-US&page=1', [
            'headers' => [
                'Authorization' => "Bearer " . TOKEN,
                'accept' => 'application/json',
            ],
        ]);

        $respuesta = $response->getBody();
        $datosJson = json_decode($respuesta, true);
        $pelis = $datosJson['results'];
        $peliculas = [];
        foreach ($pelis as $peli) {
            $titulo = $peli['title'];
            $resumen = $peli['overview'];
            $imagen = $peli['poster_path'];
            $votos = $peli['vote_average'];
            $miPeli = new Pelicula($titulo, $resumen, $votos, $imagen);
            $peliculas[] = $miPeli;
        }
        return $peliculas;
    }
}
