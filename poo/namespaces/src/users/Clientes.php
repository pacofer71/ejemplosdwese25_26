<?php
namespace src\users;
class Clientes{
    public function __construct(public string $nombre)
    {
        echo "<br>Cliente de la carpeta <b>users</b> de nombre:  $this->nombre";
    }
}