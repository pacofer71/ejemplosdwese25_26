<?php
require_once "Animal.php";

class Gato extends Animal{
    private string $nombre;
    private int $edad;

    public function __construct(string $continente, string $nombre, int $edad)
    {
        parent::__construct($continente);
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    public function sonido():string{
        return "Miau";
    }

    public function __toString(): string{
        return parent::__toString().", El nombre es: $this->nombre y la edad: $this->edad<br>";
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad(): int
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     */
    public function setEdad(int $edad): self
    {
        $this->edad = $edad;

        return $this;
    }
}