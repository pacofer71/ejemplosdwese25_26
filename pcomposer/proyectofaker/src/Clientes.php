<?php
namespace src;
class Clientes{
    public function __construct(
        public string $nombre,
        public string $apellidos,
        public string $perfil,
        public string $provincia
    )
    {
        
    }
    private function getNombreCompleto(): string{
        return  "<b>".$this->apellidos.", ".$this->nombre."</b>";
    }
    public function __toString(): string
    {
        return "Nombre Completo: ". $this->getNombreCompleto(). ", Perfil: <b>{$this->perfil}</b>, 
            Provincia: <b>{$this->provincia}</b><br>";        
    }
}