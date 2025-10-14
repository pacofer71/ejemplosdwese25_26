<?php
namespace App;
const IMAGE_URL="https://image.tmdb.org/t/p/original";
class Pelicula{
    public string $poster;

    public function __construct(
        public string $titulo,
        public string $resumen,
        public float $puntuacion,
        string $nombre #
    )
    {
        $this->poster=IMAGE_URL."$nombre";
    }
}