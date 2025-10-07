<?php
class Animal{
    public static int $id=0;
    protected string $continente;

    public function __construct(string $continente="Indeterminado")
    {
        self::$id++;
        $this->continente=$continente;
        
    }

    public function sonido(): string{
        return "Este animal no se que sonido hace";
    }

    public function __toString(): string
    {
        return "El id de animal es: ".self::$id.", y su continente es: <b>{$this->continente}</b>";
    }
}