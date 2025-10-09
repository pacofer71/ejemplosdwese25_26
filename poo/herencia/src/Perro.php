<?php
require_once "Animal.php";
Class Perro extends Animal{
    public string $raza;

    public function __construct(string $raza, ?string $continente=null) //?string == string|null
    {
        ($continente==null) ? parent::__construct() : parent::__construct($continente);
        
        $this->raza=$raza; 
        
    }

    public function sonido(): string{
        return "Guau!!!";
    }

    public function __toString(): string
    {
        return parent::__toString().", La raza del perro es: $this->raza<br>";
    }
}