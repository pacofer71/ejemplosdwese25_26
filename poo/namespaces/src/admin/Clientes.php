<?php
namespace src\admin;
class Clientes{
    public function __construct(public string $nombre)
    {
        echo "<br>Cliente de la carpeta <b>Admin</b> de nombre:  $this->nombre";
    }
}