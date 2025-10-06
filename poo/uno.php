<?php
class Coche{
    public string $marca;
    public string $modelo;
    public int $kilometros;
    public string $color;
    public bool $disponible=false;

    public function __construct(string $marca, string $modelo, int $klms, bool $disponible, string $color="Indefinido")
    {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->kilometros=$klms;
        $this->color=$color;
        $this->disponible=$disponible;
    }

    public function __toString(): string
    {
        $dis=($this->disponible) ? "SI" : "NO";
        return <<< TXT
        <br>### ------- Datos del Coche ------ ###<br>
        La marca es: {$this->marca}<br>
        EL modelo es: {$this->modelo}<br>
        El coche tiene: {$this->kilometros} Kilometros<br>
        El color es: {$this->color}<br>
        El coche $dis está disponible<br>
        TXT;
    }

}
$coche1=new Coche("Seat", "Ibiza",12500, false);
$coche2=new Coche("Reanult", "Megane",112500, true, "Negro");
$coche3=new Coche("Seat", "Arona",16500, true, "Rojo");
$coche4=new Coche("Toyota", "Corolla",212500, false);
$coche5=new Coche("Ford", "Mondeo",12500, true, "Azul");

var_dump($coche1);
echo "<hr>";
echo "El color es: {$coche1->color}<br>";
echo "La marca es: ".$coche1->marca. "<br>";
$coche1->color="Gris";
echo "El color es: {$coche1->color}<br>";
echo $coche1;
$coches=[$coche1, $coche2, $coche3, $coche4, $coche5];
var_dump($coches);
echo "<hr>";
foreach($coches as $item){
    echo "La marca es {$item->marca}, y el modelo es {$item->modelo}<br>";
}
// CLONADO o COPIA DE OBJETOS
echo "<hr><hr><hr>";
$coche5b=$coche5;
$coche5->color="Negro Profundo";
//var_dump($coche5b);
$coche5b->modelo="Fiesta";
echo $coche5;
echo $coche5b;
echo "<br>#################################################################################################<br>";
$coche4b=clone($coche4);
echo $coche4;
echo $coche4b;
$coche4->color="Verde";
echo $coche4;
echo $coche4b;

