<?php
class Coche
{
        private static int $id=0;
        private string $marca;
        private string $modelo;
        private int $kilometros;
        public bool $disponible = false;

        public function __construct() {
                self::$id++;
        }

        public static function getId(): int{
                return self::$id;
        }




        /**
         * Get the value of marca
         * 
         */
        public function getMarca(): string
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         */
        public function setMarca(string $marca): self
        {
                $this->marca = $marca;

                return $this; //para implementar fluent interface
        }

        /**
         * Get the value of modelo
         */
        public function getModelo(): string
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         */
        public function setModelo(string $modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of kilometros
         */
        public function getKilometros(): int
        {
                return $this->kilometros;
        }

        /**
         * Set the value of kilometros
         */
        public function setKilometros(int $kilometros): self
        {
                $this->kilometros = $kilometros;

                return $this;
        }
}
echo "<br>Para la clase El id es : " . Coche::getId();
$coche = new Coche;
$coche->setMarca("Seat");
$coche->setModelo("Ibiza");
$coche->setKilometros(23000);
var_dump($coche);

$coche2 = (new Coche)
        ->setMarca("Ford")
        ->setModelo("Fiesta")
        ->setKilometros(245666);

var_dump($coche2);
//echo "La marca es: {$coche->marca}";
//$coche->modelo="Arona";
echo "<hr><hr>";
echo "<br>La marca de coche2 es: ".$coche2->getMarca(); 
echo "<br>Para la clase El id es : " . Coche::getId();
echo "<br>Para coche1 El id es : ".$coche::getId(); //No seria correcto
echo "<br>Para coche2 El id es : ".$coche2::getId(); //No seria correcto

