<?php
namespace src\users;
class User{
    public function __construct(public string $nombre)
    {
        echo "<br>Usuario de la carpeta <b>users</b> y la clase User de nombre:  $this->nombre";
    } 
}